<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\company;
use App\Client;
use App\satpam;
use App\profilesatpam;

class SatpamController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    //requst data satpam
    public function index(){
        $satpam = DB::table('satpam')->get();

        return view('/Satpam/ListofSatpam',['satpam' => $satpam]);
    }

    public function account(){
        $satpam = DB::table('satpam')->get();

        return view('/Satpam/AccountSatpam',['satpam' => $satpam]);
    }

    public function deploy(){
        // if (auth()->user()->role == 'admin') {
           
        //     $client = Client::all();
        //     $profil = profile_satpam::all();

        //     return

        // }
        // elseif(auth()->user()->role == 'outsourcing'){
        //     $satpam = satpam::where('company_id' , Auth::user()->id)
        //     ->get();
           

        // }elseif(auth()->user()->role == 'client'){
            
        //     $satpam = satpam::where('client_id' , Auth::user()->id)
        //     ->get();
        // }
        $client = Client::all();
        $satpam = satpam::all();
        
        $profil = profilesatpam::with([`satpam`=>function($query)
        {$query->where('satpam_id',$satpam->id);}])->get();
        

        return view('/Satpam/DeploymentSatpam',['satpam' => $satpam, 'profil' => $profil, 'client' => $client] );
        
    }
}
