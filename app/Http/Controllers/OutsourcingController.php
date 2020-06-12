<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OutsourcingController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index(){
        $List=DB::table('company')
        ->select('id_company','name','email','address','jumlah_client','limit_satpam')
        ->get();

        return view('/Outsourcing/ListofCustomer',compact(['List']));
    }

    public function account(){
        $account = DB::table('users')
        ->select('id','name','email')
        ->get();
        return view('/Outsourcing/Account',compact(['account']));
    }

    public function request(){
        $req = DB::table('users')
        ->select('id','name','email')
        // ->whereid_status(2)
        ->get();
        return view('/Outsourcing/Request',compact(['req']));
    }
}
