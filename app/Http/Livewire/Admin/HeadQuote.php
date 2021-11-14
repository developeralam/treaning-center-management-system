<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class HeadQuote extends Component
{
    public function render()
    {
        return view('livewire.admin.head-quote')->layout('layouts.admin');
    }
}
