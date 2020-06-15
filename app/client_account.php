<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client_account extends Model
{
    protected $table = "client_account";
 
    protected $fillable = ['email','password','remember_token','client_id'];

    
    public function client()
    {
    	
            return $this->belongsTo('App\Client');
        
    }

}
