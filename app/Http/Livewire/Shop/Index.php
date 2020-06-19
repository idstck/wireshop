<?php

namespace App\Http\Livewire\Shop;

use App\Facades\Cart;
use App\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search;

    protected $updatesQueryString = [
        ['search' => ['except' => '']]
    ];

    public function mount()
    {
        $this->search = request()->query('search', $this->search);
    }

    public function render()
    {
        return view('livewire.shop.index', [
            'products' => $this->search === null ?
                Product::latest()->paginate(8) :
                Product::latest()->where('title', 'like', '%' . $this->search . '%')->paginate(8)
        ]);
    }

    public function addToCart($productId)
    {
        $product = Product::find($productId);
        Cart::add($product);
        $this->emit('addToCart');
        // dd(Cart::get()['products']);
    }
}
