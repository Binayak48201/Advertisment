<?php
namespace App;
use Illuminate\Support\Facades\Redis;
class Visits
{
	protected $adv;

	public function __construct($adv)
	{
		$this->adv = $adv;
	}
	public function record()
	{
		 Redis::incr($this->cacheKey()) ?? 0;
        return $this;
	}
	public function reset()
	{
		 Redis::del($this->cacheKey());
       return $this;
	}
	public function count()
	{
		return Redis::get($this->cacheKey()) ?? 0;
	}
	 protected function cacheKey()
    {
        return "books.{$this->adv->id}.visits";
    }
    
}