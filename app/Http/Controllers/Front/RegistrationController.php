<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Room;
use App\Http\Requests\RegistrationRequest;
use Illuminate\Support\Facades\Hash;
class RegistrationController extends Controller
{
   public function RegistrationPage(){
      $Types=Room::get();
    return view('Hotel.Registration',compact('Types'));


   }




   public function insertRegistrationData(RegistrationRequest $request){

      Registration::create([


          'name'=>$request['name'],
          'password'=>Hash::make($request['password']),
          'RoomType'=>$request['roomtype'],
          'email'=>$request['email'],
          'numberofguests'=>$request['numberOfGuests'],
          'checkin'=>$request['checkin'],
          'checkout'=>$request['checkout'],
          

      ]);

          return redirect()->back()->with('success','Data Has Been Sent');



  }
}
