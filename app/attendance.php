<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attendance extends Model
{
    protected $table = "attendance";


    public function satpam()
    {
    	return $this->belongsTo('App\satpam','satpam_id','id');
    }

    public function client()
    {
    	return $this->belongsTo('App\Client','client_id');
    }
    public function company()
    {
    	return $this->belongsTo('App\company','outsourcing_id');
    }
    public function schedule()
    {
    	return $this->belongsTo('App\schedule','schedule_id','id');
    }
}

