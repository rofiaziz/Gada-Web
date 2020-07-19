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
use PDF;


class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    //requst data satpam
    public function laporan($id){
    
    $satpam=array();
    
        $satpam = satpam::where(array('id' =>$id))
        ->get();

       

        return view('/Laporan/Report',['satpam' => $satpam]);
   
    }   

    public function accident($id)
    {
        $satpam = satpam::where(array('id' =>$id))
        ->get();
 
    	$pdf = PDF::loadview('/Laporan/accident_pdf',['satpam'=>$satpam]);
    	return $pdf->stream();
    }

    public function guest($id)
    {
        $satpam = satpam::where(array('id' =>$id))
        ->get();
 
    	$pdf = PDF::loadview('/Laporan/guest_pdf',['satpam'=>$satpam]);
    	return $pdf->stream();
    }


    public function accidentall($role)
    {
        $accident=array();
        $data = Crypt::decrypt($role);
        $nitip=User::findOrFail($data);
        
        if ($nitip->role =='admin') {

           $accident = accident::all();
            return view ('/Laporan/Accident',['accident'=>$accident]);
           
        }
        elseif($nitip->role  == 'outsourcing'){
            $accident = accident::where('id_outsourcing' , $nitip->company_id)
            ->get();
            
            return view ('/Laporan/Accident',['accident'=>$accident]);

        }elseif($nitip->role == 'client'){
            
            $accident = accident::where('id_client' , $nitip->client_id)
            ->get();
            
            return view ('/Laporan/Accident',['accident'=>$accident]);
        }
        
    	
    }

    public function guestall($role)
    {
        $guest=array();
        $data = Crypt::decrypt($role);
        $nitip=User::findOrFail($data);
        if ($nitip->role =='admin') {
            $guest = guest::all();
            return view ('/Laporan/Guest',['guest'=>$guest]);
        }
        elseif($nitip->role  == 'outsourcing'){
            $guest = guest::where('id_outsourcing' , $nitip->company_id)
            ->get();
            return view ('/Laporan/Guest',['guest'=>$guest]);

        }elseif($nitip->role == 'client'){
            
            $guest = guest::where('id_client' , $nitip->client_id)
            ->get();
            
            return view ('/Laporan/Guest',['guest'=>$guest]);
        }
    }

    public function vehicleall($role)
    {
        $vehicle=array();
        $data = Crypt::decrypt($role);
        $nitip=User::findOrFail($data);
        if ($nitip->role =='admin') {
           
            $vehicle = vehicle::all();
       
 
    	    return view ('/Laporan/Vehicle',['vehicle'=>$vehicle]);
           
        }
        elseif($nitip->role  == 'outsourcing'){
            $vehicle = vehicle::where('id_outsourcing' , $nitip->company_id)
            ->get();
            
            return view ('/Laporan/Vehicle',['vehicle'=>$vehicle]);

        }elseif($nitip->role == 'client'){
            
            $vehicle = vehicle::where('id_client' , $nitip->client_id)
            ->get();
            
            return view ('/Laporan/Vehicle',['vehicle'=>$vehicle]);
        }
    }
}
