<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mazad extends Model
{
    use HasFactory;

    public $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function image()
    {
        return $this->hasOne(Image::class, 'item_id', 'id')->where('model', 'App\Models\Mazad')->orderBy('id', 'asc');
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'item_id', 'id')->where('model', 'App\Models\Mazad');
    }

    public function comments()
    {
        return $this->belongsTo(Comment::class);
    }

    public function asks()
    {
        return $this->belongsTo(Ask::class)->with('answer');
    }

    public function winner()
    {
        return $this->hasOne(Winner::class);
    }
}
