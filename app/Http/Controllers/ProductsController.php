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
        $cart = Cart::content();
        $total = Cart::priceTotal();

        return view('index', compact('cart', 'total'));
    }
}
