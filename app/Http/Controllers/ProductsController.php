<?php

namespace App\Http\Controllers;

use App\Models\Cigarette;
use App\Models\Liquid;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use function Symfony\Component\String\s;

class ProductsController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
