<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    protected $table = "daily_schedule";

    public function satpam()
    {
    	return $this->belongsToMany('App\satpam');
    }

    public function client()
    {
    	return $this->belongsTo('App\Client');
    }


}
