<?php

namespace App\Http\Livewire\Admin;

use App\Models\Year as Yar;
use Livewire\Component;

class Year extends Component
{
    public $state;
    public function render()
    {
        return view('livewire.admin.year', [
            'years' => Yar::paginate(10),
        ])->layout('layouts.admin');
    }
}
