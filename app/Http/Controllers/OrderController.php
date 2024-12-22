<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use App\Models\Cigarette;
use App\Models\Liquid;
use App\Models\Order;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use function PHPUnit\Framework\isEmpty;

class OrderController extends Controller
{
    public function order()
    {
        $total = Cart::priceTotal();
        $cart = Cart::content();

        // If cart is empty then go to home page
        if ($cart->count() == 0){
            return redirect()->route('home');
        }
        return view('order.order', ['cart' => $cart, 'total'=> $total]);
    }

    public function create_order(Request $request)
    {
        // Get content from the cart
        $cart = Cart::content();

        // Collect all products from cart in array
        foreach ($cart as $product){
            $item = [
                'name' => $product->name,
                'quantity' => $product->qty,
                'price' => $product->price,
            ];

            $products[] = $item;
        }

        // Validation
         $request->validate([
            'name' => ['required', 'string', 'max:50', 'min:2'],
            'email' => ['required', 'email', 'max:50'],
            'phone' => ['required', 'string', 'size:15'],
            'details' => ['max:191', 'nullable'],
        ],[
            'phone.size' => 'Phone number is too small, write your full phone number'
         ]);

        // Create a new order
        $order = Order::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => str_replace(' ', '', $request->phone),
            'address' => $request->address,
            'city' => $request->city,
            'post_office' => $request->office,
            'details' => $request->details,
            'total' => str_replace(',', '', $request->total),
            'payment_method' => $request->payment_method,
            'products' => $products,
        ]);

        Mail::to('mityha.shved@gmail.com')->send(new OrderMail($order));

        Cart::destroy();

        return redirect()->route('home')
            ->with('success', 'Your order was successfully created! Wait for an email message!');
    }
}

