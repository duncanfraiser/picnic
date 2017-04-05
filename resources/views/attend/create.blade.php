@extends('_includes.layout')
@section('content')  
<div class="container">
<div class="col-md-12">
  <div class="col-md-8 col-md-offset-2">
    <img width="100%" src="{{url('img/picnic.jpg')}}">
    <center><h1>Picnic Registration</h1></center>
     <br/><center><a href="{{url('/')}}"><BUTTON class="ybfbtn">Home</BUTTON></a></center>
	  <div class="col-md-10 col-md-offset-1" style="margin-bottom: 3em">
	    {{Form::open(['action' => 'AttendController@store'])}}
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
     	<div class="form-group input_fields_wrap">
    	  <h3>Children's Information </h3>
  			<input class="form-control" placeholder="Child&#39;s Name" type="text" name="kidNames[]"/>
				<input class="form-control" placeholder="Child&#39;s Age" type="text" name="kidAges[]"/>
		    <i class="fa fa-plus-circle fa-2x add_field_button" aria-hidden="true"></i>
			</div>
      <div class="form-group" style="float: right; margin-top: 1em">
        {{Form::submit('Submit', ['class' => 'ybfbtn'])}}
      </div>
      {{Form::close()}}
     {{--  <a style="float: right" href="{{'/'}}"><BUTTON class="ybfbtn">Cancel</BUTTON></a> --}}
    </div>
  </div>
</div>
</div>
@endsection
@section('scripts')  
<script>
$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append(
            '<div style="padding-top:15px"><input class="form-control" placeholder="Child&#39;s Name" type="text" name="kidNames[]"/><input class="form-control" placeholder="Child&#39;s Age" type="text"  name="kidAges[]"/><a href="#" class="remove_field"><i class="fa fa-minus-circle fa-2x" aria-hidden="true"></i></a><div>'
            ); //add input box

        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>
@endsection