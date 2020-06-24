<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\company;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            // 'password' => 'required|string|min:6|confirmed',
            'city' => 'required',
            'about' => 'required',
            'address' => 'required',
            'time'  => 'required|integer',
            'satpam' => 'required|integer',
            'email' => 'required|string|email|max:255|unique:users',
            'client' => 'required|integer'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        company::create([
            'Name' => $data['name'],
            'City' => $data['city'],
            'About' => $data['about'],
            'Address' => $data['address'],
            'id_paket' => '0',
            'Client_count' => $data['client'],
            'Satpam_count' => $data['satpam'],
            'masa_berlangganan' => $data['time']
        ]);
        $company = company::where('name' , $data['name'])->first();

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'company_id' => $company->id,
            'password' => bcrypt($data['name']),
        ]);
    }
}
