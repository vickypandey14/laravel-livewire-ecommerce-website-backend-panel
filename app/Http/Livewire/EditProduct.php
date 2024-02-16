<?php

namespace App\Http\Livewire;
use App\Models\Products;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditProduct extends Component
{
    use WithFileUploads;
    public $message;
    public $name;
    public $price;
    public $sale_price;
    public $qty;
    public $old_image;
    public $details;
    public $product_id;

    public $image;

    public function mount($id){
        $product= Products::find($id);
        $this->product_id=$product["id"];
        $this->name=$product["name"];
        $this->price=$product["price"];
        $this->sale_price=$product["sale_price"];
        $this->qty=$product["qty"];
        $this->details=$product["details"];
        $this->old_image = $product["image"];
    }
    
    public function render()
    {
        return view('livewire.edit-product')->extends("layouts.template");
    }

    public function update_product(){

        $this->validate([
            'name'=>'required',
            'price'=>'required',
            'sale_price'=>'required',
            'qty'=>'required',            
            'details'=>'required'
        ]);

        Products::where("id", $this->product_id)->update([
            "name"=> $this->name,
            "price"=>$this->price,
            "sale_price"=>$this->sale_price,
            "qty"=>$this->qty,
            "details"=>$this->details
        ]);


        session()->flash('message', 'Product updated.');

        return redirect()->route("show-products");
    }

    public function product_image(){

        $this->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
        ]);

        $image=$this->image->store('products-images', "public");

        Products::where("id", $this->product_id)->update(['image'=> $image]);

        session()->flash('message', 'Product Image successfully updated.');
        return redirect()->route("show-products");

    }

}
