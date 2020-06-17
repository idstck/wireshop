<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $productId;
    public $title;
    public $description;
    public $price;
    public $image;
    public $imageOld;

    protected $listeners = [
        'editProduct' => 'editProductHandler'
    ];

    public function render()
    {
        return view('livewire.product.update');
    }

    public function editProductHandler($product)
    {
        $this->productId = $product['id'];
        $this->title = $product['title'];
        $this->description = $product['description'];
        $this->price = $product['price'];
        $this->imageOld = asset('/storage/' . $product['image']);
    }
}
