<?php

namespace App\Http\Controllers;

use App\Advertisment;
use App\Favorite;
use Illuminate\Http\Request;

class FavoritesController extends Controller
{

    public function store(Advertisment $adv)
    {
        dd('fjsdjfdsl');
		Favorite::create([
    		'favorited_id' => $adv->id,
    		'favorited_type' => get_class($adv),
    		'counting' => count([
    			'favorited_id'
    		])
    		
    	]);
    }
    
}
