@extends('Hotel.mainAdminFrame')

@section('title','Show Details')

@section('content')




<div class='container'>
  @if(Session::has('success'))

  <div class="alert alert-success" role="alert">
{{ Session::get('success') }}
  </div>
  @endif
  <h2>Show Details</h2>

<p>
  <span>Title : </span>

  <span>{{ $details->title }}</span>
  
  
  </p>
  <p>
    <span>Description : </span>

    <span>{{ $details->description }}</span>
   
    
    
    </p>

    <p>
      
      <a class ="btn btn-secondary"href="{{ URL('show_allDescription') }}">back</a>
      
      
      </p>
    
  </div>
  @stop
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  


