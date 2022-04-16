@extends('Hotel.mainAdminFrame')

@section('title','Show description Form')

@section('content')


<div class="container">
  <h2>All Description information</h2>

  @if(Session::has('success'))
  
  <div class="alert alert-success" role="alert">
{{ Session::get('success') }}
  </div>
  @endif

<div class='scrolltable'>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th  scope="col">Title</th>
        
        <th  scope="col">Description</th>
        
       
      </tr>
    </thead>
    <tbody>
      @foreach($homes as $home)
        
    
      <tr>
      
       
        <td id='titledescr'>{{ $home->title }}</td>
        <td >{{ $home->description }}</td>
        
        
        
        <td class='backendtables'>
          <a href="{{URL('read_Description/'.$home->id) }}" class="btn btn-info">Read</a>
        </td>
        <td class='backendtables'>
          <a href="{{URL('Edit_description/'.$home->id) }}" class="btn btn-success">Update</a>
        </td >
        <td class='backendtables'>
          <a href="{{URL('delete_description/'.$home->id) }}" class="btn btn-danger">Delete</a>
        </td>
      </tr>

      @endforeach
      
    </tbody>
  </table>
</div>
  
  <a href="{{URL('add_description') }}" class="btn btn-info">Add New Information</a>
  
  
  
</div>

  @stop
  
  
  
  
  

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  


