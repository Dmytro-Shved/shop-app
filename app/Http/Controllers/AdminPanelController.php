<?php

namespace App\Http\Controllers;

use App\Models\Cigarette;
use App\Models\Liquid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminPanelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cigarettes = Cigarette::all();
        $liquids = Liquid::all();

        return view('admin/admin-panel', compact('cigarettes', 'liquids'));
    }

    public function logout(Request $request)
    {
        // Logout
        Auth::logout();

        // Invalidate
        $request->session()->invalidate();

        // Regenerate @csrf
        $request->session()->regenerateToken();

        // Redirect
        return redirect()->route('home');
    }
}
