@extends('Hotel.main_frame')

@section('title','Room Details')

@section('content')




<h1 id="titleRoomDetails">{{  $roomDetails['RoomType'] }}</h1>

<div class="container " id='containerroomdetais'>
  <div class='row'>
    <div class="col-lg-4"  id="colroomdetails" >
<div>
  <span class='Roomdetailstitle'>Price : </span>
  <span class='detailsinfo'>{{ $roomDetails['price']." LE/Night" }}</span>
  </div>


  <div>
    <span class='Roomdetailstitle'>Room Type : </span>
    <span class='detailsinfo'>{{ $roomDetails['RoomType'] }}</span>
    </div>

    <div>
      <span class='Roomdetailstitle'>Facilities : </span>
      <span class='detailsinfo'>{{ $roomDetails['facilities'] }}</span>
      </div>

      
    </div>

   
   <div class="col-lg-8">  
<div id="imgRoomDetails">
  

<img id='roomimgsize'src="{{URL::asset('UploadImages/Rooms/'.$roomDetails['photo']) }}">

</div>



    </div>



</div>
<div>

  <a href="{{ URL('rooms') }}" class="btn btn-dark " id="btnback" >Back</a>

</div>
</div>


@stop