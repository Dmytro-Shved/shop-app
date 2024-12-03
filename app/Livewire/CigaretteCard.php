<?php

namespace App\Livewire;

use App\Models\Cigarette;
use Livewire\Component;

class CigaretteCard extends Component
{
    public $cigarette;
    public $cart;

    public function render()
    {
        return view('livewire.cigarette-card');
    }
}
