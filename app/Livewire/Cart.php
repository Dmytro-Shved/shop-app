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
    }

    public function delete( $rowId)
    {
        \Gloudemans\Shoppingcart\Facades\Cart::remove($rowId);
    }
}
