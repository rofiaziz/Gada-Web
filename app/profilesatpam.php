<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profilesatpam extends Model
{
    protected $table = "profile_satpam";

    public function satpam()
    {
    	return $this->hasOne('App\satpam');
    }
}
