<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    public function render()
    {
        $products = Product::orderby('position')->get();
        return view('livewire.products', compact('products'));
    }

    public function updateProductsOrder($list){

        foreach($list as $item){
            Product::whereId($item['value'])->update(['position' => $item['order']]);
        }

    }
}
