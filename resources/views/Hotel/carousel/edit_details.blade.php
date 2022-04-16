@extends('Hotel.mainAdminFrame')

@section('title','Edit Form')

@section('content')




<div class='container'>
 
  <h2>Edit Photos Information</h2>

  @if(Session::has('success'))

  <div class="alert alert-success" role="alert">
{{ Session::get('success') }}
  </div>
  @endif
<form method="post" action="{{ URL('Update/'.$details->id) }}" enctype="multipart/form-data">

  @csrf
  <div class="form-group">
    <label>photo</label>
  <input type="file" class="form-control" name="photo" style="display:none" id="inputshow" >
  <div>
     <img  class="delimage" style="width:150px"src="{{URL::asset('UploadImages/Home/'.$details->photo)  }}">
     <a href="#" id="deleteimage" class="delimage">Delete image</a>
  </div>
  @error('photo')
  <span class="text-danger">{{ $message }}</span>
   @enderror
  </div>
  
  
  <div class="form-group">
    <label>text</label>
    
  <input type="text" class="form-control" name="text" value='{{ $details->text }}'>
  @error('text')
  <span class="text-danger">{{ $message }}</span>
   @enderror
  <div class="form-group">
  <label>click</label>
  
  <input type="text" class="form-control" name="click" value='{{ $details->click }}'> 
  @error('click')
  <span class="text-danger">{{ $message }}</span>
  @enderror 
  </div>

  
  <button class="btn btn-info">Update</button>
  <a class ="btn btn-secondary"href="{{ URL('ShowAll') }}">back</a>
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
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  


