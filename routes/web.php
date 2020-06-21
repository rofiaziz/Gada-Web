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
    

    Route::get('/AccountofClient', 'ClientController@account');
    Route::get('/ListofClient', 'ClientController@index');


    Route::get('/AddClient','ClientController@add');
    Route::post('/Client/store','ClientController@store');

    Route::get('/Client/Edit/{id}','ClientController@edit');
    Route::post('/Client/Update/{id}','ClientController@update');

    Route::get('/Client/Delete/{id}','ClientController@delete');

});



// Satpam
    //Satpam Get
Route::get('/Satpam/AccountSatpam','SatpamController@account');
Route::get('/Satpam/ListofSatpam','SatpamController@index');
Route::get('/Satpam/RequestSatpam','SatpamController@request');

Route::get('/Satpam/DeploymentSatpam', 'SatpamController@deploy');

    // Satpam CRUD


//Message

Route::get('/contacts', 'ContactsController@get');
Route::get('/conversation/{id}', 'ContactsController@getMessagesFor');
Route::post('/conversation/send', 'ContactsController@send');


Route::get('/Message/Inbox', function(){
    return view('Message/Inbox');
});








Route::get('/Forgot-passwd',function(){
    return view('Login-Register/Forgot-Password');
});






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


