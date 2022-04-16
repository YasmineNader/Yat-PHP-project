@extends('Hotel.mainAdminFrame')

@section('title','Show Form')

@section('content')


<div class="container">
  <h2>All Photos information</h2>
  @if(Session::has('success'))
  
  <div class="alert alert-success" role="alert">
{{ Session::get('success') }}
  </div>
  @endif
  

<div class='scrolltable'>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">Photo</th>
        <th scope="col">Text</th>
        <th scope="col">Click</th>
       
      </tr>
    </thead>
    <tbody>
      @foreach($homes as $home)
        
    
      <tr>
      
        <td><img style='width:150px;'src="{{URL::asset('UploadImages/Home/'.$home->photo)}}"></td>
        <td>{{ $home->text }}</td>
        <td>{{ $home->click }}</td>
        
        <td class='backendtables'>
          <a href="{{URL('ShowDetails/'.$home->id) }}" class="btn btn-info">Read</a>
        
        </td>
        <td class='backendtables'>
          <a href="{{URL('Edit/'.$home->id) }}" class="btn btn-success">Update</a>
        
        </td>
        <td class='backendtables'>
          <a href="{{URL('Delete/'.$home->id) }}" class="btn btn-danger">Delete</a>
        </td>
      </tr>

      @endforeach
      
    </tbody>
  </table>
  
</div>
  <a href="{{URL('addform') }}" class="btn btn-info">Add New Information</a>
  
  
  
</div>

  @stop
  
  
  
  
  

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  


