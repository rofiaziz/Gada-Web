<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OutsourcingController extends Controller
{
    public function index(){
        $List=DB::table('company')
        ->select('id_company','name','email','address','jumlah_client','limit_satpam')
        ->get();

        return view('/Outsourcing/ListofCustomer',compact(['List']));
    }

    public function account(){
        $account = DB::table('user')
        ->select('id_user','name','email','privilage_level','id_company','id_status')
        ->get();
        return view('/Outsourcing/Account',compact(['account']));
    }

    public function request(){
        $req = DB::table('user')
        ->select('id_user','name','email','privilage_level','id_company','id_status')
        ->whereid_status(2)
        ->get();
        return view('/Outsourcing/Request',compact(['req']));
    }
}
