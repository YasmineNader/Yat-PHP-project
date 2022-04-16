@extends('Hotel.mainAdminFrame')

@section('title','Show Information Details')

@section('content')




<div class='container'>
  @if(Session::has('success'))

  <div class="alert alert-success" role="alert">
{{ Session::get('success') }}
  </div>
  @endif
  <h2>Show Information Details</h2>

<p>
  <span>Address : </span>

  <span>{{ $infoDetails->address }}</span>
  
  
  </p>
  <p>
    <span>Email : </span>

    <span>{{ $infoDetails->email }}</span>
   
    
    
    </p>
    <p>
      <span>WebSite : </span>
  
      <span>{{ $infoDetails->website }}</span>
     
      
      
      </p>
      <p>
        <span>Phone : </span>
    
        <span>{{ $infoDetails->phone }}</span>
       
        
        
        </p>

    <p>
      
      <a class ="btn btn-secondary"href="{{ URL('ShowAllInformation') }}">back</a>
      
      
      </p>
    
  </div>
  @stop
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  


