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


//Route::get('informationForm','InformationController@informationForm');
//Route::post('AddInformation','InformationController@insertInformation');
Route::get('ShowAllInformation','InformationController@ShowAllInfo');
Route::get('informationDetails/{id}','InformationController@infoDetails');
Route::get('editInformation/{id}','InformationController@editInfo');
Route::post('updateInfo/{id}','InformationController@updateInfo');
//Route::get('deleteInfo/{id}','InformationController@deleteInfo');
});


    


