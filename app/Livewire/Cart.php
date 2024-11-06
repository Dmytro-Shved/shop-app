<?php

namespace App\Livewire;

use App\Models\Cigarette;
use App\Models\Liquid;
use Livewire\Attributes\On;
use Livewire\Component;

use function Livewire\Volt\{on};

on(['update_quantity' => function () {

}]);

class Cart extends Component
{
    public $productName;
    public $productType;
    public $cigarettes;
    public $liquids;
    public $productId;
    public array $quantity = [];

    public function mount()
    {
        $this->cigarettes = Cigarette::all();
        foreach ($this->cigarettes as $cigarette){
            $this->quantity[$cigarette->id] = 1;
        }

        $this->liquids = Liquid::all();
        foreach ($this->liquids as $liquid){
            $this->quantity[$liquid->id] = 1;
        }
    }

    #[On('removed_from_modal')]
    public function render()
    {
        return view('livewire.cart',
            ['cart' => \Gloudemans\Shoppingcart\Facades\Cart::content()]
        );
    }

    // Increment quantity
    public function increment($productId)
    {
        $this->quantity[$productId]++;
    }

    // Decrement quantity
    public function decrement($productId)
    {
        if ($this->quantity[$productId] == 1)
            return;

        $this->quantity[$productId]--;
    }

    // Store product to cart
    public function store($productId, $productType)
    {
        // Check if product is a Cigarette or Liquid, then store it in a cart
        if ($productType == 'cigarette') {
            $product = Cigarette::findOrFail($productId);
        }
        else {
            $product = Liquid::findOrFail($productId);
        }

        // Create new product in the cart
        \Gloudemans\Shoppingcart\Facades\Cart::add(
            $product->id,
            $product->name,
            $this->quantity[$productId],
            $product->price,
            (float)null, // weight (unnecessary value)
            ['type' => $productType] //options
        );

        // Dispatch the event
        $this->dispatch('added to cart');
    }

    #[On('removed_from_modal')]
    #[On('cart_destroyed')]
    // Update quantity after 'removing product from modal cart' and after 'destroying cart
    public function update_qty()
    {
        $this->quantity[$this->productId] = 1;
    }

    // Remove product from cart using $rowId
    public function remove($rowId)
    {
        // Remove product from cart using $rowId
        \Gloudemans\Shoppingcart\Facades\Cart::remove($rowId);

        // if we remove the product, then put 1
        $this->quantity[$this->productId] = 1;

        // Dispatch the event
        $this->dispatch('removed from cart');
    }

    #[On('destroy_cart')]
    // Destroy cart after receiving event 'destroy_cart' (from modal)
    public function destroy_cart()
    {
        \Gloudemans\Shoppingcart\Facades\Cart::destroy();

        $this->dispatch('cart_destroyed');
    }
}
