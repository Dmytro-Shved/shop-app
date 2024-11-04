<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public function render()
    {
        $cart = \Gloudemans\Shoppingcart\Facades\Cart::content();

        return view('livewire.counter',
            ['total' => $cart->count()]
        );
    }
}
