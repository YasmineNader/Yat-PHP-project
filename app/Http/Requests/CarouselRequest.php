<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarouselRequest extends FormRequest
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
           "text"=>'required',
           //"click"=>'required',
           
        ];
    }


    public function messages(){

        return [

            "photo.required"=>'Please insert photo',
            "text.required"=>'Please insert your text',
            //"click.required"=>'required',
            



        ];




    }
}
