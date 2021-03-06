<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsRequest extends FormRequest
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
           'name'=>'required|string',
           'email'=>'required|email',
           'subject'=>'required',
           'message'=>'required',
        ];

    }
    
    public function messages(){
        return[
        'name.required'=>'Please Enter Name',
        'name.string'=>'Please Enter valid Name',
        'email.required'=>'Please Enter Email',
        'email.email'=>'Please Enter valid Email',
        'subject.required'=>'Please Enter subject',
        'message.required'=>'Please Enter message',

        ];

    }
   
}
