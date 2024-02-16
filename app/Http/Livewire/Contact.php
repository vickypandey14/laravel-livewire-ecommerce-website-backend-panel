<?php

namespace App\Http\Livewire;
use App\Models\Contacts;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;

class Contact extends Component
{
    public $name;
    public $email;
    public $subject;
    public $textmessage;
    public $message;

    public function render()
    {
        return view('livewire.contact')->extends("layouts.template");
    }

    public function contact_message(){

        $this->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'textmessage'=>'required',
        ]);

        Contacts::create([
            "name"=> $this->name,
            "email"=>$this->email,
            "subject"=>$this->subject,
            "textmessage"=>$this->textmessage
        ]);

        $this->message="Thanks for contacting us! We will be in touch with you shortly.";
        $this->name="";
        $this->email="";
        $this->subject="";
        $this->textmessage="";
    }
}
