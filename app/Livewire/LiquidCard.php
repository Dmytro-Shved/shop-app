<?php

namespace App\Livewire;

use Livewire\Component;

class LiquidCard extends Component
{
    public $liquid;
    public $cart;

    public function render()
    {
        return view('livewire.liquid-card');
    }
}
