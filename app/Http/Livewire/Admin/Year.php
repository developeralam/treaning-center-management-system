<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Year as Yar;
use Illuminate\Support\Facades\Validator;

class Year extends Component
{
    public $state;
    public function addYear()
    {
        $this->reset();
        $this->dispatchBrowserEvent('show-form', ['id' => 'yearModal']);
    }
    public function store()
    {
        $data = Validator::make($this->state, [
            'year' => 'required',
        ])->validate();
        Yar::create($data);
        $this->dispatchBrowserEvent('close-form', ['id' => 'yearModal']);
        $this->dispatchBrowserEvent('success-msg', ['msg' => 'Year Added Successfully']);
    }
    public function render()
    {
        return view('livewire.admin.year', [
            'years' => Yar::paginate(10),
        ])->layout('layouts.admin');
    }
}
