<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Infodetail;
use App\Models\contact;
use App\Http\Requests\ContactUsRequest;

class ContactUsController extends Controller
{
    public function contactPage(){

        $infoDetails=Infodetail::first();

        return view('Hotel.contactUs',compact('infoDetails'));



    }


        public function inserConctactMessaage(ContactUsRequest $data){

            contact::create([


                'name'=>$data['name'],
                'email'=>$data['email'],
                'subject'=>$data['subject'],
                'message'=>$data['message'],

            ]);

                return redirect()->back()->with('success','Message Has Been Sent');



        }
}
