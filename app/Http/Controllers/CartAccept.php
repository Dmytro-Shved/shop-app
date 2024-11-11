<?php

namespace App\Http\Controllers;

use App\Models\Cigarette;
use App\Models\Liquid;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;

class CartAccept extends Controller
{
    public function accept()
    {
        $total = Cart::priceTotal();
        $cart = Cart::content();

        // If cart is empty then go to home page
        if ($cart->count() == 0){
            return redirect()->route('home');
        }

        return view('cart.cart-accept', ['cart' => $cart, 'total'=> $total]);
    }
}
