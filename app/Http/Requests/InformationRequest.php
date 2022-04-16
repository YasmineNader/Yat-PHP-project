<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InformationRequest extends FormRequest
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
            'address'=>'required|string',
            'email'=>'required|email',
            'website'=>'required',
            'phone'=>'required|max:11',

        ];
    }

    public function messages(){
        return[
        'address.required'=>'Please Enter Address',
        'email.required'=>'Please Enter EMail',
        'email.email'=>'Please Enter Valid EMail',
        'website.required'=>'Please Enter WebSite',
        'phone.required'=>'Please Enter Phone',
        'phone.max'=>'Please Enter 11 Numbers Only For The Phone',
        ];



    }
}
