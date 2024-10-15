<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BlogController;

// Publicly accessible routes
Route::get('/', function () {
    if (Auth::check()) {
        return view('welcome');  // The main page with Book Consultation, Forum, Blog
    } else {
        return redirect('/login');  // Redirect to login page if not authenticated
    }
});

// Custom Authentication routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Blog-related routes
Route::get('/blog', [BlogController::class, 'showBlog'])->name('blog'); // Get the list of blog posts
Route::get('/articles/{id}', [BlogController::class, 'show'])->name('articles.show'); // Show specific article

// Protected routes - accessible only after login
Route::middleware('auth')->group(function () {
    Route::get('/booking', function () {
        return view('booking');
    })->name('booking');

    Route::get('/forum', function () {
        return view('forum');
    })->name('forum');
});

Route::get('/welcome', function () {
    return view('welcome'); 
})->name('welcome');