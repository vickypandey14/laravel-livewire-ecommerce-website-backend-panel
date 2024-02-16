<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Products;
use Livewire\WithPagination;
class Purchase extends Component
{
    use WithPagination;
    public function render()
    {
        $products= Products::paginate(20);
        return view('livewire.purchase',["products"=>$products])->extends("layouts.template");
    }
}
