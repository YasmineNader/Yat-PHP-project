<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomsRequest extends FormRequest
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
                "photo"=>'required',
                "price"=>'required|numeric',
                "roomtype"=>'required',
                "facilities"=>'required',
                
             ];
        
    }


    public function messages(){

        return [

            "photo.required"=>'Please insert photo',
            "price.required"=>'Please Enter your text',
            "price.numeric"=>'Please insert Number !',
            "roomtype.required"=>'Please Enter Room Type',
            "facilities.required"=>'Please Enter facilities',
            



        ];




    }
}
