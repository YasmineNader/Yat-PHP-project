<?php

namespace App\Http\Controllers\Hotel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
class AdminController extends Controller
{
    public function showAdminLogin(){

        return view('auth.adminLogin');


    }

   

    public function saveLogin(Request $request){



        $this->validate($request,[
        'email'=>'required|email',
        'password'=>'required|min:8'
    
    
        ]);
        
        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])){
    
        return view('Hotel.mainAdminFrame');
    
    
        }
    
        return redirect()->back();
    }

            public function logout(Request $request)
        {
            Auth::logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect('adminLogin');
        }


       

}
