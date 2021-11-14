<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AboutUs extends Component
{
    public function render()
    {
        return view('livewire.admin.about-us')->layout('layouts.admin');
    }
}
