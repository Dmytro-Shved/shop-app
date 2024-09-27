<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    // Register
    public function register(Request $request)
    {
        // Validate
        $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'email', 'unique:admins'],
            'password' => ['required', 'min:3', 'confirmed'],
        ]);

        dd('ok');

        //Register

        // Login

        // Redirect
    }

}
