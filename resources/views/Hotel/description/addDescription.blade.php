@extends('Hotel.mainAdminFrame')

@section('title','Add Description')

@section('content')




<div class='container'>

  <h2>Add New Description</h2>

  <div class='container'>
    @if(Session::has('success'))
  
    <div class="alert alert-success" role="alert">
  {{ Session::get('success') }}
    </div>
    @endif
<form method="post" action="{{ URL('insert_description') }}" enctype="multipart/form-data">

  @csrf

  
  <div class="form-group">
  
  <label>title</label>
  
  <input type="text" class="form-control" name="title">
  
  @error('title')
  <span class="text-danger">{{ $message }}</span>
   @enderror
  </div>

  <div class="form-group">
  
    <label>description</label>
    

   <textarea type="text" class="form-control" name="description"></textarea>
    
   @error('description')
   <span class="text-danger">{{ $message }}</span>
    @enderror
    </div>
  <button class="btn btn-info">Save</button>
  <a class ="btn btn-secondary"href="{{ URL('show_allDescription') }}">back</a>

  </form>
</div>
  </div>
  @stop
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  


