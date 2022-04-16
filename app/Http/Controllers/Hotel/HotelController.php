<?php

namespace App\Http\Controllers\Hotel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Description;
use App\Http\Requests\CarouselRequest;
use App\Http\Requests\DescriptionRequest;
use App\Traits\ImageUploads;

class HotelController extends Controller
{
    use ImageUploads;


    public function __construct(){


        $this->middleware('auth:admin');

    }

    // Show form




    public function add(){


        return view('Hotel.carousel.add_photo');





    }

// insert data
    public function insert(CarouselRequest $data){

        $file_name=$this->uploadImages($data->photo,'UploadImages/Home');

        //print_r($data->photo->getClientOriginalName());
      

        Home::create([

            'photo'=>$file_name,
            'text'=>$data['text'],
            'click'=>$data['click'],
            

        ]);
 

            return redirect()->back()->with('success','Data is added successfully');


    }
    //Show all data
    public function showAll(){


       $homes= Home::get();

       return view('Hotel.carousel.carousel_HomeInformation',compact('homes'));


    }

    //show details of data

    public function read($id){

      $details=Home::findOrFail($id);

      return view('Hotel.carousel.read_details',compact('details'));



    }

//show edit form with data
    public function edit($id){

     $details=Home::findOrFail($id);

        return view('Hotel.carousel.edit_details',compact('details'));

    }

    //update form 
    public function update(CarouselRequest $request){

        $homes=Home::findOrFail($request->id);
        $file_name=$this->uploadImages($request->photo,'UploadImages/Home');
        $homes->update([


            'photo'=>$file_name,

            'text'=>$request['text'],
            'click'=>$request['click'],


        ]);
             return redirect()->back()->with('success','Data is updated successfully');

        
    }

public function delete($id){

    $details=Home::findOrFail($id);

    $image_path=public_path().'/UploadImages/Home/'.$details->photo;
    unlink($image_path);

    $details->delete();

    return redirect()->back()->with('success','Data is Deleted successfully');



}
         // show description form

         public function addDescription(){


            return view('Hotel.description.addDescription');
    
    
    
    
    
        }
   
    // insert description data
        public function insertdata(DescriptionRequest $data){
    
            
          
    
            Description::create([
    
           
                'title'=>$data['title'],
                'description'=>$data['description'],
    
            ]);
     
    
                return redirect()->back()->with('success','Data is added successfully');
    
    
        }
        
        //Show all data
        public function showAllDescription(){
    
    
           $homes= Description::get();
    
           return view('Hotel.description.showalldescription',compact('homes'));
    
    
        }
   
        //show details of data
    
        public function readDescription($id){
    
          $details=Description::findOrFail($id);
    
          return view('Hotel.description.read_descriptionDetails',compact('details'));
    
    
    
        }
    
    //show edit form with data
        public function editDescription($id){
    
         $details=Description::findOrFail($id);
      
            return view('Hotel.description.edit_description',compact('details'));
    
        }



            //update form 
            public function updateDescription(DescriptionRequest $request){
                
                $homes= Description::findOrFail($request->id);
                
                $homes->update([
        
        
                    
                    'title'=>$request['title'],
                    'description'=>$request['description'],
        
        
                ]);
                     return redirect()->back()->with('success','Data is updated successfully');
        
                
            }
        
   
    public function deleteDescription($id){
    
        $details=Description::findOrFail($id);
    
        
    
        $details->delete();
    
        return redirect()->back()->with('success','Data is Deleted successfully');
    
    
    
    }






}
