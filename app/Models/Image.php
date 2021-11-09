<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    public $guarded = [];

    public $timestamps = false;

    public function getPhotoAttribute($value)
    {
        return $value ? display_img($value) : null;
    }
}
