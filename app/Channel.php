<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
	 protected $guarded = [];

    public function getRouteKeyName()
    
    {
    	return 'slug';
    }

    public function advert()

    {
    	return $this->hasMany(Advertisment::class);
    }
    public function filterer()
    {
  //   	SELECT channels.name,count(*)
		// FROM channels
		// LEFT JOIN `advertisments` ON channels.id = advertisments.channel_id
		// GROUP BY channels.id
		
				$users = DB::table('channels')
			->select('channels.name', 'count(*) as total')	
        	->leftJoin('advertisments', 'channels.id', '=', 'advertisments.channel_id')
        	->groupBy('channels.id')
        	->get();
    }
}
