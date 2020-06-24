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

    public function attendance($role){
        $satpam= array();
        $data = Crypt::decrypt($role);
        $nitip=User::findOrFail($data);

        if ($nitip->role =='admin') {
           
            $satpam = satpam::all();

            return view('/Satpam/Attendance',['satpam' => $satpam] );
           
        }
        elseif($nitip->role  == 'outsourcing'){
            $satpam = satpam::where(array('outsourcing_id' =>$nitip->company_id, 'acc_state' => '1'))
            ->get();
           
            return view('/Satpam/Attendance',['satpam' => $satpam] );

        }elseif($nitip->role == 'client'){
            
            $satpam = satpam::where(array('client_id' =>$nitip->client_id, 'acc_state' => '1'))
            ->get();
            return view('/Satpam/Attendance',['satpam' => $satpam] );
        }
        
        
        
        
    }

    public function addschedule(){
        return view('/Satpam/AddSchedule' );
    }

    public function store(Request $request, $role){
        $data = Crypt::decrypt($role);
        $nitip=User::findOrFail($data);
        $this->validate($request,[
    		'tanggal' => 'required|date',
            'bulan' => 'required|integer',
            'shift' => 'required',
            'time' => 'required',
            'time1' => 'required'
        ]);
        

       
        schedule::create([
            'date' => $request->tanggal,
            'month' => $request->bulan,
            'shift' => $request->shift,
            'check_in' => $request->time,
            'check_out' => $request->time1,
            'id_company' => $nitip->company_id,
            'id_client' => $nitip->company_id,
            'id_satpam' => '0'
        ]);

        


    	return redirect('/Satpam/Addschedule');
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

}
