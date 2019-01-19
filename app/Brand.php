<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $guarded = []; 

    public function branding()

    {
    	return $this->hasMany(Advertisment::class);
    }
}
