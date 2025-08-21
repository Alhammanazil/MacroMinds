<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PostDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->where('author_id', Auth::user()->id);

        if (request('keyword')) {
            $posts->where('title', 'like', '%' . request('keyword') . '%');
        }

        return view('dashboard.index', [
            'title' => 'Dashboard',
            'posts' => $posts->paginate(5)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.create', [
            'title' => 'Create New Post'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validation
        // $request->validate([
        //     'title' => 'required|string|max:255|unique:posts|min:5|max:255',
        //     'category_id' => 'required|exists:categories,id',
        //     'content' => 'required|string',
        // ]);

        Validator::make($request->all(), [
            'title' => 'required|string|max:255|unique:posts|min:5|max:255',
            'category_id' => 'required|exists:categories,id',
            'content' => 'required|min:50',
        ], [
            'title.required' => 'Please enter post title.',
            'category_id.required' => 'Please select a post category.',
            'content.required' => 'Please enter post content.',
        ])->validate();

        Post::create([
            'title' => $request->title,
            'date' => now()->format('Y-m-d'),
            'author_id' => Auth::user()->id,
            'category_id' => $request->category_id,
            'slug' => Str::slug($request->title),
            'content' => $request->input('content'),
        ]);

        return redirect('/dashboard')->with(['success' => 'Post created successfully.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.show', [
            'title' => 'Post Details',
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('dashboard.edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        // Validation
        Validator::make($request->all(), [
            'title' => 'required|min:5|max:255|unique:posts,title,' . $post->id,
            'category_id' => 'required|exists:categories,id',
            'content' => 'required|min:50',
        ], [
            'title.required' => 'Please enter post title.',
            'title.unique' => 'This title has already been taken.',
            'category_id.required' => 'Please select a post category.',
            'content.required' => 'Please enter post content.',
            'content.min' => 'Post content must be at least 50 characters.',
        ])->validate();

        // Update Post
        $post->update([
            'title' => $request->title,
            'author_id' => Auth::user()->id,
            'category_id' => $request->category_id,
            'slug' => Str::slug($request->title),
            'content' => $request->input('content'),
        ]);

        // Redirect
        return redirect('/dashboard')->with(['success' => 'Post updated successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/dashboard')->with(['success' => 'Post deleted successfully.']);
    }
}
