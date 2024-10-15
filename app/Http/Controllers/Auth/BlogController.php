<?php

namespace App\Http\Controllers;

use App\Models\Blog; 

class BlogController extends Controller
{
    public function showBlog()
    {
    // Fetch featured blogs (you can change the query to match your data structure)
    $featuredBlogs = Blog::where('is_featured', true)->get();

    // Return view and pass the data
    return view('blog')->with('featuredBlogs', $featuredBlogs);
    }

}
