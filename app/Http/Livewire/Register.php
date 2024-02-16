<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $cpassword;

    public $message;

    public function render()
    {
        return view('livewire.register')->extends("layouts.template");
    }

    public function save(){

        $this->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required',
        //     'password'=>['required', Password::min(8)
        //     ->letters()
        //     ->numbers()
        //     ->symbols()
        //     ->uncompromised()
        // ],
            'cpassword'=>'same:password',
        ]);

        User::create([
            "name"=> $this->name,
            "email"=>$this->email,
            "password"=>Hash::make($this->password)
        ]);


        $this->message="User Created Successfully";
    }
}
