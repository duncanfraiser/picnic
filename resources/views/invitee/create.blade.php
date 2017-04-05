@extends('_includes.layout')
@section('content')  
<div class="container">
  <div class="col-md-8 col-md-offset-2">
    <img width="100%" src="{{url('img/carshow.jpg')}}">
    <center><h1>Classic Car Show Invite </h1></center>
    {{-- <center><h1 style="color:red">Registration Opens April 12, 2017</h1></center> --}}
    	 <br/><center><a href="{{url('/')}}"><BUTTON class="ybfbtn">Home</BUTTON></a></center>
	<div class="col-md-8 col-md-offset-2" style="margin-bottom: 3em">
    <p><center><strong>Ergon's Classic Car, Truck, Motorcycle & Tractor Show<br/> Saturday, May 20, 2017<br/>9 – 11 a.m.<br/><br/>Setup begins at 9 a.m. and winners will be announced at 11 a.m.</strong></center></p></div>
	  {{Form::open(['action' => 'InviteeController@store'])}}
	    <div class="form-group">

   	      @if($errors->has('invitee_email'))	
	        {{Form::label('invitee_email', "Please Enter Invitee Email Address", ['class' => 'errs'])}}<br/>
	        {{Form::text('invitee_email', null, ['class' => 'redform-control', 'placeholder' => "Please Enter Invitee Email Address"])}} 
	      @else
	        {{Form::label('invitee_email', "Invitee Email Address")}}<br/>
	        {{Form::text('invitee_email', null, ['class' => 'form-control', 'placeholder' => "Please Enter Invitee Email Address"])}}
	      @endif
	      @if($errors->has('employee_email'))	
	        {{Form::label('employee_email', "Please Enter Employee Email Address", ['class' => 'errs'])}}<br/>
	        {{Form::text('employee_email', null, ['class' => 'redform-control', 'placeholder' => "Please Enter Employee Email Address"])}} 
	      @else
	        {{Form::label('employee_email', "Employee Email Address")}}<br/>
	        {{Form::text('employee_email', null, ['class' => 'form-control', 'placeholder' => "Please Enter Employee Email Address"])}} 
	      @endif
	    </div>
        <div class="form-group" style="float: right">
          {{Form::submit('Submit', ['class' => 'ybfbtn'])}}
        </div>
      {{Form::close()}}
      {{-- <a style="float: right" href="{{'/'}}"><BUTTON class="ybfbtn">Cancel</BUTTON></a> --}}
    </div>
  </div>
</div>
@endsection