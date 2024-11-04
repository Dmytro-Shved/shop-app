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
        dd('ok');
    }
}
