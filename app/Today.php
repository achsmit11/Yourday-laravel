<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Today extends Model
{

	protected $guarded = [];

    public function journal()
    {
    	return $this->belongs(Journal::class);
    }
}
