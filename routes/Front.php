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


Route::group(['namespace'=>'Front'],function(){

    Route::get('/','MainHomeController@index');
    Route::get('rooms','RoomsController@RoomsPage');
    Route::get('RoomDetails/{id}','RoomsController@RoomDetails');
    Route::get('contact','ContactUsController@contactPage');
    Route::get('Registration','RegistrationController@RegistrationPage');
    Route::get('RoomDetails/{id}','RoomsController@RoomDetails');


// contactusform

Route::post('contactUsData','ContactUsController@inserConctactMessaage');

// registrationform
Route::post('RegistrationData','RegistrationController@insertRegistrationData');


});







    


