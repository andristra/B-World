<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'inventory';
	
	public function game() 
	{
		return $this->belongsTo('App\game');
	}
	
	public function scopeFree($query) {
return $query->where('rented_n', '=', 0);
}

 public function rent()
    {
        return $this->hasOne('App\Rent');
    }
}
