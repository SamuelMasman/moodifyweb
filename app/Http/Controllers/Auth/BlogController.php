<?php

namespace App\Http\Controllers;

use App\Models\Blog; // Ensure this is included

class BlogController extends Controller
{
    // Method to display the welcome page with blogs
    public function showWelcome()
    {
        $blogs = Blog::all(); // Fetch all blogs from the database
        return view('welcome', compact('blogs'));
    }

    // Method to display the blog list
    public function showBlog()
    {
        $blogs = Blog::where('is_featured', true)->get();
        return view('blog', compact('blogs'));
    }

    // Method to display a single blog
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('article', compact('blog'));
    }
}