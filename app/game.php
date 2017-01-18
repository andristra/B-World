<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class game extends Model
{
	
	protected $table = 'games';
	public function items() 
	{
		return $this->hasMany('App\Item');
	}
}
