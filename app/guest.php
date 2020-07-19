<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guest extends Model
{
    protected $table = "guest_book";
    protected $fillable = [
        'id_satpam', 'id_client', 'address','id_outsourcing','phone_num','requirement','company','File_attachment',
    ];

    public function satpam()
    {
    	return $this->belongsTo('App\satpam','id_satpam');
    }

    public function client()
    {
    	return $this->belongsTo('App\Client','id_client','id_guest');
    }
    public function company()
    {
    	return $this->belongsTo('App\Client','id_outsourcing','id');
    }
}
