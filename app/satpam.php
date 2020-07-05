<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class satpam extends Model
{
    protected $primaryKey = 'id';
    protected $table = "satpam";

    public function cuti()
    {
    	return $this->hasMany('App\cuti');
    }

    public function rating()
    {
    	return $this->hasMany('App\rating');
    }
    public function attendance()
    {
    	return $this->hasMany('App\attendance');
    }

    public function schedule()
    {
    	return $this->belongsTo('App\schedule');
    }
    public function client()
    {
    	return $this->belongsTo('App\Client');
    }
    public function company()
    {
    	return $this->belongsTo('App\company');
    }

    public function profils()
    {
    	return $this->belongsTo('App\profilesatpam','profile_id','id');
    }

    public function accident()
    {
    	return $this->hasMany('App\accident','id_satpam','id');
    }
    public function vehicle()
    {
    	return $this->hasMany('App\vehicle','id_satpam','id');
    }
    public function guest()
    {
    	return $this->hasMany('App\guest','id_satpam','id');
    }
}
