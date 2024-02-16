<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;
use App\Models\Products;
use Livewire\Component;

class AddProducts extends Component
{
    use WithFileUploads;
    public $name;
    public $price;
    public $sale_price;
    public $qty;
    public $image;
    public $details;
    public $message;

    public function render()
    {
        return view('livewire.add-products')->extends("layouts.template");
    }

    public function make_product(){

        $this->validate([
            'name'=>'required',
            'price'=>'required',
            'sale_price'=>'required',
            'qty'=>'required',
            'image' => 'image|max:4096',
            'details' => 'required',
        ]);

        $image=$this->image->store('products-images', "public");

        Products::create([
            "name"=> $this->name,
            "price"=>$this->price,
            "sale_price"=>$this->sale_price,
            "qty"=>$this->qty,
            "image"=>$image,
            "details"=>$this->details
        ]);

        

        $this->message="Product Successfully Added.";
        $this->name="";
        $this->price="";
        $this->sale_price="";
        $this->qty="";
        $this->image="";
        $this->details="";

    }
}
