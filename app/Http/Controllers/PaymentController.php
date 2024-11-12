<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function processPayment(Request $request)
    {
        // Here, you would handle any payment processing logic.
        // For example, saving payment details, applying a discount, etc.
        
                return redirect()->route('profile');
    }
}
