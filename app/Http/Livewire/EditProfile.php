<?php

namespace App\Http\Livewire;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class EditProfile extends Component
{
    public $name;
    public $age;
    public $phone;
    public $message;

    public function mount(){
        $user= User::find(Auth::user()->id);
        $this->name=$user["name"];
        $this->age=$user["age"];
        $this->phone=$user["phone"];
    }

    public function render()
    {
       
        return view('livewire.edit-profile')->extends("layouts.template");
    }

    public function update_profile(){

        $this->validate([
            'name'=>'required',
            'age'=>'required',
            'phone'=>'required',
        ]);

        User::where("id", Auth::user()->id)->update([
            "name"=> $this->name,
            "age"=>$this->age,
            "phone"=>$this->phone
        ]);

        session()->flash('message', 'Profile successfully updated.');

        return redirect()->route("dashboard");
    }
}
