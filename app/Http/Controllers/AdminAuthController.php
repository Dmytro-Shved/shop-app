<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function login(Request $request)
    {
        // Validate
        $credentials = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'min:3'],
        ]);

        // Attempt to login
        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('admin_panel');
        }else{
            return back()->withErrors([
                'failed' => 'The provided credentials do not match our records.',
            ]);
        }
    }
}
