<?php

namespace App\Livewire;

use App\Models\Cigarette;
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


    public function update_qty_dec($rowId, $new_qty)
    {
        if ($new_qty == 0)
            return;

        \Gloudemans\Shoppingcart\Facades\Cart::update($rowId, $new_qty);
    }

    public function update_qty_inc($rowId, $new_qty)
    {
        \Gloudemans\Shoppingcart\Facades\Cart::update($rowId, $new_qty);
    }
}
