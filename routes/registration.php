<?php

use Illuminate\Support\Facades\Route;

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


Route::group(['namespace'=>'Hotel'],function(){

  //Route::get('addRegistraionForm','RegistrationController@addRegistraion');
 // Route::post('addRegistraionData','RegistrationController@insertRegistration');
  Route::get('showAllRegistraions','RegistrationController@showAllRegistration');
  Route::get('RegistraionsDetails/{id}','RegistrationController@showRegistrationDetails');
  Route::get('deleteRegistraions/{id}','RegistrationController@deleteRegistration');
   
});





    


