@extends('Hotel.mainAdminFrame



')

@section('title','Show Registration Details')

@section('content')




<div class='container'>
  @if(Session::has('success'))

  <div class="alert alert-success" role="alert">
{{ Session::get('success') }}
  </div>
  @endif
  <h2>Show Registration Details</h2>
<p>
<span>Name : </span>
<span>{{ $registrationDetails->name }}</span>



</p>

<span>Password :  </span>
<span>{{ $registrationDetails->password }}</span>



</p>

<span>Room Type : </span>
<span>{{ $registrationDetails->RoomType }}</span>



</p>
<p>
  <span>Email :</span>
  <span>{{ $registrationDetails->email }}</span>
  
  
  
  </p>
  <p>
    <span>Number Of Guests :</span>
    <span>{{ $registrationDetails->numberofguests }}</span>
   
    
    
    </p>

    <p>
      <span>Check In :</span>
      <span>{{ $registrationDetails->checkin }}</span>
     
      
      
      </p>


      <p>
        <span>Check Out :</span>
        <span>{{ $registrationDetails->checkout }}</span>
       
        
        
        </p>
    <p>
      
      <a class ="btn btn-secondary"href="{{ URL('showAllRegistraions') }}">back</a>
      
      
      </p>
    
  </div>
  @stop
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  


