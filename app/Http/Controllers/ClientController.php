<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Client;
use App\client_account;
use App\company;
use App\User;


class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    
    public function index($role){
        $data = Crypt::decrypt($role);
        $nitip=User::findOrFail($data);
        $List= array();
        
        
        if ($nitip->role =='admin') {
           
            $List = user::where(array( 'role' => 'client'))
            ->get();
            return view('/Klien/ListClient',['List' => $List] );
           
        }
        elseif($nitip->role  == 'outsourcing'){
            $List = user::where(array('company_id' => $nitip->company_id, 'role' => 'client'))
            ->get();
            
            return view('/Klien/ListClient',['List' => $List] );
        }
    }

    public function add(){
                
        return view('/Klien/AddClient');
    }

   

    

    public function store(Request $request, $role){
        $data = Crypt::decrypt($role);
        $nitip=User::findOrFail($data);
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'mou' => 'required|string|max:255',
            'location' => 'required',
            'Duration'  => 'required|date',
            'satpam' => 'required|integer',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
            
        ]);
        

        Client::create([
            'name' => $request->name,
            'location' => $request->location,
            'valid_since' => $request->Duration,
            'MoU' => $request->mou,
            'security_active' => $request->satpam,
            
        ]);

        
        
        $Client = Client::where('name' , $request->name)->first();
        

        user::create([
            'name' => $request->name,
            'email' => $request->email,
            'client_id' => $Client->id,
            'company_id' => $nitip->company_id,
            'password' => bcrypt($request->password),
            'role' => 'client'
        ]);


    	return redirect('home');
    }




    public function edit($id){
        $client = Client::where('id' , $id)->first();
        
       return view('/Klien/EditClient',['client' => $client]);   
    }



    public function update(Request $request, $id)
    {
        $this->validate($request,[
    		'name' => 'required|string|max:255',
            'location' => 'required',
            'Duration'  => 'required|date',
            'satpam' => 'required|integer',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);


        $client = Client::find($id);

        $client->name = $request->name;
        $client->location = $request->location;
        $client->valid_since = $request->Duration;
        $client->security_active = $request->satpam;
        $client->save();

        $client_account = user::where('client_id' , $id)->first();

        $client_account ->    name = $request->name;
        $client_account ->    email = $request->email;
        $client_account ->    password = bcrypt($request->password);
        $client_account ->save();

        
       return redirect ('home');   
    }


    public function Delete($id)
    {
            $company = Client::find($id)->delete();
    
            return back();
    }
}
