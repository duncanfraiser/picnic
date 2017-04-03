@extends('_includes.layout')
@section('content')  
<div class="container">
<div class="col-md-12">
  <div class="col-md-8 col-md-offset-2">
    <img width="100%" src="{{url('img/picnic.jpg')}}">
    <center><h1>Picnic Registration</h1></center>
	<div class="col-md-8 col-md-offset-2" style="margin-bottom: 3em">
	{{Form::model($attend, ['method' => 'PATCH', 'action' => ['AttendController@update', $attend->id]])}}
	  <h3>Employee's Information</h3>
	    <div class="form-group">
   	      @if($errors->has('first_name'))	
	        {{Form::label('first_name', "Please Enter Employee's First Name", ['class' => 'errs'])}}<br/>
	        {{Form::text('first_name', null, ['class' => 'redform-control', 'placeholder' => "Employee's First Name"])}} 
	      @else
	        {{Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => "Employee's First Name"])}} 
	      @endif
   	      @if($errors->has('last_name'))	
	        {{Form::label('last_name', "Please Enter Employee's Last Name", ['class' => 'errs'])}}<br/>
	        {{Form::text('last_name', null, ['class' => 'redform-control', 'placeholder' => "Employee's Last Name"])}} 
	      @else
	        {{Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => "Employee's Last Name"])}}
	      @endif
          @if($errors->has('company'))	
   	        {{Form::label('company', "Please Select Company", ['class' => 'errs'])}}<br/> 
	        {{Form::select('company', $companies, null, ['placeholder' => 'Please Select Company', 'class' => 'redform-control'])}}
	      @else
	        {{Form::select('company', $companies, null, ['placeholder' => 'Please Select Company', 'class' => 'form-control'])}}
	      @endif
	    </div>
    	<h3>Spouse/Guest's Information</h3>
	    <div class="form-group">
	      {{Form::text('guest_first_name', null, ['class' => 'form-control', 'placeholder' => "First Name"])}} 
	      {{Form::text('guest_last_name', null, ['class' => 'form-control', 'placeholder' => "Last Name"])}}
        </div>
	    <h3>Children's Information</h3>
	    <div class="form-group col-md-12" style="padding: 0">
	      <div class="col-md-8" style="padding: 0 5px 0 0">
	        {{Form::text('child_name', null, ['class' => 'form-control', 'placeholder' => "Child's Name"])}} 
	      </div>
	      <div class="col-md-4" style="padding: 0">
	        {{Form::text('child_age', null, ['class' => 'form-control', 'placeholder' => "Child's Age"])}}
	      </div>
        </div>
        <div class="form-group" style="float: right">
          {{Form::submit('Submit', ['class' => 'wrfbtn'])}}
        </div>
      {{Form::close()}}
      <a style="float: right" href="{{'/'}}"><BUTTON class="wrfbtn">Cancel</BUTTON></a>
    </div>
  </div>
 </div>
</div>
@endsection