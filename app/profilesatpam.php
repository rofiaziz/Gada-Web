<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profilesatpam extends Model
{
    protected $table = "profile_satpam";
    protected $filable = ['satpam_id','Name','PDOB','NIK','Address','GolDar','Height','Weight','Gender',
    'Religion','Nationality','Finger_1','Finger_2','Bank_Name','Bank_num','BPJSK','BPJSH'];

    public function satpam()
    {
    	return $this->belongsTo('App\satpam','satpam_id','id');
    }
}
