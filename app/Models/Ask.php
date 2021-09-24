<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ask extends Model
{
    use HasFactory;

    public $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function mazad()
    {
        return $this->belongsTo(Mazad::class);
    }

    public function answer()
    {
        return $this->hasOne(Answer::class);
    }
}
