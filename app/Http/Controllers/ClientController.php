<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Client;
use App\client_account;



class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    
    public function index(){
        $List=DB::table('client_profile')
        ->select('id','name','location','valid_since','security_active')
        ->get();

        return view('/Klien/ListClient',compact(['List']));
    }

    public function add(){
                
        return view('/Klien/AddClient');
    }

    public function account(){
        $account = Client::all();
        
        return view('/klien/Account',compact(['account']));
    }

    

    public function store(Request $request){
        $this->validate($request,[
    		'name' => 'required|string|max:255',
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
            'security_active' => $request->satpam,
            
        ]);

        
        
        $Client = Client::where('name' , $request->name)->first();
        

        client_account::create([
            
            'email' => $request->email,
            'client_profile_id' => $Client->id,
            'password' => bcrypt($request->password)
        ]);


    	return redirect('/ListofClient');
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

        $client_account = client_account::where('client_id' , $id)->first();


        $client_account ->    email = $request->email;
        $client_account ->    password = bcrypt($request->password);
        $client_account ->save();

        
       return redirect ('/ListofClient');   
    }


    public function Delete($id)
    {
            $company = Client::find($id)->delete();
    
            return back();
    }
}
