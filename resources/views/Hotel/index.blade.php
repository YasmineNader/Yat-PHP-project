@extends('Hotel.main_frame')

@section('title','Home')

@section('content')





<!--carousel-->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

 {{--  <ol class="carousel-indicators">
    @foreach($homes as $key => $home)
  <li data-target="#carouselExampleCaptions" class="{{($key==0)?"active":"" }}" data-slide-to="{{ $key }} "></li>
  @endforeach
}}
  {{--   <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="6"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="7"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="8"></li>
    
  </ol> 
  --}}

  <ol class="carousel-indicators">

    
     @for($i=0;$i<$homes->count();$i++)

   
    <li data-target="#carouselExampleCaptions" data-slide-to="{{ $i }}" class="{{($i==0)?"active":"" }}"></li>

    
    @endfor
  </ol>
  {{--@foreach($homes as $key => $home)
  <li data-target="#carouselExampleCaptions" class="{{($key==0)?"active":"" }}" data-slide-to="{{ $key }} "></li>
  @endforeach
  --}}


  {{-- </ol> --}}
  <div class="carousel-inner">
    @foreach($homes as $key => $home)
      
    
    <div class="carousel-item {{ ($key==0)?"active":"" }}">

   @if($home['text']=='Rooms')
      <a href="{{ URL('rooms')}}">
        <img src="{{ URL::asset('UploadImages/Home/'.$home['photo'])}}" class="d-block w-100" alt="HotelPhotos">
      </a>
  
    @else 
    <img src="{{ URL::asset('UploadImages/Home/'.$home['photo'])}}" class="d-block w-100" alt="HotelPhotos">
      @endif 
    <div class="carousel-caption d-none d-md-block">
        <h5>{{ $home['text'] }}</h5>
        <p>{{ $home['click'] }}</p>
      </div>
    </div>
    
    @endforeach
    
  
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--about us-->
<div class="container about">
<h1 id="abouttitle">{{$details['title']}}</h1>
<p id="aboutpra">{{$details['description']}}</p>
</div>


@stop