<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

use function Livewire\Volt\{on};
on(['added to cart' => function () {

}]);

class ModalCart extends Component
{
    #[On('added to cart')]
    #[On('removed from cart')]
    public function render()
    {
        $cart = \Gloudemans\Shoppingcart\Facades\Cart::content();
        $total = \Gloudemans\Shoppingcart\Facades\Cart::priceTotal();

        return view('livewire.modal-cart', [
            'cart' => $cart,
            'total' => $total
        ]);
    }
}
