<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attendance extends Model
{
    protected $table = "attendance";


    public function satpam()
    {
    	return $this->belongsTo('App\satpam');
    }

    public function client()
    {
    	return $this->belongsTo('App\Client');
    }
}

