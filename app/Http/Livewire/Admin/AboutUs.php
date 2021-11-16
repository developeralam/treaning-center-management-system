<?php

namespace App\Http\Livewire\Admin;

use App\Models\AboutUs as AbutUs;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class AboutUs extends Component
{
    public $state;

    public function mount()
    {
        $data = AbutUs::first();
        if ($data) {
            $this->state = $data->toArray();
        } else {
            $this->state['id'] = 0;
        }
    }
    public function store()
    {
        $data = Validator::make($this->state, [
            'id'         => 'nullable',
            'description' => 'required',
        ])->validate();
        AbutUs::updateOrCreate(['id' => $data['id']], $data);
        $this->dispatchBrowserEvent('success-msg', ['msg' => 'About Us Updated Successfully']);
    }
    public function render()
    {
        return view('livewire.admin.about-us')->layout('layouts.admin');
    }
}
