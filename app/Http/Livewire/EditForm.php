<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class EditForm extends Component

{
    use WithFileUploads;

    public $library;

    public $name, $address, $image, $description, $old_image;

    
    public function updatedImage()
    {
        $this->validate([
            'image' => 'image|max:1024',
        ]);
    }

    public function mount(){
        $this->name = $this->library->name;
        $this->address = $this->library->address;
        $this->old_image = $this->library->image;
        $this->description = $this->library->description;
    }

    public function render()
    {
        return view('livewire.edit-form');
    }
}
