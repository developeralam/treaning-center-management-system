<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Batch extends Component
{
    public function render()
    {
        return view('livewire.admin.batch')->layout('layouts.admin');
    }
}
