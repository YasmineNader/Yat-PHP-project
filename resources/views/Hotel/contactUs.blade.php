@extends('Hotel.main_frame')

@section('title','ContactUs')

@section('content')

<img src="{{URL::asset('images/ContactUsImage/contact.jpg')  }}" alt="contact image" class="upimg">

<!--<h2 id="pagehead">Contact Us</h2>-->


<!--contact information-->
<div class="container">
    <div class="row margforms">

<div class="col-lg-6">

<h3>Contact Information</h3>


<table id="contacttable">
    <tr>
<td>
<span class="glyphicon glyphicon-map-marker"> Address: </span>
</td>
<td>
  {{ $infoDetails->address }}
</td>
</tr>
<tr>
<td>
<span class="glyphicon glyphicon-send"> E-Mail:</span> 
</td>
<td>
  {{ $infoDetails->email }}</td>
</tr>
<tr>
<td>
<span class="glyphicon glyphicon-globe"> website:</span> 
</td>
<td>
<a href="{{ URL('/') }}">{{ $infoDetails->website }}</a>
</td>
</tr>
<tr>
<td>

<span class="glyphicon glyphicon-earphone"> Phone:</span> 
</td>
<td>
  {{ $infoDetails->phone }}</td>
</tr>

</table>
</div>
<div class="col-lg-6">
<h3>Contact Form</h3>



  

 
  


@if(Session::has('success'))

  <div class="alert alert-success" role="alert">
{{ Session::get('success') }}
  </div>
  @endif
<!--contact form-->
<form method="post" action="{{ URL('contactUsData') }}">

  @csrf
  <div class="form-group">
    <label for="Name">Name : </label>
    <input type="text" class="form-control" id="Name" placeholder="Enter Your Name" name="name">
    @error('name')
    <span class="text-danger">{{ $message }}</span>
     @enderror
    </div>

  <div class="form-group">
    <label for="mail">Email : </label>
    <input type="email" class="form-control" id="mail" placeholder="Your Email" name="email">
    @error('email')
    <span class="text-danger">{{ $message }}</span>
     @enderror
    </div>
 
  <div class="form-group">
    <label for="subject">Subject : </label>
    <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject" >
    @error('subject')
    <span class="text-danger">{{ $message }}</span>
     @enderror
  
  </div>
  <div class="form-group">
    <label for="message">Message : </label> 
    
  <textarea type="text" class="form-control" id="message" placeholder="Please Write Your Message Here" name="message"></textarea>
  @error('message')
  <span class="text-danger">{{ $message }}</span>
     @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>


  
</form>

</div>


</div>

</div>

<!--map-->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110502.60389552709!2d31.188423585500136!3d30.059618470287788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583fa60b21beeb%3A0x79dfb296e8423bba!2sCairo%2C%20Cairo%20Governorate!5e0!3m2!1sen!2seg!4v1605316741097!5m2!1sen!2seg" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>



@stop