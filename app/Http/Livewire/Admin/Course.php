<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Course extends Component
{
    public function render()
    {
        return view('livewire.admin.course')->layout('layouts.admin');
    }
}
