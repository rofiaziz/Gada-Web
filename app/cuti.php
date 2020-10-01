<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cuti extends Model
{
    protected $table = "cuti";


    public function satpam()
    {
    	return $this->belongsTo('App\satpam','satpam_id');
    }
    public function client()
    {
    	return $this->belongsTo('App\Client','client_id');
    }
    public function company()
    {
    	return $this->belongsTo('App\company','outsourcing_id');
    }
}
