<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\company;
use App\User;



class OutsourcingController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    
    public function index(){
        $List=DB::table('company')
        ->select('id','Name','City','Address','Client_count','Satpam_count')
        ->get();

        return view('/Outsourcing/ListofCustomer',compact(['List']));
    }

    public function add(){
        $paket =DB::table('package')
        ->select('id_package','package_name')
        ->get();
        
        return view('/Outsourcing/AddCustomer', ['paket'=>$paket]);
    }

    public function account(){
        $account = DB::table('users')
        ->select('id','name','email')
        ->get();
        return view('/Outsourcing/Account',compact(['account']));
    }

    public function request(){
        $company=array();
        $company = company::where('id_paket','0')
        ->get();
        
        return view('/Outsourcing/Request',['company' => $company]);
        
    }

    public function requestacc($id){
       
        $user = user::where('company_id' , $id)->first();
        $user->role='outsourcing';
        $user->save();
        return view('/Outsourcing/Request');
        
    }

    public function store(Request $request){
        $this->validate($request,[
    		'name' => 'required|string|max:255',
            'city' => 'required',
            'about' => 'required',
            'address' => 'required',
            'paket' => 'required',
            'time'  => 'required|integer',
            'satpam' => 'required|integer',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'client' => 'required|integer'
        ]);
        

        // $company = \App\company;
        // $company->Name = $request->name;
        // $company->City = $request->city;
        // $company->About = $request->about;
        // $company->Address = $request->address;
        // $company->id_paket = $request->paket;
        // $company->Client_count = $request->client;
        // $company->Satpam_count = $request->satpam;
        // $company->masa_berlangganan = $request->time;
        // $company->save();
        // $company->user->create([

        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => bcrypt($request->password)

        // ]);
        company::create([
            'Name' => $request->name,
            'City' => $request->city,
            'About' => $request->about,
            'Address' => $request->address,
            'id_paket' => $request->paket,
            'Client_count' => $request->client,
            'Satpam_count' => $request->satpam,
            'masa_berlangganan' => $request->time
        ]);

        // $company_id = DB::table('company')
        // ->select('id')
        // ->whereName($request->name)
        // ->get();
        
        $company = company::where('name' , $request->name)->first();
        

        user::create([
            'name' => $request->name,
            'email' => $request->email,
            'company_id' => $company->id,
            'role' => $request->role,
            'password' => bcrypt($request->password)
            
        ]);


    	return redirect('/Outsourcing/ListofCustomer');
    }




    public function edit($id){
        $company = company::where('id' , $id)->first();
        $paket =DB::table('package')
        ->select('id_package','package_name')
        ->get();
       return view('/Outsourcing/EditCustomer',['company' => $company],['paket' => $paket]);   
    }



    public function update(Request $request, $id)
    {
        $this->validate($request,[
    		'name' => 'required|string|max:255',
            'city' => 'required',
            'about' => 'required',
            'address' => 'required',
            'paket' => 'required',
            'time'  => 'required|integer',
            'satpam' => 'required|integer',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
            'client' => 'required|integer'
        ]);


        $company = company::find($id);

        $company->Name = $request->name;
        $company->City = $request->city;
        $company->About = $request->about;
        $company->Address = $request->address;
        $company->id_paket = $request->paket;
        $company->Client_count = $request->client;
        $company->Satpam_count = $request->satpam;
        $company->masa_berlangganan = $request->time;
        $company->save();

        $user = user::where('company_id','=' , $id)->first();

        $user->    name  = $request->name;
        $user->    email = $request->email;
        $user->    role = $request->role;
        $user->    password = bcrypt($request->password);
        $user->save();

        
       return redirect ('/Outsourcing/ListofCustomer');   
    }


    public function Delete($id)
    {
            $company = company::find($id)->delete();
    
            return back();
    }



}
