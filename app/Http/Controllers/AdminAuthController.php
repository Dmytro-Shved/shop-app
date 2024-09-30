<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    // Register Admin
    public function register(Request $request)
    {
        // Validate
        $fields = $request->validate([
            'name' => ['required', 'max:255', 'unique:admins'],
            'email' => ['required', 'max:255', 'email', 'unique:admins'],
            'password' => ['required', 'min:3', 'confirmed'],
        ]);

        //Register
        $admin = Admin::create($fields);

        // Login
        Auth::login($admin);

        // Redirect
        return redirect()->route('home');
    }

}
