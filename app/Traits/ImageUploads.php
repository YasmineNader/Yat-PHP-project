<?php


namespace App\Traits;


trait ImageUploads {


    protected function uploadImages($photo,$path){



        $file_extension=$photo->getClientOriginalExtension();
        //$file_name=$photo->getClientOriginalName().time().'.'.$file_extension;
        $file_name='Hotel_'.time().'.'.$file_extension;
       
      $photo->move($path,$file_name);
        
      return $file_name;
    }


}