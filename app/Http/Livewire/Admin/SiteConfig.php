<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\SiteConfig as Config;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SiteConfig extends Component
{
    use WithFileUploads;
    public $state = [];
    public function mount()
    {
        $this->state = Config::first()->toArray();
    }
    public function store()
    {
        $data = Validator::make($this->state, [
            'id'         => 'nullable',
            'title'       => 'required',
            'phone'      => 'required',
            'logo'       => 'nullable',
            'favicon'    => 'nullable',
            'description' => 'required',
            'address'    => 'required',
        ])->validate();
        $data['email'] = Auth::user()->email;
        Config::updateOrCreate(['id' => $this->state['id']], $data);
        $this->dispatchBrowserEvent('success-msg', ['msg' => 'Site Config saved successfully']);
    }
    public function render()
    {
        return view('livewire.admin.site-config')->layout('layouts.admin');
    }
}
