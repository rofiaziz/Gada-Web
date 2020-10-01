<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\company;
use App\Client;
use App\satpam;
use App\profilesatpam;
use App\User;
use App\attendance;
use App\schedule;
use App\package;
use App\cuti;


class SatpamController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    //requst data satpam
    public function index($role){
        $data = Crypt::decrypt($role);
        $nitip=User::findOrFail($data);

        if ($nitip->role =='admin') {
           
            $satpam = satpam::all();
            
            return view('/Satpam/ListofSatpam',['satpam' => $satpam]);
           
        }
        elseif($nitip->role  == 'outsourcing'){
            $satpam = satpam::where(array('outsourcing_id' =>$nitip->company_id, 'acc_state' => '1'))
            
            ->get();
           $count= $satpam->count();
            $company = company::where('id' , $nitip->company_id)
            ->get();

            return view('/Satpam/ListofSatpam',['satpam' => $satpam,'count' => $count,'company'=>$company]);

        }elseif($nitip->role == 'client'){
            $satpam = satpam::where(array('client_id' =>$nitip->client_id, 'acc_state' => '1'))
            
            ->get();
            return view('/Satpam/ListofSatpam',['satpam' => $satpam]);
        }
        
       
    }

    public function account(){
        $satpam = DB::table('satpam')->get();

        return view('/Satpam/AccountSatpam',['satpam' => $satpam]);
    }

    public function deploy($role){
        $data = Crypt::decrypt($role);
        $nitip=User::findOrFail($data);

        if ($nitip->role =='admin') {
           
            $satpam = satpam::all();

            return view('/Satpam/DeploymentSatpam',['satpam' => $satpam] );
           
        }
        elseif($nitip->role  == 'outsourcing'){
            $satpam = satpam::where('outsourcing_id' , $nitip->company_id)
            ->get();
           
            return view('/Satpam/DeploymentSatpam',['satpam' => $satpam] );

        }elseif($nitip->role == 'client'){
            
            $satpam = satpam::where('client_id' , $nitip->client_id)
            ->get();
            return view('/Satpam/DeploymentSatpam',['satpam' => $satpam] );
        }
        
        
    }

    public function editdeploy($id){
        $satpam = satpam::where('id' , $id)->first();
        $data = Auth::user()->id;
        $nitip=User::findOrFail($data);
        $client=User::where(array('role' =>'client', 'company_id' => $nitip->company_id))
        ->get();
       return view('/Satpam/EditDeploy',['satpam' => $satpam,'client' => $client]);   
    }

    public function updatedeploy(Request $request, $id){
        
        DB::table('satpam')
        ->where('id', $id)
        ->update([
           'client_id' => $request->client
        ]);
       
       return redirect('home');   
    }

    public function attendance($role){
        $satpam= array();
        $data = Crypt::decrypt($role);
        $nitip=User::findOrFail($data);

        if ($nitip->role =='admin') {
           
            $attendance = attendance::all();

            return view('/Satpam/Attendance',['attendance' => $attendance] );
           
        }
        elseif($nitip->role  == 'outsourcing'){
            $attendance = attendance::where(array('outsourcing_id' =>$nitip->company_id))
            ->get();
           
            return view('/Satpam/Attendance',['attendance' => $attendance] );

        }elseif($nitip->role == 'client'){
            
            $attendance = attendance::where(array('client_id' =>$nitip->client_id))
            ->get();
            return view('/Satpam/Attendance',['attendance' => $attendance] );
        }
        
        
        
        
    }

    public function addschedule(){
        
        $data = Auth::user()->id;
        $nitip=User::findOrFail($data);
        $client=User::where(array('role' =>'client', 'company_id' => $nitip->company_id))
        ->get();
        return view('/Satpam/AddSchedule',['client' => $client] );
    }

    public function store(Request $request, $role){
        $data = Crypt::decrypt($role);
        $nitip=User::findOrFail($data);
        $this->validate($request,[
    		'tanggal' => 'required|date',
            'bulan' => 'required|integer',
            'shift' => 'required',
            'time' => 'required',
            'client' => 'required',
            'time1' => 'required'
            
        ]);
        

       
        schedule::create([
            'date' => $request->tanggal,
            'month' => $request->bulan,
            'shift' => $request->shift,
            'check_in' => $request->time,
            'check_out' => $request->time1,
            'id_company' => $nitip->company_id,
            'id_client' => $request->client,
            'id_satpam' => '0'
        ]);

        


    	 return redirect()->back();
    }


    public function schedule( $role){
        $schedule= array();
        
        $data = Crypt::decrypt($role);
        $nitip=User::findOrFail($data);
        if ($nitip->role =='admin') {
           
            $schedule = schedule::all();

            return view('/Satpam/schedule',['schedule' => $schedule] );
           
        }
        elseif($nitip->role  == 'outsourcing'){
            $schedule = schedule::where('id_company' , $nitip->company_id)
            ->get();
            
            return view('/Satpam/schedule',['schedule' => $schedule] );

        }elseif($nitip->role == 'client'){
            
            $schedule = schedule::where('id_client' , $nitip->client_id)
            ->get();
            
            return view('/Satpam/schedule',['schedule' => $schedule] );
        }
        

        
    }

    public function editschedule($id){
        $schedule = schedule::where('id_schedule' , $id)->first();
        
       return view('/Satpam/EditSchedule',['schedule' => $schedule]);   
    }

    public function update(Request $request,$id){
        

        $this->validate($request,[
    		'tanggal' => 'required|date',
            'bulan' => 'required|integer',
            'shift' => 'required',
            'time' => 'required',
            'time1' => 'required'
        ]);
        
        
        DB::table('daily_schedule')
        ->where('id_schedule', $id)
        ->update([
           'date' => $request->tanggal,
            'month' => $request->bulan,
            'shift' => $request->shift,
            'check_in' => $request->time,
            'check_out' => $request->time1]);
        
           
        
       return redirect('home');   
    }
    public function deleteschedule($id)
    {
         
        DB::table('daily_schedule')
        ->where('id_schedule', $id)
        ->delete();
            return back();
    }

    

    public function request($role){
        $satpam= array();
        $data = Crypt::decrypt($role);
        $nitip=User::findOrFail($data);

        if ($nitip->role =='admin') {
           
            $satpam = satpam::where('acc_state' , '0')->get();

            return view('/Satpam/RequestSatpam',['satpam' => $satpam]);
           
        }
        elseif($nitip->role  == 'outsourcing'){
            $satpam = satpam::where(array('outsourcing_id' =>$nitip->company_id, 'acc_state' => '0'))
            ->get();
            
            return view('/Satpam/RequestSatpam',['satpam' => $satpam]);
        }
           
        
       
    }

    public function editreq( $id){
        
        $data = satpam::find($id)->first();
        $nitip= satpam::where(array('outsourcing_id' =>$data->company_id, 'acc_state' => '1'))
        ->get();
        $limit=$nitip->count();

        $company = company::where('id',$data->outsourcing_id)
        ->first();
        $coba = package::where('id_package' , $company->id_paket)
        ->first();
        $paket = $coba->Security_Count;


        if ( $limit >= $paket ) {
           return redirect('home');
        }else{
        DB::table('satpam')
        ->where('id', $id)
        ->update([
           'acc_state' => '1',
        ]);
       return redirect('/Message/Inbox');   
    }
    }

    public function deletereq($id){
       
        DB::table('satpam')
        ->where('id', $id)
        ->update([
            'acc_state' => '0',
         ]);
       return redirect('home');   
    }



    // Cuti
    public function cuti($role){

        $cuti=array();
        $data = Crypt::decrypt($role);
        $nitip=User::findOrFail($data);

        if ($nitip->role =='admin') {
           
            $cuti = cuti::all();
    	    return view ('/Cuti/RequestCuti',['cuti'=>$cuti]);
           
        }
        elseif($nitip->role  == 'outsourcing'){
            
            $cuti = cuti::where('outsourcing_id' , $nitip->company_id)
            ->get();
            
            return view ('/Cuti/RequestCuti',['cuti'=>$cuti]);

        }elseif($nitip->role == 'client'){
            
            $cuti = cuti::where('client_id' , $nitip->client_id)
            ->get();
            
            return view ('/Cuti/RequestCuti',['cuti'=>$cuti]);
        }


    }




    // Cuti
    public function acccuti($id){
        DB::table('cuti')
        ->where('id', $id)
        ->update([
            'state' => '1',
         ]);
         return redirect()->back();
    }

    public function deccuti($id){
        DB::table('cuti')
        ->where('id', $id)
        ->update([
            'state' => '2',
         ]);
         return redirect()->back();
    }

    public function detcuti($id){
        $cuti= DB::table('cuti')
        ->where('id', $id)
        ->get();
         return redirect()->back();
    }
    

    //Add Satpam
    public function add(Request $request){
        // $this->validate($request,[
    	// 	'name' => 'required|string|max:255',
        //     'city' => 'required',
        //     'about' => 'required',
        //     'address' => 'required',
        //     'paket' => 'required',
        //     'time'  => 'required|integer',
        //     'satpam' => 'required|integer',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|min:6',
        //     'client' => 'required|integer'
        // ]);
        

        
        satpam::create([
            'outsourcing_id' => $request->out,
            'email' => $request->email,
            'password' => $request->pass,
            
        ]);

        // $company_id = DB::table('company')
        // ->select('id')
        // ->whereName($request->name)
        // ->get();
        
        $satpam = company::where('email' , $request->email)->first();
        

        profilesatpam::create([
            'satpam_id' => $satpam->id,
            'Name' => $request->name,
            'PDOB' => $company->ttl,
            'NIK' => $request->nik,
            'Address' => $request->address,
            'GolDar' => $request->goldar,
            'Height' => $request->tb,
            'Weight' => $request->bb,
            'Gender' => $request->kelamin,
            'Religion' => $request->agama,
            'Nationality' => $request->negara,
            'Finger_1' => $request->fing1,
            'Finger_2' => $request->fing2,
            'Bank_Name' => $request->bank,
            'Bank_num' => $request->norek,
            'BPJSK' => $request->bpjs ketenagakerjaan,
            'BPJSH' => $request->bpjs kesehatan,
            
        ]);


    	return redirect('/Outsourcing/ListofCustomer');
    }

}
