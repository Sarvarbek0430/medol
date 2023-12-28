<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Test extends Component
{
    public $search = "";

    public function render()
    {
        $products = Product::where("name", "LIKE", "%".$this->search."%")
        ->orWhere("price", "LIKE", "%".$this->search."%")
        ->orWhere("model", "LIKE", "%".$this->search."%")->get();


        return view('livewire.test', compact('products'));
    }
}
