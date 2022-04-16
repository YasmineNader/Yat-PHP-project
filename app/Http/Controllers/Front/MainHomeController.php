<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Description;

class MainHomeController extends Controller
{
    public function index(){

    $homes=Home::get();
    $details=Description::first();

        
      return view('Hotel.index',compact('homes','details'));

    }
}
