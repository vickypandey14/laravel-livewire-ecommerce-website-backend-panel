<?php

namespace App\Http\Livewire;
use App\Models\Products;
use Livewire\WithPagination;
use Livewire\Component;

class ShowProducts extends Component
{
    public $product_alert;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public function render()
    {

        return view('livewire.show-products',['products' => Products::paginate(10)
        ])->extends("layouts.template");
    }

    public function delete_product($id){
        Products::destroy($id);

        $this->product_alert="Product Deleted!";
    }
}
