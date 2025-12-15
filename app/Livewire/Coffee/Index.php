<?php

namespace App\Livewire\Coffee;

use Livewire\Component;
use App\Models\Product;

class Index extends Component
{
    public $products;
    public $categories;
    public $selectedCategory = null;

    public function mount()
    {
        $this->loadData();
    }

    public function loadData()
    {
        $this->categories = Product::select('category')
            ->whereNotNull('category')
            ->distinct()
            ->orderBy('category')
            ->pluck('category');

        $this->products = Product::when($this->selectedCategory, function ($q) {
            $q->where('category', $this->selectedCategory);
        })->orderBy('name')->get();
    }

    public function selectCategory($category = null)
    {
        $this->selectedCategory = $category;
        $this->loadData();
    }

    public function render()
    {
        return view('livewire.coffee.index');
    }
}
