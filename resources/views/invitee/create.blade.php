@extends('_includes.layout')
@section('content')  
<div class="container">
  <div class="col-md-8 col-md-offset-2">
    <img width="100%" src="{{url('img/carshow.jpg')}}">
    <center><h1>Auto Show Invite </h1></center>
    {{-- <center><h1 style="color:red">Registration Opens April 12, 2017</h1></center> --}}
    	 {{-- <br/><center><a href="{{url('/')}}"><BUTTON class="ybfbtn">Home</BUTTON></a></center> --}}
     <div class="col-md-8 col-md-offset-2">
    <p><center><strong>Cars, Trucks, Motorcycles & Tractors Welcome<br/> Saturday, May 20, 2017<br/>9 – 11 a.m.<br/><br/>Setup begins at 9 a.m.<br/>Voting closes at 11 a.m. <br/>WINNERS will be announced at 1 p.m.</strong></center></p></div>
	<div class="col-md-8 col-md-offset-2" style="margin-bottom: 3em">
	  {{Form::open(['action' => 'InviteeController@store'])}}
	    <h3>Invitee's Information</h3>
	    <div class="form-group">
   	      @if($errors->has('invitee_name'))	
	        {{Form::label('invitee_name', "Please Enter Invitee Full Name", ['class' => 'errs'])}}<br/>
	        {{Form::text('invitee_name', null, ['class' => 'redform-control', 'placeholder' => "Please Enter Invitee Full Name"])}} 
	      @else
	        {{Form::text('invitee_name', null, ['class' => 'form-control', 'placeholder' => "Please Enter Invitee Full Name"])}}
	      @endif
   	      @if($errors->has('invitee_email'))	
	        {{Form::label('invitee_email', "Please Enter Invitee Email Address", ['class' => 'errs'])}}<br/>
	        {{Form::email('invitee_email', null, ['class' => 'redform-control', 'placeholder' => "Please Enter Invitee Email Address"])}} 
	      @else
	        {{Form::text('invitee_email', null, ['class' => 'form-control', 'placeholder' => "Please Enter Invitee Email Address"])}}
	      @endif
	      <h3>Employee's Information</h3>
	      @if($errors->has('employee_name'))	
	        {{Form::label('employee_name', "Please Enter Employee Full Name", ['class' => 'errs'])}}<br/>
	        {{Form::text('employee_name', null, ['class' => 'redform-control', 'placeholder' => "Please Enter Employee Full Name"])}} 
	      @else
	        {{Form::text('employee_name', null, ['class' => 'form-control', 'placeholder' => "Please Enter Employee Full Name"])}} 
	      @endif
	      @if($errors->has('employee_email'))	
	        {{Form::label('employee_email', "Please Enter Employee Email Address", ['class' => 'errs'])}}<br/>
	        {{Form::email('employee_email', null, ['class' => 'redform-control', 'placeholder' => "Please Enter Employee Email Address"])}} 
	      @else
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