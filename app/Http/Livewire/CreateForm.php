<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class CreateForm extends Component
{
    use WithFileUploads;

    public $name, $address, $image, $description;

    public function updatedImage()
    {
        $this->validate([
            'image' => 'image|max:1024',
        ]);
    }

    public function store(){
        

        Auth::user()->libraries()->create([
            'name' => $this->name,
            'address' => $this->address,
            'image' => $this->image->store('public/images'),
            'description' => $this->description,

        ]);

        session()->flash('libraryCreated', 'hai inserito una libreria');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.create-form');
    }
}
