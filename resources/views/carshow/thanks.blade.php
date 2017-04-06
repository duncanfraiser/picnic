@extends('_includes.layout')
@section('content')  
<div class="container">
  <div class="col-md-8 col-md-offset-2">
    <img width="100%" src="{{url('img/carshow.jpg')}}">
   <h3>Thank You, {{$carshow->first_name}}.<br/><br/> You have successfully registered your {{$carshow->make}} {{$carshow->model}} in the Auto, Motorcycle & Tractor Show at Mirror Lake.</h3><br/>
	<div class="col-md-8 col-md-offset-2" style="margin-top: 1em">
	 <center><a href="{{url('/')}}"><BUTTON class="ybfbtn">Home</BUTTON></a></center>
    </div>
  </div>
</div>
@endsection