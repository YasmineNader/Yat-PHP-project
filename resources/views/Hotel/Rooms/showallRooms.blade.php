@extends('Hotel.mainAdminFrame')

@section('title','Show Rooms')

@section('content')


<div class="container">
  <h2>All Room information</h2>

  @if(Session::has('success'))
  
  <div class="alert alert-success" role="alert">
{{ Session::get('success') }}
  </div>
  @endif
<div class="scrolltable">

  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">Photo</th>
        <th scope="col">Price</th>
        <th scope="col">RoomType</th>
        <th scope="col">Facilities</th>
       
      </tr>
    </thead>
    <tbody>
      @foreach($homes as $home)
        
    
      <tr>
      
        <td><img style='width:150px;'src="{{URL::asset('UploadImages/Rooms/'.$home->photo)}}"></td>
        <td>{{ $home->price }}</td>
        <td>{{ $home->RoomType }}</td>
        <td>{{ $home->facilities }}</td>
        
        <td class='backendtables'>
          <a href="{{URL('ShowRoom_details/'.$home->id) }}" class="btn btn-info">Read</a>
        </td>
        <td class='backendtables'>
          <a href="{{URL('EditRoom/'.$home->id) }}" class="btn btn-success">Update</a>
        </td>
        <td class='backendtables'>
          <a href="{{URL('DeleteRoom/'.$home->id) }}" class="btn btn-danger">Delete</a>
        </td>
      </tr>

      @endforeach
      
    </tbody>
  </table>
  
</div>
  <a href="{{URL('addRoomForm') }}" class="btn btn-info">Add New Room</a>
  
  
  
</div>

  @stop
  
  
  
  
  

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  


