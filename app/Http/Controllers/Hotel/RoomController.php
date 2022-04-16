<?php

namespace App\Http\Controllers\Hotel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RoomsRequest;
use App\Models\Room;
use App\Traits\ImageUploads;
class RoomController extends Controller
{
    use ImageUploads;

    public function __construct(){


        $this->middleware('auth:admin');

    }


    public function addRoomForm(){



 return view('Hotel.Rooms.addRoom');




    }


    public function insertRoom(RoomsRequest $data){

        $file_name=$this->uploadImages($data->photo,'UploadImages/Rooms');

             Room::create([


                'photo'=>$file_name,
                "price"=>$data['price'],
                "RoomType"=>$data['roomtype'],
                "facilities"=>$data['facilities'],





            ]);

                return redirect()->back()->with('success','Data inserted successfully');


    }
        

           public function showAllRooms(){


             $homes=Room::get();

             return view('Hotel.Rooms.showallRooms',compact('homes'));




                    }  

            public function readDetails($id){

                $details=Room::findOrFail($id);


                return view('Hotel.Rooms.read_RoomDetails',compact('details'));


            }



            public function editRoom($id){

                $details=Room::findOrFail($id);

                return view('Hotel.Rooms.edit_RoomsInfo',compact('details'));



            }


            public function updateRoom(RoomsRequest $request){


                $homes=Room::findOrFail($request->id);

                $file_name=$this->uploadImages($request->photo,'UploadImages/Rooms');

                $homes->update([
   
   
                   'photo'=>$file_name,
                   "price"=>$request['price'],
                   "RoomType"=>$request['roomtype'],
                   "facilities"=>$request['facilities'],
   
   
   
   
   
               ]);


               return redirect()->back()->with('success','Data Updated successfully');
            }


            public function deleteRoom($id){


                $details=Room::findOrFail($id);
                $image_path=public_path().'/UploadImages/Rooms/'.$details->photo;

                unlink($image_path);
                
                $details->delete();

                return redirect()->back()->with('success','Data is Deleted successfully');
    


            }

            
}
