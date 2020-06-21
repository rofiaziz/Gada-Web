<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cuti extends Model
{
    protected $table = "cuti";


    public function satpam()
    {
    	return $this->belongsTo('App\satpam');
    }
}
