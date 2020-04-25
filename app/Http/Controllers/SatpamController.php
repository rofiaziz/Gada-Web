<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SatpamController extends Controller
{
    //requst data satpam
    public function index(){
        $satpam = DB::table('satpam')->get();

        return view('/Satpam/ListofSatpam',['satpam' => $satpam]);
    }

    public function account(){
        $satpam = DB::table('satpam')->get();

        return view('/Satpam/AccountSatpam',['satpam' => $satpam]);
    }

    public function request(){
        $satpam = DB::table('satpam')->whereacc_state(0)->get();

        return view('/Satpam/RequestSatpam',['satpam' => $satpam]);
    }
}
