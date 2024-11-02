<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // Method to show the Services page
    public function showServices()
    {
        return view('services'); // Ensure 'services.blade.php' exists in 'resources/views'
    }
}