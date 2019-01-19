<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Brand;
class Advertisment extends Model
{
     protected $guarded = [];

     public function favorites()
    {
        // return $this->morphMany(Favorite::class, 'favorited');
        return $this->belongsToMany(Favorite::class);
    }
    public function popular()
    {
        return $this->builder->orderBy('price','desc');
    }
}
 