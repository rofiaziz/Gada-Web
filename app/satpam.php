<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class satpam extends Model
{
    protected $primaryKey = 'id';
    protected $table = "satpam";
    protected $filable = ['outsourcing_id','client_id','email','password','acc_state'];

    

    public function rating()
    {
    	return $this->hasMany('App\rating');
    }
    public function attendance()
    {
    	return $this->hasMany('App\attendance','satpam_id','id');
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
    	return $this->belongsTo('App\profilesatpam','profile_id');
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
    public function cuti()
    {
    	return $this->hasMany('App\cuti','satpam_id','id');
    }
}
