<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Display a list of featured blogs
    public function showBlog()
    {
        $featuredBlogs = Blog::where('is_featured', true)->get();
        return view('blog', ['featuredBlogs' => $featuredBlogs]);
    }

    // Display a single blog post by ID
    public function show($id)
    {
        // Find the blog by its ID
        $blog = Blog::findOrFail($id);

        // Pass related articles logic here if needed
        $relatedArticles = Blog::where('id', '!=', $id)->take(5)->get();

        // Return the view for the blog detail page
        return view('article', [
            'blog' => $blog,
            'relatedArticles' => $relatedArticles,
        ]);
    }
}