<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name"=>'required|string',
            "password"=>'required',
            "roomtype"=>'required',
            "email"=>'required|email',
            "numberOfGuests"=>'required|numeric',
           "checkin"=>'required',
           "checkout"=>'required',
            
        ];
    }
    public function messages(){
        return[

        "name.required"=>"please Enter Name",

        "name.string"=>"please Enter Valid Name !",
        "password.required"=>"please Enter Password",
        "roomtype.required"=>"please Enter Room Type",
        

        "email.required"=>"please Enter Email",
        "email.email"=>"please Enter valid Email !",
        "numberOfGuests.required"=>"please Enter Number Of Guests",
        "numberOfGuests.numeric"=>"please Enter valid Number Of Guests !",
        "checkin.required"=>"please Enter Time Of Check In",
        "checkout.required"=>"please Enter Time Of Check Out",

        ];




    }


}
