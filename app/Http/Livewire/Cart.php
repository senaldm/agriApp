<?php
namespace App\Http\Livewire;
use App\Facades\Cart as CartFacade;
use Livewire\Component;
class Cart extends Component
{
    public $cart;

    public function mount(): void
    {
        $this->cart = Cart::get();
    }
    public function render()
    {
        return view('livewire.cart');
    }
    public function removeFromCart($productId): void
    {
        Cart::remove($productId);
        $this->cart = Cart::get();
    }
    public function checkout(): void
    {
        Cart::clear();
        $this->cart = Cart::get();
    }
}
