<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehicle extends Model
{
    protected $table = "vehicle_report";


    public function satpam()
    {
    	return $this->belongsTo('App\satpam','id_satpam','id');
    }

    public function client()
    {
    	return $this->belongsTo('App\Client','id_client','id');
    }
}
