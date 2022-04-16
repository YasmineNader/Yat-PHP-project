@extends('Hotel.mainAdminFrame')

@section('title','Edit Information Form')

@section('content')




<div class='container'>
  
  <h2>Edit Hotel Information</h2>

  @if(Session::has('success'))

  <div class="alert alert-success" role="alert">
{{ Session::get('success') }}
  </div>
  @endif
  
<form method="post" action="{{ URL('updateInfo/'.$editinfo->id) }}" enctype="multipart/form-data">

  @csrf
 
  
  
  <div class="form-group">
    <label>Address</label>
    
  <input type="text" class="form-control" name="address" value='{{ $editinfo->address }}'>
  @error('address')
  <span class="text-danger">{{ $message }}</span>
   @enderror
  <div class="form-group">
  <label>Email</label>
  
  <input type="text" class="form-control" name="email" value='{{ $editinfo->email }}'>
  
   
  @error('email')
  <span class="text-danger">{{ $message }}</span>
  @enderror 
  </div>

  <div class="form-group">
    <label>WebSite</label>
    
    <input type="text" class="form-control" name="website" value='{{ $editinfo->website }}'>
    
     
    @error('website')
    <span class="text-danger">{{ $message }}</span>
    @enderror 
    </div>
    <div class="form-group">
      <label>Phone</label>
      
      <input type="text" class="form-control" name="phone" value='{{ $editinfo->phone }}'>
      
       
      @error('phone')
      <span class="text-danger">{{ $message }}</span>
      @enderror 
      </div>

  
  <button class="btn btn-info">Update</button>
  <a class ="btn btn-secondary"href="{{ URL('ShowAllInformation') }}">back</a>
  </form>
</div>
  </div>
  @stop
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  


