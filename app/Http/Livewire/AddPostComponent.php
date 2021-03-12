<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddPostComponent extends Component
{
    public function render()
    {
        return view('livewire.add-post-component')->layout('layouts.base');
    }
}
