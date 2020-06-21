<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rating extends Model
{
    protected $table = "rating";

    public function satpam()
    {
    	return $this->belongsTo('App\satpam');
    }
}
