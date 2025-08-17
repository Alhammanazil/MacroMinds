<?php

use App\Http\Controllers\PostDashboardController;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    $posts = Post::latest();

    if (request('search')) {
        $posts->where('title', 'like', '%' . request('search') . '%');
    }
    return view('posts', ['title' => 'Blog', 'posts' => $posts->get()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', [
        'title' => 'Single Post',
        'post' => $post
    ]);
});

// Route::get('/authors', function () {
//     $authors = User::withCount('posts')->get();
//     return view('authors', ['title' => 'Authors', 'authors' => $authors]);
// });

Route::get('/authors/{user:username}', function (User $user) {
    // $posts = $user->posts->load('category', 'author');
    return view('posts', [
        'title' => $user->posts()->count() .
            ' Articles by ' . $user->name,
        'posts' => $user->posts
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    // $posts = $category->posts->load('category', 'author');
    return view('posts', [
        'title' => 'Category: ' . $category->name,
        'posts' => $category->posts
    ]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [PostDashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/dashboard', [PostDashboardController::class, 'store'])
    ->middleware(['auth', 'verified']);

Route::get('/dashboard/create', [PostDashboardController::class, 'create'])
    ->middleware(['auth', 'verified'])->name('dashboard.create');

Route::get('/dashboard/{post:slug}', [PostDashboardController::class, 'show'])
    ->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
