<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class SiteConfig extends Component
{
    public $state = [];
    public function store()
    {
        $data = Validator::make($this->state, [
            'id' => 'required',
        ])->validate();
        SiteConfig::updateOrCreate(['id' => $data['id']], $data);
        $this->dispatchBrowserEvent('success-msg', ['msg' => 'Site Config saved successfully']);
    }
    public function render()
    {
        return view('livewire.admin.site-config')->layout('layouts.admin');
    }
}
