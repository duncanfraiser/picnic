@extends('_includes.layout')
@section('content')  
<div class="container">
  <div class="col-md-8 col-md-offset-2" style="margin-bottom: 5em">
    <img width="100%" src="{{url('img/picnic.jpg')}}">
    <center><h1>Thank You {{$attend->first_name}} for registering for the Ergon Company Picnic at Mirror Lake Plaza.</h1></center>
	<div class="col-md-8 col-md-offset-2">
	 <center><a href="{{url('/')}}"><BUTTON class="rwfbtn">Home</BUTTON></a></center>
    </div>
  </div>
</div>
@endsection