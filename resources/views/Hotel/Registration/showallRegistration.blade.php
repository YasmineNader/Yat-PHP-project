@extends('Hotel.mainAdminFrame')

@section('title','Show Registration')

@section('content')




  <div class='container'>
    
  <h2>All Registrations</h2>
  @if(Session::has('success'))
  
  <div class="alert alert-success" role="alert">
{{ Session::get('success') }}
  </div>
  @endif
  
  <div class='scrolltable'>

  <table class="table table-striped table-hover " >
    <thead>
      <tr>

        <th scope="col">Name </th>
        <th class='registrtable' scope="col">Password</th>       
        <th scope="col">Room Type</th>
        <th scope="col">Email</th>
        <th scope="col">Guests</th>
        <th scope="col">CheckIn</th>
        <th scope="col">CheckOut</th>
      
       
      </tr>
    </thead>
    <tbody>
      @foreach($allRegisters as $value)
        
    
      <tr>
      
        
        <td>{{ $value->name }}</td>
        <td class='registrtable'>{{ $value->password }}</td>
        <td>{{ $value->RoomType }}</td>
        <td>{{ $value->email }}</td>
        <td>{{ $value->numberofguests }}</td>
        <td>{{ $value->checkin }}</td>
        <td>{{ $value->checkout }}</td>
        
        
        <td class='backendtables'>
          <a href="{{URL('RegistraionsDetails/'.$value->id) }}" class="btn btn-info">Read</a>
        </td>
        <td class='backendtables'>
          <a href="{{URL('deleteRegistraions/'.$value->id) }}" class="btn btn-danger">Delete</a>
        </td>
      </tr>

      @endforeach
      
    </tbody>
  </table>
  
  </div>
  <!--<a href="{{-- URL('addRegistraionForm') --}}" class="btn btn-info">Add New Registartion</a>-->
  
  
  
</div>

  @stop
  
  
  
  
  

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  


