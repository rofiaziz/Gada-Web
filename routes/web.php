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

Route::get('/', function () {
    return view('Beranda/Beranda');
});
//Outsourcing
Route::get('/Outsourcing/ListofCustomer','OutsourcingController@index');
Route::get('/Outsourcing/Account','OutsourcingController@account');
Route::get('/Outsourcing/Request','OutsourcingController@request');

// Route::get('/Outsourcing/Request', function () {
//     return view('Outsourcing/Request');
// });
// Route::get('/Outsourcing/Account', function () {
//     return view('Outsourcing/Account');
// });
// Route::get('/Outsourcing/ListofCustomer', function (){
//     return view('Outsourcing/ListofCustomer');
// });
Route::get('/Outsourcing/Bills', function (){
    return view('Outsourcing/Bills');
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