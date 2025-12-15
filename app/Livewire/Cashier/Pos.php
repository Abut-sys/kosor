<?php

namespace App\Livewire\Cashier;

use Livewire\Component;
use App\Models\Product;

class Pos extends Component
{
    public $products;

    public function mount()
    {
        $this->products = Product::orderBy('name')->get();
    }

    public function render()
    {
        return view('livewire.cashier.pos', [
            'products' => $this->products,
        ]);
    }
}
