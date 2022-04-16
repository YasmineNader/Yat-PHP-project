@extends('Hotel.mainAdminFrame')

@section('title','Add New Message')

@section('content')




<div class='container'>
 
  <h2>Add New Message</h2>
  @if(Session::has('success'))

  <div class="alert alert-success" role="alert">
{{ Session::get('success') }}
  </div>
  @endif
<form method="post" action="{{ URL('insertmessage') }}" enctype="multipart/form-data">

  @csrf
  <div class="form-group">
    <label>Name</label>
   
  <input type="text" class="form-control" name="name">
  @error('name')
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
  <label>Subject</label>
  
  <input type="text" class="form-control" name="subject"> 
  @error('subject')
  <span class="text-danger">{{ $message }}</span>
  @enderror 
  </div>

  <div class="form-group">
    <label>Message</label>
    
    <textarea class="form-control" name="message"></textarea>
    @error('message')
    <span class="text-danger">{{ $message }}</span>
    @enderror 
    </div>
  
  <button class="btn btn-info">Save</button>
  <a class ="btn btn-secondary"href="{{ URL('ShowRooms') }}">back</a>
  </form>
</div>
  </div>
  @stop
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  


