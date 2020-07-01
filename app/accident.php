<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class accident extends Model
{
    protected $table = "accident_report";


    public function satpam()
    {
    	return $this->belongsTo('App\satpam','id_satpam','id');
    }

    public function client()
    {
    	return $this->belongsTo('App\Client','id_client','id');
    }
}
