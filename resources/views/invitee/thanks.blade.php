@extends('_includes.layout')
@section('content')  
<div class="container">
  <div class="col-md-8 col-md-offset-2">
    <img width="100%" src="{{url('img/carshow.jpg')}}">
   <center><h3>Thank You,<br/><br/>Your Car Show invite has been emailed to: {{$invitee->invitee_email}}</h3></center>
	<div class="col-md-10 col-md-offset-1" style="margin-top: 1em">
	 <center><a href="{{url('/')}}"><BUTTON class="ybfbtn">Home</BUTTON></a></center>
    </div>
  </div>
</div>
@endsection