@extends('_includes.layout')
@section('content')  
<div class="container">
  <div class="col-md-8 col-md-offset-2">
    <img width="100%" src="{{url('img/carshow.jpg')}}">
    <center><h1>Thank You, your carshow invite has been emiled to: {{$invitee->invitee_email}}</h1></center>
	<div class="col-md-8 col-md-offset-2" style="margin-top: 1em">
	 <center><a href="{{url('/')}}"><BUTTON class="ybfbtn">Home</BUTTON></a></center>
    </div>
  </div>
</div>
@endsection