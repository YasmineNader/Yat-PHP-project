@extends('Hotel.mainAdminFrame')

@section('title','Show Messages')

@section('content')


<div class="container">
  <h2>All Contact Us Messages</h2>

  @if(Session::has('success'))
  
    <div class="alert alert-success" role="alert">
  {{ Session::get('success') }}
    </div>
    @endif

    <div class='scrolltable'>

  <table class="table table-striped table-hover">
    <thead>
      <tr>

        <th scope="col">Name</th>
        <th scope="col">Email</th>       
        <th scope="col">subject</th>
        <th scope="col">Message</th>
       
      </tr>
    </thead>
    <tbody>
      @foreach($Messages as $Message)
        
    
      <tr>
      
        
        <td>{{ $Message->name }}</td>
        <td>{{ $Message->email }}</td>
        <td>{{ $Message->subject }}</td>
        <td>{{ $Message->message }}</td>
        <td class='backendtables'>
          <a href="{{URL('ShowMessageDetails/'.$Message->id) }}" class="btn btn-info">Read</a>
        </td>
        <td class='backendtables'>
          <a href="{{URL('DeleteMessage/'.$Message->id) }}" class="btn btn-danger">Delete</a>
        </td>
      </tr>

      @endforeach
      
    </tbody>
  </table>
  
    </div>
  <!--<a href="{{-- URL('ContactForm') --}}" class="btn btn-info">Add New Message</a>-->
  
  
  
</div>

  @stop
  
  
  
  
  

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  


