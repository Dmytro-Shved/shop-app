<?php

namespace App\Livewire;

use App\Models\Cigarette;
use App\Models\Liquid;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class ProductList extends Component
{
    public function render()
    {
        return view('livewire.product-list', [
            'cigarettes' => Cigarette::all(),
            'liquids' => Liquid::all(),
        ]);
    }
}
