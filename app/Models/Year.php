<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function getStatusAttribute($value)
    {
        if ($value == 1) {
            return '<span class="badge badge-pill badge-success">Active</span>';
        } else {
            return '<span class="badge badge-pill badge-dnger">InActive</span>';
        }
    }
}
