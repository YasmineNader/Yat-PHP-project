@extends('Hotel.mainAdminFrame')

@section('title','Add New Registration')

@section('content')




<div class='container'>
  
  <h2>Add New Registration</h2>
  @if(Session::has('success'))

  <div class="alert alert-success" role="alert">
{{ Session::get('success') }}
  </div>
  @endif
<form method="post" action="{{ URL('addRegistraionData') }}" enctype="multipart/form-data">

  @csrf
  <div class="form-group">
    <label>Name</label>
   
  <input type="text" class="form-control" name="name">
  @error('name')
  <span class="text-danger">{{ $message }}</span>
   @enderror
  </div>
  
  <div class="form-group">
    <label>Password</label>
   
  <input type="text" class="form-control" name="password">
  @error('password')
  <span class="text-danger">{{ $message }}</span>
   @enderror
  </div>
  
  <div class="form-group">
    <label>Room Type</label>
   
  <input type="text" class="form-control" name="roomtype">
  @error('roomtype')
  <span class="text-danger">{{ $message }}</span>
   @enderror
  </div>
  
  
  
  <div class="form-group">
    <label>Email</label>
    
  <input type="text" class="form-control" name="email">
  @error('email')
  <span class="text-danger">{{ $message }}</span>
   @enderror
  <div class="form-group">


  <div class="form-group">
    <label>Number Of Guests</label>
    
    <input type="text" class="form-control" name="numberOfGuests"> 
    @error('numberOfGuests')
    <span class="text-danger">{{ $message }}</span>
    @enderror 
    </div>

    <label>Check IN</label>
  
    <input type="text" class="form-control" name="checkin"> 
    @error('checkin')
    <span class="text-danger">{{ $message }}</span>
    @enderror 
    </div>

    <label>Check OUT</label>
  
    <input type="text" class="form-control" name="checkout"> 
    @error('checkout')
    <span class="text-danger">{{ $message }}</span>
    @enderror 
    </div>
  
  
  <button class="btn btn-info">Save</button>
  <a class ="btn btn-secondary"href="{{ URL('showAllRegistraions') }}">back</a>
  </form>
</div>
  </div>
  @stop
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  


