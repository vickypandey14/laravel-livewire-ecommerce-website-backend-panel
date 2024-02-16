<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class Users extends Component
{
    public $deletedmessage;
    public $updatedmessage;
    use WithPagination;

    public $editForm=false;
    public $idForEdit=null;

    public $name;
    public $email;

    protected $paginationTheme = 'bootstrap';


    public function render()
    {
        // $this->users= User::all();
        return view('livewire.users',['users' => User::paginate(5)])->extends("layouts.template");
    }

    public function delete_user($id){
        User::destroy($id);
        $this->deletedmessage="User has been deleted successfully!";
    }

    public function edit_user($id){
        $this->idForEdit=$id;
        $this->editForm=true;

        $user= User::find($id);
       
        $this->name= $user["name"];
        $this->email= $user["email"];

    }

    public function update(){

        $this->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
        ]);
        
        User::where("id", $this->idForEdit)->update([
            "name"=> $this->name,
            "email"=>$this->email
        ]);
        $this->editForm=false;
        $this->updatedmessage="User Profile Updated";
    }

    
}
