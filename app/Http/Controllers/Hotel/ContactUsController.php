<?php

namespace App\Http\Controllers\Hotel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ContactUsRequest;
use App\Models\contact;


class ContactUsController extends Controller
{
   
    public function __construct(){


        $this->middleware('auth:admin');

    }

    /*
    public function addForm(){

        return view('Hotel.ContactUs.addForm');


    }

    public function insertdata(ContactUsRequest $request){


        contact::create([

            'name'=>$request['name'],
            'email'=>$request['email'],
            'subject'=>$request['subject'],
            'message'=>$request['message'],


        ]);

            return redirect()->back()->with('success','Data is added successfully');

    }
*/
    public function showAllMsg(){

        $Messages=contact::get();

        return view('Hotel.ContactUs.showallMSG',compact('Messages'));



    }


       public function readMessage($id){

        $details=contact::findOrFail($id);


        return view('Hotel.ContactUs.read_Details',compact('details'));


    }

     public function deleteMessage($id)
    {
        $delMsg=contact::findOrFail($id);


        $delMsg->delete();

        return redirect()->back()->with('success','Message is Deleted Successfully');
    }

    


}
