<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

use function Livewire\Volt\{on};
on(['added to cart' => function () {

}]);

class Counter extends Component
{
    #[On('added to cart')]
    #[On('removed from cart')]
    #[On('removed_from_modal')]
    #[On('cart_destroyed')]
    public function render()
    {
        $cart = \Gloudemans\Shoppingcart\Facades\Cart::content();

        return view('livewire.counter',
            ['total' => $cart->count()]
        );
    }


}
