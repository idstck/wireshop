<?php

namespace App\Http\Livewire\Product;

use App\Product;
use Livewire\Component;

class Create extends Component
{
    public $title;
    public $description;
    public $price;
    public $image;

    public function render()
    {
        return view('livewire.product.create');
    }

    public function store()
    {
        Product::create([
            'title' => $this->title,
            'price' => $this->price,
            'description' => $this->description,
        ]);

        $this->emit('productStored');
    }
}
