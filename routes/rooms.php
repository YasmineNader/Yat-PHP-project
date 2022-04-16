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


Route::get('addRoomForm','RoomController@addRoomForm');
Route::post('insertRoom','RoomController@insertRoom');
Route::get('ShowRooms','RoomController@showAllRooms');
Route::get('ShowRoom_details/{id}','RoomController@readDetails');
Route::get('EditRoom/{id}','RoomController@editRoom');
Route::post('updateRoom/{id}','RoomController@updateRoom');
Route::get('DeleteRoom/{id}','RoomController@deleteRoom');
});


    


