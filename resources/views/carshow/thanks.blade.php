@extends('_includes.layout')
@section('content')  
<div class="container">
  <div class="col-md-8 col-md-offset-2">
    <img width="100%" src="{{url('img/carshow.jpg')}}">
    <center><h1>Thank You {{$carshow->first_name}} for registering your {{$carshow->make}} {{$carshow->model}} for the classic car & truck show at Mirror Lake Plaza.</h1></center>
	<div class="col-md-8 col-md-offset-2" style="margin-top: 1em">
	 <center><a href="{{url('/')}}"><BUTTON class="rwfbtn">Home</BUTTON></a></center>
    </div>
  </div>
</div>
@endsection