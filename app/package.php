<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class package extends Model
{
    protected $table = "package";
    protected $primaryKey = 'id_package';
 
    protected $fillable = ['package_name','Security_Count','Bills','Detail'];

    public function company()
    {
        return $this->hasMany('App\company','id_paket','id_package');
    }

}
