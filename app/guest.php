<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guest extends Model
{
    protected $table = "guest_book";


    public function satpam()
    {
    	return $this->belongsTo('App\satpam','id_satpam','id');
    }

    public function client()
    {
    	return $this->belongsTo('App\Client','id_client','id');
    }
}
