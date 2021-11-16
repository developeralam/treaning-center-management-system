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
    public $logo;
    public $favicon;
    public function mount()
    {
        $this->state['logo'] = '';
        $this->state['favicon'] = '';
        $this->state['description'] = '';
        $this->state['address'] = '';
        $this->state['logourl'] = '';
        $this->state['faviconurl'] = '';

        $data = Config::first();
        if ($data) {
            $this->state = $data->toArray();
        } else {
            $this->state['id'] = 0;
        }
    }
    public function store()
    {
        $data = Validator::make($this->state, [
            'id'          => 'nullable',
            'title'       => 'required',
            'phone'       => 'required',
            'logo'        => 'nullable',
            'favicon'     => 'nullable',
            'description' => 'required',
            'address'     => 'required',
        ])->validate();
        $data['email'] = Auth::user()->email;

        //Upload Logo
        if ($this->logo) {
            $data['logo'] = $this->logo->store('/', 'configs');
        } else {
            $data['logo'] = $this->state['logo'];
        }

        //Upload Favicon
        if ($this->favicon) {
            $data['favicon'] = $this->favicon->store('/', 'configs');
        } else {
            $data['favicon'] = $this->state['favicon'];
        }
        Config::updateOrCreate(['id' => $this->state['id']], $data);
        $this->dispatchBrowserEvent('success-msg', ['msg' => 'Site Config saved successfully']);
    }
    public function render()
    {
        return view('livewire.admin.site-config')->layout('layouts.admin');
    }
}
