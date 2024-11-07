<?php

namespace App\Http\Controllers;

use App\Models\Cigarette;
use App\Models\Liquid;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartAccept extends Controller
{
    public function accept(Cart $cart)
    {
        $total = Cart::priceTotal();
        $cart = Cart::content();

        return view('cart.cart-accept', ['cart' => $cart, 'total'=> $total]);
    }
}
