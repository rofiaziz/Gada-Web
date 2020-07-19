<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehicle extends Model
{
    protected $table = "vehicle_report";
    protected $fillable = [
        'id_satpam', 'id_client', 'Date','id_outsourcing','Time_in','Time_out','File_attachment','Driver_name','vehicle_num',
        'Month','note',
    ];

    public function satpam()
    {
    	return $this->belongsTo('App\satpam','id_satpam','id');
    }

    public function client()
    {
    	return $this->belongsTo('App\Client','id_client','id');
    }
    public function company()
    {
    	return $this->belongsTo('App\Client','id_outsourcing');
    }
}
