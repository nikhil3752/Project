<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ViewPostComponent extends Component
{
    public function render()
    {
        return view('livewire.view-post-component')->layout('layouts.base');
    }
}
