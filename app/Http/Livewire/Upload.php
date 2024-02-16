<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class Upload extends Component
{
    use WithFileUploads;
    public $photo;
    public function render()
    {
        return view('livewire.upload')->extends("layouts.template");
    }

    public function save(){
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
        ]);

        // dd(Auth::user()->id);
        $image=$this->photo->store('photos', "public");

        User::where("id", Auth::user()->id)
        ->update(['profile'=> $image]);

        session()->flash('message', 'Profile Picture successfully updated.');
        return redirect()->route("dashboard");

    }
}
