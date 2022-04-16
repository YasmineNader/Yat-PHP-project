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

//carousel routes

Route::group(["namespace"=>'Hotel'],function(){


Route::get('addform','HotelController@add');
Route::post('insertform','HotelController@insert');
Route::get('ShowAll','HotelController@showAll');
Route::get('ShowDetails/{id}','HotelController@read');
Route::get('Edit/{id}','HotelController@edit');
Route::post('Update/{id}','HotelController@update');
Route::get('Delete/{id}','HotelController@delete');
});

//end of carousel routes



// description routes


Route::group(["namespace"=>'Hotel'],function(){

    Route::get('add_description','HotelController@addDescription');
    Route::post('insert_description','HotelController@insertdata');
    Route::get('show_allDescription','HotelController@showAllDescription');
    Route::get('read_Description/{id}','HotelController@readDescription');
    Route::get('Edit_description/{id}','HotelController@editDescription');
    Route::post('update_description/{id}','HotelController@updateDescription');
    Route::get('delete_description/{id}','HotelController@deleteDescription');


    //admin Login

    //Route::get('adminLogin','AdminController@showAdminLogin');
    Route::post('saveLogin','AdminController@saveLogin')->name('saveLogin');
    
// log out 
    Route::get('logout','AdminController@logout');
    
   
    });
    
    



Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('adminLogin','Hotel\AdminController@showAdminLogin');
    