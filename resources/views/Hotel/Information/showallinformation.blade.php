@extends('Hotel.mainAdminFrame')

@section('title','Show All Information')

@section('content')


<div class="container">
  <h2>All Hotel information</h2>

  @if(Session::has('success'))
  
  <div class="alert alert-success" role="alert">
{{ Session::get('success') }}
  </div>
  @endif

  <div class='scrolltable'>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">Address</th>
        <th scope="col">Email</th>
        <th scope="col">WebSite</th>
        <th scope="col">Phone</th>
       
      </tr>
    </thead>
    <tbody>
      @foreach($infoData as $value)
        
    
      <tr>
      
       
        <td>{{ $value->address }}</td>
        <td>{{ $value->email }}</td>
        <td>{{ $value->website }}</td>
        <td>{{ $value->phone }}</td>
        
        <td class='backendtables'>
          <a href="{{URL('informationDetails/'.$value->id) }}" class="btn btn-info">Read</a>
        </td>
        <td class='backendtables'>
          <a href="{{URL('editInformation/'.$value->id) }}" class="btn btn-success">Update</a>
        </td>
       <!-- <td class='backendtables'>
          <a href="{{URL('deleteInfo/'.$value->id) }}" class="btn btn-danger">Delete</a>
        </td>-->
      </tr>

      @endforeach
      
    </tbody>
  </table>
  </div>
  

  
  
  
</div>

  @stop
  
  
  
  
  

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  


