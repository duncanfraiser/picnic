@extends('_includes.layout')
@section('content')  
<div class="container">
  <div class="col-md-8 col-md-offset-2" style="margin-bottom: 5em">
    <img width="100%" src="{{url('img/picnic.jpg')}}">
   <h3>Thank You, {{$attend->first_name}}.<br/><br/>You have successfully registered for the Jackson/Vicksburg Ergon Family Picnic at Mirror Lake.</h3><br/>
	<div class="col-md-8 col-md-offset-2">
	 <center><a href="{{url('/')}}"><BUTTON class="ybfbtn">Home</BUTTON></a></center>
    </div>
  </div>
</div>
@endsection