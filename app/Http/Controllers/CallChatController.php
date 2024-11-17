<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CallChatController extends Controller
{
    public function show()
    {
        return view('callchat');
    }
}