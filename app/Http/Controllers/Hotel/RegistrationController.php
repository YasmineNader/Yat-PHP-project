<?php

namespace App\Http\Controllers\Hotel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;
use App\Models\Registration;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{



    public function __construct(){


        $this->middleware('auth:admin');

    }
    //
    /*
    public function addRegistraion(){

       
            return view('Hotel.Registration.addRegistration');



    }
*/
/*
    public function insertRegistration(RegistrationRequest $data){

        
        Registration::create([

            'name'=>$data['name'],
            'password'=>Hash::make($data['password']),
            'RoomType'=>$data['roomtype'],
            'email'=>$data['email'],
            'numberofguests'=>$data['numberOfGuests'],
            'checkin'=>$data['checkin'],
            'checkout'=>$data['checkout'],

        




        ]);

            return redirect()->back()->with('success','Data Is Added Successfully');



    }
*/
    public function showAllRegistration(){


        $allRegisters=Registration::get();


        return view('Hotel.Registration.showallRegistration',compact('allRegisters'));






    }

    public function showRegistrationDetails($id){


        $registrationDetails=Registration::findOrFail($id);

        return view('Hotel.Registration.readRegistrationDetails',compact('registrationDetails'));
    }
    public function deleteRegistration($id){


        $DeleteRegistration=Registration::findOrFail($id);

        $DeleteRegistration->delete();



        return redirect()->back()->with('success','Registration Is deleted Successfully');
    }

}
