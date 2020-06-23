<?php

namespace App\Http\Livewire\Shop;

use App\Facades\Cart as FacadesCart;
use Livewire\Component;

class Cart extends Component
{
    public $cart;

    public function mount()
    {
        $this->cart = FacadesCart::get();
    }

    public function render()
    {
        return view('livewire.shop.cart');
    }

    public function removeFromCart($id)
    {
        FacadesCart::remove($id);
        $this->cart = FacadesCart::get();
        $this->emit('removeFromCart');
    }
}
