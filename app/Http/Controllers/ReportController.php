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

}
