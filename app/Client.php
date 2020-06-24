<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = "client_profile";
 
    protected $fillable = ['name','location','valid_since','security_active','MoU'];

    
    public function client_account()
    {
    	return $this->hasOne('App\client_account');
    }

    public function schedule()
    {
    	return $this->belongsTo('App\schedule');
    }

    public function attendance()
    {
    	return $this->hasOne('App\attendance');
    }
    public function satpam()
    {
        return $this->hasMany('App\satpam');
    }

    public function user()
    {
    	return $this->belongsTo('App\User','client_id','id');
    }

}
