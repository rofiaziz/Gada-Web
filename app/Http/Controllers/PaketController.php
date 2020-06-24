<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\package;

class PaketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $paket = package::all();

        return view('/Package/ListofPackage',compact(['paket']));
    }

    public function store(Request $request){
        $this->validate($request,[
    		'Nama' => 'required|string|max:255',
            'Batas' => 'required|integer',
            'Harga' => 'required|integer',
            'Detail' => 'required'
            
        ]);
        

       
        package::create([
            'package_name' => $request->Nama,
            'Security_Count' => $request->Batas,
            'Bills' => $request->Harga,
            'Detail' => $request->Detail,
            
        ]);

    	return redirect('/Package/paket');
    }
    public function add(){
        return view('/Package/Addpackage');
    }

    public function delete($id){
        DB::table('package')
        ->where('id_package', $id)
        ->delete();
            return back();
    }
       
        

}
