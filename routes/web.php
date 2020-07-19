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
Route::group(['middleware' => ['CheckRole:admin']], function () {
    Route::get('/Outsourcing/ListofCustomer','OutsourcingController@index');
    Route::get('/Outsourcing/Account','OutsourcingController@account');
    Route::get('/Outsourcing/Request','OutsourcingController@request');
    Route::get('/Outsourcing/Request/{id}','OutsourcingController@requestacc');

    Route::post('/Outsourcing/store','OutsourcingController@store');
    Route::get('/Outsourcing/Add','OutsourcingController@add');

    Route::get('/Outsourcing/Edit/{id}','OutsourcingController@edit');
    Route::post('/Outsourcing/Update/{id}','OutsourcingController@update');

    Route::get('/Outsourcing/Delete/{id}','OutsourcingController@delete');


    Route::get('/Outsourcing/Bills', function (){
        return view('Outsourcing/Bills');
    });

});

// Client
Route::group(['middleware' => ['CheckRole:admin,outsourcing']], function () {
    

    Route::get('/AccountofClient/{role}', 'ClientController@account')->name('akunclient')->middleware(['user']);
    Route::get('/ListofClient{role}', 'ClientController@index')->name('listclient')->middleware(['user']);


    Route::get('/AddClient','ClientController@add')->name('addclient');
    Route::post('/Client/store/{role}','ClientController@store')->middleware(['user']);

    Route::get('/Client/Edit/{id}','ClientController@edit');
    Route::post('/Client/Update/{id}','ClientController@update');

    Route::get('/Client/Delete/{id}','ClientController@delete');

});



// Satpam
    //Satpam Get
Route::get('/Satpam/AccountSatpam','SatpamController@account');
Route::get('/Satpam/ListofSatpam/{role}','SatpamController@index')->name('listsatpam')->middleware(['user']);
Route::get('/Satpam/RequestSatpam/{role}','SatpamController@request')->name('request')->middleware(['user']);
Route::get('/Satpam/RequestSatpam/edit/{id}','SatpamController@editreq');
Route::get('/Satpam/RequestSatpam/delete/{id}','SatpamController@deletereq');

Route::get('/Satpam/attendance/{role}', 'SatpamController@attendance')->name('attendance')->middleware(['user']);
Route::get('/Satpam/DeploymentSatpam/{role}', 'SatpamController@deploy')->name('deploy')->middleware(['user']);

Route::get('/Satpam/schedule/{role}','SatpamController@schedule')->name('schedule')->middleware(['user']);
Route::get('/Satpam/Addschedule','SatpamController@addschedule');
Route::post('/Satpam/Addschedule/store/{role}', 'SatpamController@store')->name('addschedule')->middleware(['user']);
Route::get('/Satpam/Addschedule/edit/{id}','SatpamController@editschedule');
Route::post('/Satpam/Addschedule/update/{id}','SatpamController@update');
Route::get('/Satpam/Addschedule/delete/{id}','SatpamController@deleteschedule');

Route::get('/Report/{id}','ReportController@laporan');
Route::get('/cetak/accident/{id}','ReportController@accident');
Route::get('/cetak/guest/{id}','ReportController@guest');

Route::get('/Report/accident/{role}', 'ReportController@accidentall')->name('daftarkejadian')->middleware(['user']);
Route::get('/Report/guest/{role}', 'ReportController@guestall')->name('daftartamu')->middleware(['user']);
Route::get('/Report/vehicle/{role}', 'ReportController@vehicleall')->name('daftarkendaraan')->middleware(['user']);
//Message

Route::get('/contacts', 'ContactsController@get');
Route::get('/conversation/{id}', 'ContactsController@getMessagesFor');
Route::post('/conversation/send', 'ContactsController@send');


Route::get('/Message/Inbox', function(){
    return view('Message/Inbox');
});


// paket

Route::group(['middleware' => ['CheckRole:admin']], function () {

    Route::get('/Package/paket', 'PaketController@index');
    Route::get('/Package/add', 'PaketController@add');
    Route::get('/Package/edit/{id}', 'PaketController@edit');
    Route::get('/Package/delete/{id}', 'PaketController@delete');
    Route::post('/Package/store', 'PaketController@store');
    Route::post('/Package/update/{id}', 'PaketController@update');

});





Route::get('/Forgot-passwd',function(){
    return view('Login-Register/Forgot-Password');
});


//Laporan
Route::group(['middleware' => ['CheckRole:admin,outsourcing,client']], function () {
    
    Route::get('/Laporan/{id}', 'ReportController@laporan')->name('daftarlaporan')->middleware(['user']);
   
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');





