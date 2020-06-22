<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    protected $table = "daily_schedule";
    protected $fillable = ['id_satpam','id_company','id_client','date','month','shift','check_in','check_out'];

    public function satpam()
    {
    	return $this->belongsTo('App\satpam','id_satpam','id');
    }

    public function client()
    {
    	return $this->belongsTo('App\Client','id_client','id');
    }
    public function attendance()
    {
    	return $this->hasMany('App\attendance');
    }


}
