@extends('Hotel.mainAdminFrame')

@section('title','Show Details')

@section('content')




<div class='container'>
  @if(Session::has('success'))

  <div class="alert alert-success" role="alert">
{{ Session::get('success') }}
  </div>
  @endif
  <h2>Show Details</h2>
<p>
<p>Photo </p>
<span><img style="width:300px"src="{{ URL::asset('UploadImages/Home/'. $details->photo )}}"></span>



</p>
<p>
  <span>Text :</span>
  <span>{{ $details->text }}</span>
  
  
  
  </p>
  <p>
    <span>Click :</span>
    <span>{{ $details->click }}</span>
   
    
    
    </p>

    <p>
      
      <a class ="btn btn-secondary"href="{{ URL('ShowAll') }}">back</a>
      
      
      </p>
    
  </div>
  @stop
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  


