<?php

namespace App\Http\Controllers\Hotel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Infodetail;
use App\Http\Requests\InformationRequest;

class InformationController extends Controller
{
    public function __construct(){


        $this->middleware('auth:admin');

    }
    /*
    public function informationForm(){


        return view('Hotel.Information.ShowInformationForm');


    }

    public function insertInformation(InformationRequest $data){

        Infodetail::create([


            'address'=>$data['address'],
            'email'=>$data['email'],
            'website'=>$data['website'],
            'phone'=>$data['phone'],






        ]);
            return redirect()->back()->with('success','Information Is Added Successfully');



}

*/
            public function ShowAllInfo(){

                $infoData=Infodetail::get();



                return view('Hotel.Information.showallinformation',compact('infoData'));

                }

                public function infoDetails($id)
                {
                   $infoDetails=Infodetail::findOrFail($id);


                   return view('Hotel.Information.readInfoDetails',compact('infoDetails'));
                }


                 public function editInfo($id)
                {
                    $editinfo=Infodetail::findOrFail($id);

                    return view('Hotel.Information.editInformation',compact('editinfo'));
                }


                public function updateInfo(InformationRequest $request)
                {
                 $updateInfo=Infodetail::findOrFail($request->id);
                 

                 $updateInfo->update([

                    

                    'address'=>$request['address'],
                    'email'=>$request['email'],
                    'website'=>$request['website'],
                    'phone'=>$request['phone'],



                 ]);
                 return redirect()->back()->with('success','Information Is Updated Successfully');

                }
/*
                 public function deleteInfo($id)
                {
                    $delInfo=Infodetail::findOrFail($id);
                    
                    $delInfo->delete();

                    return redirect()->back()->with('success','Information Is Deleted Successfully');

                }
                */
}
