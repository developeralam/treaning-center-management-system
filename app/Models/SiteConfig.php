<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SiteConfig extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function getLogoUrlAttribute()
    {
        if ($this->logo && Storage::disk('configs')->exists($this->logo)) {
            return Storage::disk('configs')->url($this->logo);
        }
    }
    public function getFaviconUrlAttribute()
    {
        if ($this->favicon && Storage::disk('configs')->exists($this->favicon)) {
            return Storage::disk('configs')->url($this->favicon);
        }
    }
    protected $appends = [
        'logourl',
        'faviconurl'
    ];
}
