@extends('_includes.layout')
@section('content')  
<div class="container">
<div class="col-md-12">
  <div class="col-md-8 col-md-offset-2">
    <img width="100%" src="{{url('img/carshow.jpg')}}">
    <center><h1>Car Show Guest Registration</h1></center>
	  <div class="col-md-10 col-md-offset-1" style="margin-bottom: 3em">
	    {{Form::open(['action' => 'CarguestController@store'])}}
	      <h3>Entrant's Information</h3>
	      <div class="form-group">
   	      @if($errors->has('first_name'))	
	          {{Form::label('first_name', "Please Enter First Name", ['class' => 'errs'])}}<br/>
	          {{Form::text('first_name', null, ['class' => 'redform-control', 'placeholder' => "First Name"])}} 
	        @else
	          {{Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => "First Name"])}} 
	        @endif
   	      @if($errors->has('last_name'))	
	          {{Form::label('last_name', "Please Enter Last Name", ['class' => 'errs'])}}<br/>
	          {{Form::text('last_name', null, ['class' => 'redform-control', 'placeholder' => "Last Name"])}} 
	        @else
	          {{Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => "Last Name"])}}
	        @endif
          @if($errors->has('email'))  
            {{Form::label('email', "Please Enter Email Address", ['class' => 'errs'])}}<br/>
            {{Form::text('email', null, ['class' => 'redform-control', 'placeholder' => "Email"])}} 
          @else
            {{Form::text('email', null, ['class' => 'form-control', 'placeholder' => "Email"])}}
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
          @if($errors->has('year')) 
          {{Form::label('make', "Please Enter Vehicle Make", ['class' => 'errs'])}}<br/>
          {{Form::text('make', null, ['class' => 'redform-control', 'placeholder' => "Vehicle Make"])}} 
        @else
      {{Form::text('make', null, ['class' => 'form-control', 'placeholder' => "Vehicle Make"])}}
        @endif
          @if($errors->has('year')) 
          {{Form::label('model', "Please Enter Vehicle Model", ['class' => 'errs'])}}<br/>
          {{Form::text('model', null, ['class' => 'redform-control', 'placeholder' => "Vehicle Model"])}} 
        @else
      {{Form::text('model', null, ['class' => 'form-control', 'placeholder' => "Vehicle Model"])}}
        @endif        
      </div>
      <div class="form-group" style="float: right; margin-top: 5em">
        {{Form::submit('Submit', ['value'=>'bar', 'class' => 'ybfbtn'])}}
      </div>
      {{Form::close()}}
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