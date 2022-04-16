@extends('Hotel.mainAdminFrame')

@section('title','Show Room Details')

@section('content')




<div class='container'>
  @if(Session::has('success'))

  <div class="alert alert-success" role="alert">
{{ Session::get('success') }}
  </div>
  @endif
  <h2>Show Room Details</h2>
<p>
<p>Photo </p>
<span><img style="width:300px"src="{{ URL::asset('UploadImages/Rooms/'. $details->photo )}}"></span>



</p>
<p>
  <span>Price :</span>
  <span>{{ $details->price }}</span>
  
  
  
  </p>
  <p>
    <span>RoomType :</span>
    <span>{{ $details->RoomType }}</span>
   
    
    
    </p>

    <p>
      <span>Facilities :</span>
      <span>{{ $details->facilities }}</span>
     
      
      
      </p>
    <p>
      
      <a class ="btn btn-secondary"href="{{ URL('ShowRooms') }}">back</a>
      
      
      </p>
    
  </div>
  @stop
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  


