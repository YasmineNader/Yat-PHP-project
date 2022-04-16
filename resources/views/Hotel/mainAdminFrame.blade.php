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


<body>



  
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class='row'  style="width:100%">
    <div class="col-lg-3">
<img src="{{URL::asset('images/header/royal.png') }}" alt="crown" id="logo"> <span id="logohead">Royal Hotel</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</div>
<div class="col-lg-6">

</div>
<div class="col-lg-3">
  <div class="collapse navbar-collapse adminlogin" id="navbarSupportedContent" >
    
    <ul class="navbar-nav mr-auto">
     
    </li>
    <li class="nav-item">
      <span class="nav-link"> {{ Auth::guard('admin')->user()->name }} </span>
    </li>

      <li class="nav-item">
        <a class="nav-link " href='{{ URL('logout')}}' >logout</a>
      
     
    </ul>
   
  </div>
</div>
</div>
</nav>





<div class="container-fluid" style="min-height:70vh">
  <div class=row>
<div class='col-lg-2'>
<ul class="list-group" style="margin-top: 100px;">
  <a href="{{ URL('ShowAll') }}"class="list-group-item sidebar">Home</a>
  <a href="{{ URL('show_allDescription') }}"class="list-group-item sidebar">Description</a>
  <a href="{{ URL('ShowRooms') }}"class="list-group-item sidebar">Rooms</a>
  <a href="{{ URL('ShowMessage') }}" class="list-group-item sidebar">Contact</a>
  <a href="{{ URL('ShowAllInformation') }}"class="list-group-item sidebar">Hotel Information</a>
  <a href="{{ URL('showAllRegistraions') }}"class="list-group-item sidebar">Registration</a>
 
 
</ul>

</div>

<div class='col-lg-10'>
@yield('content')

</div>
</div>

</div>

<footer id="footer" class="footerend" >
  <div class="container-fluid">


<div id='focopy' >
    All Rights Reserved © Royal Hotel 2020
</div>


</div>
</div>
</footer>

<script src="{{URL::asset('js/js/bootstrap.min.js')}}"></script>
</body>
</html>