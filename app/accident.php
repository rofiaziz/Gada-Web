<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class accident extends Model
{
    protected $table = "accident_report";
    protected $fillable = [
        'id_satpam', 'id_client', 'Incident','id_outsourcing','Tindak_lanjut','note','File_attachment',
    ];

    public function satpam()
    {
    	return $this->belongsTo('App\satpam','satpam_id');
    }

    public function client()
    {
    	return $this->belongsTo('App\Client','id_client','id');
    }
    public function company()
    {
    	return $this->belongsTo('App\Client','id_outsourcing','id');
    }
}
