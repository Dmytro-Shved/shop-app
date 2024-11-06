<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;
use \Gloudemans\Shoppingcart\Facades\Cart;

use function Livewire\Volt\{on};
on(['added to cart' => function () {

}]);

class ModalCart extends Component
{
    #[On('added to cart')]
    #[On('removed from cart')]
    #[On('destroy_cart')]
    public function render()
    {
        $cart = Cart::content();
        $total = Cart::priceTotal();

        return view('livewire.modal-cart', [
            'cart' => $cart,
            'total' => $total
        ]);
    }

    //Remove product from cart using $rowId
    public function remove($rowId)
    {
        Cart::remove($rowId);

        $this->dispatch('removed_from_modal');
    }

    // Destroy cart (create an event and send it)
    public function destroy_cart()
    {
        $this->dispatch('destroy_cart');
    }

    // Decrement old quantity
    public function update_qty_dec($rowId, $new_qty)
    {
        if ($new_qty == 0)
            return;

        Cart::update($rowId, $new_qty);
    }

    // Increment old quantity
    public function update_qty_inc($rowId, $new_qty)
    {
        Cart::update($rowId, $new_qty);
    }
}
