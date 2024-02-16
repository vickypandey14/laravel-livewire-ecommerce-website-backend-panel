<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\User;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email;
    public $password;

    public $error_message;


    public function render()
    {
        return view('livewire.login')->extends("layouts.template");

    }

    public function do_login(){

        // validation
        $data=$this->validate([
            "email"=>"required",
            "password"=>"required"
        ]);

        

        if (Auth::attempt($data)) {
            return redirect()->intended('dashboard');
        }

        else{
            $this->error_message="The provided credentials are invalid";
        }

    }

    
}
