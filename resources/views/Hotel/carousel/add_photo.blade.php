@extends('Hotel.mainAdminFrame')

@section('title','Add Carousel Information')

@section('content')




<div class='container'>
 
  <h2>Add New Photo</h2>
  @if(Session::has('success'))

  <div class="alert alert-success" role="alert">
{{ Session::get('success') }}
  </div>
  @endif
<form method="post" action="{{ URL('insertform') }}" enctype="multipart/form-data">

  @csrf
  <div class="form-group">
    <label>photo</label>
   
  <input type="file" class="form-control" name="photo">
  @error('photo')
  <span class="text-danger">{{ $message }}</span>
   @enderror
  </div>
  
  
  <div class="form-group">
    <label>text</label>
    
  <input type="text" class="form-control" name="text">
  @error('text')
  <span class="text-danger">{{ $message }}</span>
   @enderror
  <div class="form-group">
  <label>click</label>
  
  <input type="text" class="form-control" name="click"> 
  @error('click')
  <span class="text-danger">{{ $message }}</span>
  @enderror 
  </div>

  
  <button class="btn btn-info">Save</button>
  <a class ="btn btn-secondary"href="{{ URL('ShowAll') }}">back</a>
  </form>
</div>
  </div>
  @stop
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  


