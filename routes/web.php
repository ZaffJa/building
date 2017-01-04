<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/logout', function () {
    return view('shared.login');
});


Route::get('login','LoginController@view');
Route::post('login','LoginController@login');



Route::group(['prefix'=>'tenant','namespace'=>'Tenant'],function (){
    Route::get('/','TenantController@view');
    Route::get('/complaint','TenantController@complaint');
    Route::get('/bill','TenantController@bill');
    Route::get('/profile','TenantController@profile');
});


Route::group(['prefix'=>'staff','namespace'=>'Staff'],function (){
    Route::get('/','StaffController@view');
    Route::get('/complaint','StaffController@complaint');
    Route::get('/bill','StaffController@bill');
});