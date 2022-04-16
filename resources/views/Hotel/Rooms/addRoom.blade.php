@extends('Hotel.mainAdminFrame')

@section('title','Add New Room')

@section('content')




<div class='container'>
  
  <h2>Add New Room</h2>
  @if(Session::has('success'))

  <div class="alert alert-success" role="alert">
{{ Session::get('success') }}
  </div>
  @endif
<form method="post" action="{{ URL('insertRoom') }}" enctype="multipart/form-data">

  @csrf
  <div class="form-group">
    <label>Photo</label>
   
  <input type="file" class="form-control" name="photo">
  @error('photo')
  <span class="text-danger">{{ $message }}</span>
   @enderror
  </div>
  
  
  <div class="form-group">
    <label>Price</label>
    
  <input type="text" class="form-control" name="price">
  @error('price')
  <span class="text-danger">{{ $message }}</span>
   @enderror
  <div class="form-group">
  <label>RoomType</label>
  
  <input type="text" class="form-control" name="roomtype"> 
  @error('roomtype')
  <span class="text-danger">{{ $message }}</span>
  @enderror 
  </div>

  <div class="form-group">
    <label>Facilities</label>
    
    <input type="text" class="form-control" name="facilities"> 
    @error('facilities')
    <span class="text-danger">{{ $message }}</span>
    @enderror 
    </div>
  
  <button class="btn btn-info">Save</button>
  <a class ="btn btn-secondary"href="{{ URL('ShowRooms') }}">back</a>
  </form>
</div>
  </div>
  @stop
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  


