<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        // Handle FilePond upload (string path) or regular file upload
        if ($request->avatar) {
            // Delete old avatar if exists (only if it's a valid path, not HTML content)
            if (
                !empty($request->user()->avatar) &&
                $request->user()->avatar !== 'img/default-avatar.webp' &&
                !str_contains($request->user()->avatar, '<!DOCTYPE') &&
                !str_contains($request->user()->avatar, '<html')
            ) {
                Storage::disk('public')->delete($request->user()->avatar);
            }

            // Check if it's FilePond temporary path (string) or regular file upload
            if (
                is_string($request->avatar) &&
                str_starts_with($request->avatar, 'tmp/') &&
                !str_contains($request->avatar, '<!DOCTYPE') &&
                !str_contains($request->avatar, '<html')
            ) {
                // FilePond temporary file
                $newFileName = Str::after($request->avatar, 'tmp/');
                Storage::disk('public')->move($request->avatar, "img/$newFileName");
                $validated['avatar'] = "img/$newFileName";
            } elseif ($request->hasFile('avatar')) {
                // Regular file upload
                $path = $request->file('avatar')->store('img', 'public');
                $validated['avatar'] = $path;
            }
        }

        $request->user()->update($validated);

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $request->validate([
                'avatar' => ['required', 'image', 'max:2048'],
            ], [
                'avatar.image' => 'File yang diupload harus berupa gambar (JPG, JPEG, PNG, BMP, GIF, SVG, atau WEBP).',
                'avatar.max' => 'Ukuran file avatar maksimal 2MB.',
            ]);

            $path = $request->file('avatar')->store('tmp', 'public');

            // Return just the path, not JSON, because FilePond expects plain text
            return response($path, 200)
                ->header('Content-Type', 'text/plain');
        }

        return response('No file uploaded', 400);
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
