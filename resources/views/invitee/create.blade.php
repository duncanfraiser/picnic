@extends('_includes.layout')
@section('content')  
<div class="container">
  <div class="col-md-8 col-md-offset-2">
    <img width="100%" src="{{url('img/carshow.jpg')}}">
    <center><h1>Car Show Invite</h1></center>
	<div class="col-md-8 col-md-offset-2" style="margin-bottom: 3em">
	  {{Form::open(['action' => 'InviteeController@store'])}}
	    <div class="form-group">

   	      @if($errors->has('invitee_email'))	
	        {{Form::label('invitee_email', "Please Enter Invitee Email Address", ['class' => 'errs'])}}<br/>
	        {{Form::text('invitee_email', null, ['class' => 'redform-control', 'placeholder' => "Please Enter Invitee Email Address"])}} 
	      @else
	        {{Form::text('invitee_email', null, ['class' => 'form-control', 'placeholder' => "Please Enter Invitee Email Address"])}}
	      @endif
	      @if($errors->has('employee_email'))	
	        {{Form::label('employee_email', "Please Enter Employee Email Address", ['class' => 'errs'])}}<br/>
	        {{Form::text('employee_email', null, ['class' => 'redform-control', 'placeholder' => "Please Enter Employee Email Address"])}} 
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