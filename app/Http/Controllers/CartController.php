<?php

namespace App\Http\Controllers;

use App\Models\Cigarette;
use App\Models\Liquid;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // Add Product to cart
    public  function store(Request $request)
    {
        // Check if product is a Cigarette or Liquid, then store it in a cart
        if ($request->type == 'cigarette') {
            $product = Cigarette::findOrFail($request->input('product_id'));

        }
        else {
            $product = Liquid::findOrFail($request->input('product_id'));
        }

        // Create a product in the cart
        Cart::add(
             $product->id,
             $product->name,
             $request->input('quantity'),
             $product->price,
             (float)null, // weight (unnecessary value)
             ['type' => $request->type] //options
        );

        // Redirect to home page with session message
        return redirect()->route('home')->with('added', "{$product->name} added to cart!");
    }

    // Delete given product from cart
    public function delete(Request $request)
    {
        // Check if product is a Cigarette or Liquid, then store it in a cart
        if ($request->type == 'cigarette') {
            $product = Cigarette::findOrFail($request->input('product_id'));
        }
        else {
            $product = Liquid::findOrFail($request->input('product_id'));
        }

        Cart::remove($request->rowId);

        return redirect()->route('home')->with('removed', "{$product->name} removed from cart!");
    }

    // Edit product quantity
    public function update_qty(Request $request)
    {
        $rowId = $request->input('rowId');
        $new_qty = $request->input('new_qty');

        Cart::update($rowId, $new_qty);

        return redirect()->route('home');
    }

    // Destroy cart from session (will delete all products in the cart)
    public function destroy(Cart $cart)
    {
        // Checking if the cart is empty
        if (Cart::content()->count() == 0){
            return redirect()->route('home')->with('empty', 'Cart is empty, nothing to destroy');
        }

        Cart::destroy();

        return redirect()->route('home')->with('destroyed', 'Cart was destroyed');
    }

    public function accept(Cart $cart)
    {
        $total = Cart::priceTotal();
        $cart = Cart::content();

        return view('cart.cart-accept', ['cart' => $cart, 'total'=> $total]);
    }
}
