@extends('Hotel.mainAdminFrame')

@section('title','Edit Description Form')

@section('content')




<div class='container'>
  
  <h2>Edit Photos Information</h2>
  @if(Session::has('success'))

  <div class="alert alert-success" role="alert">
{{ Session::get('success') }}
  </div>
  @endif
  
<form method="post" action="{{ URL('update_description/'.$details->id) }}" enctype="multipart/form-data">

  @csrf
 
  
  
  <div class="form-group">
    <label>Title</label>
    
  <input type="text" class="form-control" name="title" value='{{ $details->title }}'>
  @error('title')
  <span class="text-danger">{{ $message }}</span>
   @enderror
  <div class="form-group">
  <label>Description</label>
  
  <textarea class="form-control" name="description">{{ $details->description }}</textarea>
  
   
  @error('description')
  <span class="text-danger">{{ $message }}</span>
  @enderror 
  </div>

  
  <button class="btn btn-info">Update</button>
  <a class ="btn btn-secondary"href="{{ URL('show_allDescription') }}">back</a>
  </form>
</div>
  </div>
  @stop
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  


