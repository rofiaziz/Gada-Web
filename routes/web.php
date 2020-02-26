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
Route::get('/Outsourcing/Request', function () {
    return view('Outsourcing/Request');
});
Route::get('/Outsourcing/Account', function () {
    return view('Outsourcing/Account');
});
Route::get('/Outsourcing/ListofCustomer', function (){
    return view('/Outsourcing/ListofCustomer');
});
Route::get('/Outsourcing/Bills', function (){
    return view('/Outsourcing/Bills');
});
