<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    protected $table = "company";
 
    protected $fillable = ['Name','Address','City','About','id_paket','Client_count','Satpam_count','masa_berlangganan'];

    public function user()
    {
    	return $this->hasOne('App\User','company_id','id');
    }
    public function satpam()
    {
        return $this->hasMany('App\satpam');
    }

    public function paket()
    {
        return $this->belongsTo('App\package','id_paket');
    }
    
    public function accident()
    {
    	return $this->hasMany('App\accident','id_outsourcing','id');
    }
    public function vehicle()
    {
    	return $this->hasMany('App\vehicle','id_outsourcing','id');
    }
    public function guest()
    {
    	return $this->hasMany('App\guest','id_outsourcing','id');
    }
    public function cuti()
    {
    	return $this->hasMany('App\cuti','outsourcing_id','id');
    }
}
