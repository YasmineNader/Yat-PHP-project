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
<img src="{{URL::asset('images/header/royal.png') }}" alt="crown" id="logo"> <span id="logohead">Royal Hotel</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link1 " href="{{ URL('/') }}" >Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link1 " href="{{ URL('rooms') }}" >Rooms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link1 " href="{{ URL('contact') }}" >Contact Us</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link1 " href="{{ URL('Registration') }}" >Registration</a>
      </li>
            
    </ul>
   
  </div>
</nav>






<script src="{{URL::asset('js/js/bootstrap.min.js')}}"></script>

@yield('content')


<footer id="footer">
<div class="container-fluid">
<div class="row fo">

<div class="col-lg-9" id='focopy'>
    All Rights Reserved © Royal Hotel 2020
</div>
<div class="col-lg-3" id="contact-icons">

    <p>Don't Forget To Follow Us</p>
    <div id="foicon">
    <a href="https://www.facebook.com/" target="_balnk"><img src="{{URL::asset('images/footer/fb.png')}}" alt="facebook-icon" ></a>
    <a href="https://www.youtube.com/"  target="_balnk"><img src="{{URL::asset('images/footer/yt.png')}}" alt="youtube-icon" ></a>
    <a href="https://www.instagram.com/"  target="_balnk"><img src="{{URL::asset('images/footer/insta.png')}}" alt="instagram-icon" ></a>
    <a href="https://www.twitter.com/"  target="_balnk"><img src="{{URL::asset('images/footer/tw.png')}}" alt="twitter-icon"></a>
    </div>
   
</div>
</div>
</div>
</footer>
</body>
</html>