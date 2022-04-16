@extends('Hotel.mainAdminFrame')

@section('title','Edit Room')

@section('content')




<div class='container'>
  
  <h2>Edit Room Information</h2>
  @if(Session::has('success'))

  <div class="alert alert-success" role="alert">
{{ Session::get('success') }}
  </div>
  @endif
  
<form method="post" action="{{ URL('updateRoom/'.$details->id) }}" enctype="multipart/form-data">

  @csrf
  <div class="form-group">
    <label>photo</label>
  <input type="file" class="form-control" name="photo" style="display:none" id="inputshow" >
  <div>
  <img  class="delimage" style="width:150px"src="{{URL::asset('UploadImages/Rooms/'.$details->photo)}}">
     <a href="#" id="deleteimage" class="delimage">Delete image</a>
  </div>
  @error('photo')
  <span class="text-danger">{{ $message }}</span>
   @enderror
  </div>
  
  
  <div class="form-group">
    <label>Price</label>
    
  <input type="text" class="form-control" name="price" value='{{ $details->price }}'>
  @error('price')
  <span class="text-danger">{{ $message }}</span>
   @enderror
  <div class="form-group">
  <label>Room Type</label>
  
  <input type="text" class="form-control" name="roomtype" value='{{ $details->RoomType }}'> 
  @error('roomtype')
  <span class="text-danger">{{ $message }}</span>
  @enderror 
  </div>
  <div class="form-group">
    <label>Facilities</label>
    
    <input type="text" class="form-control" name="facilities" value='{{ $details->facilities }}'> 
    @error('facilities')
    <span class="text-danger">{{ $message }}</span>
    @enderror 
    </div>
  
  <button class="btn btn-info">Update</button>
  <a class ="btn btn-secondary"href="{{ URL('ShowRooms') }}">back</a>
  </form>
</div>
  </div>

  <script>

$('#deleteimage').click(function(event){
event.preventDefault();
$('.delimage').hide();
$('#inputshow').show();





});


  </script>
  @stop
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  


