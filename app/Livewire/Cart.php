<?php

namespace App\Livewire;

use App\Models\Cigarette;
use App\Models\Liquid;
use Livewire\Component;

class Cart extends Component
{
    public $cigarettes;
    public $liquids;

    public $productName;
    public $productId;
    public $productType;
    public array $quantity = [];

    public function mount()
    {
        $this->cigarettes = Cigarette::all();
        foreach ($this->cigarettes as $cigarette){
            $this->quantity[$cigarette->id] = 1;
        }

//        $this->liquids = Liquid::all();
//        foreach ($this->liquids as $liquid){
//            $this->quantity[$liquid->id];
//        }
    }

    public function render()
    {
        return view('livewire.cart',
            ['cart' => \Gloudemans\Shoppingcart\Facades\Cart::content()]
        );
    }

    public function increment($productId)
    {
        $this->quantity[$productId]++;
    }

    public function decrement($productId)
    {
        if ($this->quantity[$productId] == 1)
            return;

        $this->quantity[$productId]--;
    }

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

    public function delete($rowId)
    {
        // Remove product from cart using $rowId
        \Gloudemans\Shoppingcart\Facades\Cart::remove($rowId);

        // if we remove the product, then put 1
        $this->quantity[$this->productId] = 1;

        // Dispatch the event
        $this->dispatch('removed from cart');
    }

    public function update ()
    {
        dd('ok');
    }
}
