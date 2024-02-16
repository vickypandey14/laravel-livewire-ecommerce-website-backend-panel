<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Contacts;
use Livewire\WithPagination;

class ShowMessages extends Component
{
    public $messagepage;
    use WithPagination;
    // public $contacts;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        // $this->contacts= Contacts::all();
        return view('livewire.show-messages',['contacts' => Contacts::paginate(5)
        ])->extends("layouts.template");
    }

    public function delete_message($id){
        Contacts::destroy($id);

        $this->messagepage="User Message Deleted!";
    }
}
