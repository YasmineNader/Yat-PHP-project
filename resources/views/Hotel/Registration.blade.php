<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="icon" href="{{URL::asset('images/home/crown.png') }}" type="image/gif" size="50x50">
    <link rel="stylesheet" href="{{URL::asset('css/css/bootstrap-glyphicons.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/css/bootstrap.min.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    <script src="{{URL::asset('js/jquery-3.5.1.min.js')}}"></script> 

    <title>@yield("title")</title>
</head>




<body id="body_bg" style="background-image:url('{{ URL::asset('images/Registraion/registration.jpg') }}')" >


  <!--form-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 ">
  
  </div>
  <div class="col-lg-4 formargin">
  <h2 id="login-title">Registration Form</h2>
  
  @if(Session::has('success'))

  <div class="alert alert-success" role="alert">
{{ Session::get('success') }}
  </div>
  @endif

  <form  id="loginform" method="post" action="{{URL('RegistrationData')  }}">
    @csrf
    <div class="form-group">
      <label for="Yourname" class="formcolor">Your Name :</label>
      <input type="text" class="form-control" id="Yourname" placeholder="Please Enter Your Name" name="name" >
      @error('name')
    <span class="text-danger">{{ $message }}</span>
     @enderror
    </div>
    <div class="form-group">
      <label for="Yourpass" class="formcolor">Password :</label>
      <input type="password" class="form-control" id="Yourpass" placeholder="Enter Your password" name="password">
      @error('password')
    <span class="text-danger">{{ $message }}</span>
     @enderror
    </div>
    <div class="form-group">
      <label for="roomtype" class="formcolor">Select Room Type :</label>
      <select class="form-control" id="roomtype" name="roomtype" >
        @foreach($Types as $type)
        <option>{{ $type['RoomType'] }}</option>
     @endforeach
      </select>
      @error('roomtype')
    <span class="text-danger">{{ $message }}</span>
     @enderror
    </div>
    <div class="form-group">
      <label for="email" class="formcolor" >E-Mail :</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Your Email" name="email">
      @error('email')
      <span class="text-danger">{{ $message }}</span>
       @enderror
    </div>
    <div class="form-group">
      <label for="peopleNum" class="formcolor">Number Of Guests :</label>
      <input type="number" class="form-control" id="peopleNum" name="numberOfGuests">
      @error('numberOfGuests')
    <span class="text-danger">{{ $message }}</span>
     @enderror
    </div>
    
  
    <div class="form-group dates">
    <p class="formcolor">Check In :</p>
    <input placeholder="yyyy-mm-dd" type="date" id="user" class="form-control" name="checkin">
    @error('checkin')
    <span class="text-danger">{{ $message }}</span>
     @enderror
  </div>
  
  <div class=" form-group dates">
    <p class="formcolor">Check Out :</p>
    <input placeholder="yyyy-mm-dd" type="date" id="user1" class="form-control "name="checkout">
    @error('checkout')
    <span class="text-danger">{{ $message }}</span>
     @enderror
  </div>
  
    <button type="submit" class="btn  btnform" >Register</button>
    <button type="reset" class="btn   btnform" >Reset</button>
  </form>
  
  
  <div id="btnbackreg " >
  <button id='Rigsterbtn' class = "btn btn-dark btn-lg "><a href="{{ URL('/') }}">Back To Home</a></button>
  </div>
  </div>
  </div>
  
  <div class="col-lg-4  ">
  </div>
  </div>
  
</body>

</html>