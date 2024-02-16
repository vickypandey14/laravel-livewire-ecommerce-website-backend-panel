<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
class Logout extends Component
{
    public function mount(){
        Auth::logout();
        return redirect()->to('/login');
    }
    public function render()
    {
        return view('livewire.logout')->extends("layouts.template");
    }
}
