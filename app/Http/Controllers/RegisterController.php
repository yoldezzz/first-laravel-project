<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    // Method to show the registration form
    public function create()
    {
        return view('register.create');
    }

    // Method to handle the form submission
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email', // Add email validation
            'password' => 'required|min:8', // Add minimum length requirement
        ]);
    }
}


