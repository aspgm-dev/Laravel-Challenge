<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['image_name'];

    public function news() 
    {
        return $this->belongsToMany('\App\Models\News', 'news_images');
    }
}
