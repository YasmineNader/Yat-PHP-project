@extends('Hotel.mainAdminFrame')

@section('title','Show Message Details')

@section('content')




<div class='container'>
  @if(Session::has('success'))

  <div class="alert alert-success" role="alert">
{{ Session::get('success') }}
  </div>
  @endif
  <h2>Show Message Details</h2>
<p>
<span>Name : </span>
<span>{{ $details->name }}</span>



</p>
<p>
  <span>Email :</span>
  <span>{{ $details->email }}</span>
  
  
  
  </p>
  <p>
    <span>Subject :</span>
    <span>{{ $details->subject }}</span>
   
    
    
    </p>

    <p>
      <span>Message :</span>
      <span>{{ $details->message }}</span>
     
      
      
      </p>
    <p>
      
      <a class ="btn btn-secondary"href="{{ URL('ShowMessage') }}">back</a>
      
      
      </p>
    
  </div>
  @stop
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  


