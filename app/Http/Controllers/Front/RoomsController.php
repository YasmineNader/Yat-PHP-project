<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
class RoomsController extends Controller
{
   public function RoomsPage(){

      $rooms=Room::get();
      
      
   return view('Hotel.rooms',compact('rooms'));


   }


   public function RoomDetails($id){

      $roomDetails=Room::findOrFail($id);

      
   
    return view('Hotel.roomDetails',compact('roomDetails'));



   }

   


}
