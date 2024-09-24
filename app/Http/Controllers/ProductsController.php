<?php

namespace App\Http\Controllers;

use App\Models\Cigarette;
use App\Models\Liquid;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $cigarettes = Cigarette::all();
        $liquids = Liquid::all();

        return view('index', compact('cigarettes', 'liquids'));
    }
}
