<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Client;
use App\satpam;
use App\vehicle;
use App\accident;
use App\User;
use App\guest;


class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


//requst data satpam
public function accident($role){
    $data = Crypt::decrypt($role);
    $nitip=User::findOrFail($data);

    $accident=array();
    if ($nitip->role =='admin') {
       
        $accident = accident::all();
        
        return view('/Laporan/kejadian',['accident' => $accident]);
       
    }
    // elseif($nitip->role  == 'outsourcing'){
    //     $satpam = satpam::where(array('outsourcing_id' =>$nitip->company_id, 'acc_state' => '1'))
        
    //     ->get();
      
        

    //     return view('/Laporan/kejadian',['accident' => $accident]);
    // }
    elseif($nitip->role == 'client'){
        $accident = accident::where(array('id_client' =>$nitip->client_id))
        
        ->get();
        return view('/Laporan/kejadian',['accident' => $accident]);
    }
    
   
}



public function vehicle($role){
    $data = Crypt::decrypt($role);
    $nitip=User::findOrFail($data);

    $vehicle=array();
    if ($nitip->role =='admin') {
       
        $vehicle = vehicle::all();
        
        return view('/Laporan/kendaraan',['vehicle' => $vehicle]);
       
    }
    // elseif($nitip->role  == 'outsourcing'){
    //     $satpam = satpam::where(array('outsourcing_id' =>$nitip->company_id, 'acc_state' => '1'))
        
    //     ->get();
      
        

    //     return view('/Laporan/kejadian',['accident' => $accident]);
    // }
    elseif($nitip->role == 'client'){
        $vehicle = vehicle::where(array('id_client' =>$nitip->client_id))
        
        ->get();
        return view('/Laporan/kendaraan',['vehicle' => $vehicle]);
    }
    
   
}   
public function guest($role){
    $data = Crypt::decrypt($role);
    $nitip=User::findOrFail($data);

    $vehicle=array();
    if ($nitip->role =='admin') {
       
        $guest = guest::all();
        
        return view('/Laporan/tamu',['guest' => $guest]);
       
    }
    // elseif($nitip->role  == 'outsourcing'){
    //     $satpam = satpam::where(array('outsourcing_id' =>$nitip->company_id, 'acc_state' => '1'))
        
    //     ->get();
      
        

    //     return view('/Laporan/kejadian',['accident' => $accident]);
    // }
    elseif($nitip->role == 'client'){
        $guest = guest::where(array('id_client' =>$nitip->client_id))
        
        ->get();
        return view('/Laporan/tamu',['guest' => $guest]);
    }
    
   
}



}
