<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Year extends Component
{
    public function render()
    {
        return view('livewire.admin.year')->layout('layouts.admin');
    }
}
