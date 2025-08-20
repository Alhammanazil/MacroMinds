<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'username' => [
                'required',
                'string',
                'alpha_dash',
                'min:4',
                'max:16',
                Rule::unique(User::class)->ignore($this->user()->id),
            ],
            'email' => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
                Rule::unique(User::class)->ignore($this->user()->id),
            ],
            'avatar' => [
                'nullable',
                function ($attribute, $value, $fail) {
                    // Skip validation if it's HTML content (error response from FilePond)
                    if (is_string($value) && str_contains($value, '<!DOCTYPE')) {
                        return;
                    }

                    // Validate file upload
                    if ($this->hasFile('avatar')) {
                        $rules = ['image', 'max:2048'];
                        $validator = validator([$attribute => $value], [$attribute => $rules]);
                        if ($validator->fails()) {
                            $fail($validator->errors()->first($attribute));
                        }
                    }
                }
            ],
        ];
    }

    /**
     * Get custom error messages for validation.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'avatar.image' => 'File yang diupload harus berupa gambar (JPG, JPEG, PNG, BMP, GIF, SVG, atau WEBP).',
            'avatar.max' => 'Ukuran file avatar maksimal 2MB.',
        ];
    }
}
