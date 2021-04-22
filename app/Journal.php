<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    protected $guarded = [];

    public function today()
    {
    	return $this->hasMany(Today::class);
    }

    public function addToday($today)
    {
    	return $this->today()->create($today);
    }
}
 