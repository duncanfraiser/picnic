@extends('_includes.layout')
@section('content')  
<div class="container">
  <div class="col-md-8 col-md-offset-2">
    <img width="100%" src="{{url('img/carshow.jpg')}}">
    <center><h1>Auto Show Registration</h1></center>

    {{-- <center><h1 style="color:red">Registration Opens April 12, 2017</h1></center> --}}
     {{-- <br/><center><a href="{{url('/')}}"><BUTTON class="ybfbtn">Home</BUTTON></a></center> --}}
     <div class="col-md-8 col-md-offset-2">
    <p><center><strong>Cars, Trucks, Motorcycles & Tractors Welcome<br/> Saturday, May 20, 2017<br/>Setup begins at 9 a.m.<br/>Voting closes at 12 p.m. <br/>WINNERS will be announced at 1 p.m.</strong></center></p></div>
	<div class="col-md-8 col-md-offset-2" style="margin-bottom: 3em">

	 {{Form::open(['action' => 'CarshowController@store'])}}
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
	      {{Form::email('email', null, ['class' => 'form-control', 'placeholder' => "Employee's Email Address"])}}
        </div>
	  <h3>Vehicle Information</h3>
	    <div class="form-group">
	      @if($errors->has('type'))	
   	        {{Form::label('type', "Please Select Vehicle Type", ['class' => 'errs'])}}<br/> 
	        {{Form::select('type', $types, null, ['placeholder' => 'Please Select Vehicle Type', 'class' => 'redform-control'])}}
	      @else
	        {{Form::select('type', $types, null, ['class' => 'form-control', 'placeholder' => 'Please Select Vehicle Type'])}}
	      @endif
   	      @if($errors->has('year'))	
	        {{Form::label('year', "Please Enter Vehicle Year", ['class' => 'errs'])}}<br/>
	        {{Form::text('year', null, ['class' => 'redform-control', 'placeholder' => "Vehicle Year"])}} 
	      @else
	        {{Form::text('year', null, ['class' => 'form-control', 'placeholder' => "Vehicle Year"])}}
	      @endif
   	      @if($errors->has('make'))	
	        {{Form::label('make', "Please Enter Vehicle Make", ['class' => 'errs'])}}<br/>
	        {{Form::text('make', null, ['class' => 'redform-control', 'placeholder' => "Vehicle Make"])}} 
	      @else
	    {{Form::text('make', null, ['class' => 'form-control', 'placeholder' => "Vehicle Make"])}}
	      @endif
   	      @if($errors->has('model'))	
	        {{Form::label('model', "Please Enter Vehicle Model", ['class' => 'errs'])}}<br/>
	        {{Form::text('model', null, ['class' => 'redform-control', 'placeholder' => "Vehicle Model"])}} 
	      @else
	    {{Form::text('model', null, ['class' => 'form-control', 'placeholder' => "Vehicle Model"])}}
	      @endif	
	    @if($errors->has('engine'))	
	        {{Form::label('engine', "Please Enter Vehicle Engine Type", ['class' => 'errs'])}}<br/>
	        {{Form::text('engine', null, ['class' => 'redform-control', 'placeholder' => "Vehicle Engine Type"])}} 
	      @else
	    {{Form::text('engine', null, ['class' => 'form-control', 'placeholder' => "Vehicle Engine Type"])}}
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