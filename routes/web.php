<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'HomeController@index')->name('home');



//Outsourcing
Route::get('/Outsourcing/ListofCustomer','OutsourcingController@index');
Route::get('/Outsourcing/Account','OutsourcingController@account');
Route::get('/Outsourcing/Request','OutsourcingController@request');
Route::get('/Outsourcing/Bills', function (){
    return view('Outsourcing/Bills');
});
Route::get('/Outsourcing/AddCustomer', function (){
    return view('Outsourcing/AddCustomer');
});

Route::get('/Outsourcing/EditCustomer', function (){
    return view('Outsourcing/EditCustomer');
});


// Satpam
    //Satpam Get
Route::get('/Satpam/AccountSatpam','SatpamController@account');
Route::get('/Satpam/ListofSatpam','SatpamController@index');
Route::get('/Satpam/RequestSatpam','SatpamController@request');

Route::get('/Satpam/DeploymentSatpam', function (){
    return view('Satpam/DeploymentSatpam');
});
    // Satpam CRUD


//Message
Route::get('/Message/Write', function(){
    return view('Message/Write');
});
Route::get('/Message/Inbox', function(){
    return view('Message/Inbox');
});
Route::get('/Message/Outbox', function(){
    return view('Message/Outbox');
});



// Login & Register
Route::get('/Login',function(){
    return view('Login-Register/Login');
});
Route::get('/Register',function(){
    return view('Login-Register/Register');
});
Route::get('/Forgot-passwd',function(){
    return view('Login-Register/Forgot-Password');
});


// Client
Route::get('/RequestfromClient',function(){
    return view('Klien/ReqDeploymentClient');
});

Route::get('/ListofClient',function(){
    return view('Klien/ListClient');
});

Route::get('/AddClient',function(){
    return view('Klien/AddClient');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
