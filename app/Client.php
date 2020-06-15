<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = "client_profile";
 
    protected $fillable = ['name','location','valid_since','security_active'];

    
    public function client_account()
    {
    	return $this->hasOne('App\client_account');
    }

}
