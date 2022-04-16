@extends('Hotel.main_frame')

@section('title','Rooms')

@section('content')


<img src="{{ URL::asset('images/RoomImage/Room.jpg') }}" alt="roomimage" class="upimg">

<div class="container">
    <div class="row cardrow">
      @foreach($rooms as $room)
 <div class="col-lg-4">


  

<!--cards-->
 <div class="card" style=" margin-top: 40px;">
  <img class="card-img-top" src="{{ URL::asset('UploadImages/Rooms/'.$room['photo']) }}" alt="room image" >
  <div class="card-body">
  <a style="text-decoration:none;color: #9f8c5f"href="{{ URL('RoomDetails/'.$room['id']) }}"><p class="card-text">{{ $room['RoomType']}}</p></a>
    
  </div>
 </div>
 


</div>



@endforeach




</div>



</div>

@stop