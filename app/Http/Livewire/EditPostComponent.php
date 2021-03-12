<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EditPostComponent extends Component
{
    public function render()
    {
        return view('livewire.edit-post-component')->layout('layouts.base');
    }
}
