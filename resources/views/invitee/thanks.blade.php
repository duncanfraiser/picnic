@extends('_includes.layout')
@section('content')  
<div class="container">
  <div class="col-md-8 col-md-offset-2">
    <img width="100%" src="{{url('img/carshow.jpg')}}">
   <h3>Thank You, {{$invitee->employee_name}}.<br/><br/>An invite will be emailed to {{$invitee->invitee_name}} at {{$invitee->invitee_email}}.</h3>
	<div class="col-md-10 col-md-offset-1" style="margin-top: 1em">
	 <center><a href="{{url('/')}}"><BUTTON class="ybfbtn">Home</BUTTON></a></div></center>
    </div>
  </div>
</div>
@endsection