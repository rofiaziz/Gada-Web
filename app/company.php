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
}
