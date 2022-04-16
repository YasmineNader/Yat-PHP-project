@extends('Hotel.mainAdminFrame')

@section('title','Add Information')

@section('content')



  
<div class='container'>

  <h2>Add New Information</h2>

  @if(Session::has('success'))

  <div class="alert alert-success" role="alert">
{{ Session::get('success') }}
  </div>
  @endif

<form method="post" action="{{ URL('AddInformation') }}" enctype="multipart/form-data">

  @csrf

  
  <div class="form-group">
  
  <label>Address</label>
  
  <input type="text" class="form-control" name="address">
  
  @error('address')
  <span class="text-danger">{{ $message }}</span>
   @enderror
  </div>

  <div class="form-group">
  
    <label>Email</label>
    

    <input type="text" class="form-control" name="email">
    
   @error('email')

   <span class="text-danger">{{ $message }}</span>
    @enderror
    </div>
    <div class="form-group">
  
      <label>Website</label>
      
  
      <input type="text" class="form-control" name="website">
      
     @error('website')
     
     <span class="text-danger">{{ $message }}</span>
      @enderror
      </div>
      <div class="form-group">
  
        <label>Phone</label>
        
    
        <input type="text" class="form-control" name="phone">
        
       @error('phone')
       
       <span class="text-danger">{{ $message }}</span>
        @enderror
        </div>
  <button class="btn btn-info">Save</button>
  <a class ="btn btn-secondary"href="{{ URL('ShowAllInformation') }}">back</a>

  </form>
</div>
  
  @stop
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  


