@extends('_includes.layout')
@section('content')  
<div class="container">
<div class="col-md-12">
  <div class="col-md-8 col-md-offset-2">
    <img width="100%" src="{{url('img/picnic.jpg')}}">
    <center><h1>Picnic Registration</h1></center>
	<div class="col-md-10 col-md-offset-1" style="margin-bottom: 3em">
 	  <h3>Employee's Information</h3>
      <p class="form-control">{{$attend->first_name}}</p>
      <p class="form-control">{{$attend->last_name}}</p>
      <p class="form-control">{{$attend->company}}</p>
      <h3>Spouse/Guest's Information</h3>
      <p class="form-control">{{$attend->guest_first_name}}</p>
      <p class="form-control">{{$attend->guest_last_name}}</p>
      <h3>Children's Information</h3>
   	  <div class="form-group col-md-12" style="padding: 0; margin-bottom: 3em">
	    <div class="col-md-8" style="padding: 0 5px 0 0">
	      <p class="form-control">{{$attend->child_name}}</p>
	    </div>
	    <div class="col-md-4" style="padding: 0">
	      <p class="form-control">{{$attend->child_age}}</p>
	    </div>

   	  @foreach($attend->kids as $kid)
	    <div class="col-md-8" style="padding: 0 5px 0 0">
	      <p class="form-control">{{$kid->name}}</p>
	    </div>
	    <div class="col-md-4" style="padding: 0">
	      <p class="form-control">{{$kid->age}}</p>
	    </div>
	         @endforeach
     


      
      {{Form::open(['action' => 'KidController@store'])}}
       {{ Form::hidden('attend_id', $attend->id) }}

	      @if($errors->has('name'))	

	        
	        
	        <div class="col-md-8" style="padding: 0 5px 0 0">
	        {{Form::label('name', "Please Enter Child's Name", ['class' => 'errs'])}}<br/>
	        {{Form::text('name', null, ['class' => 'redform-control', 'placeholder' => "Child's Name"])}} 
	        </div>
	      <div class="col-md-4" style="padding: 20px 5px 0 0">      
	        {{Form::text('age', null, ['class' => 'form-control', 'placeholder' => "Child's Age"])}}
	      </div>	        
	      


	      @else
	        <div class="col-md-8" style="padding: 0 5px 0 0">
	          {{Form::text('name', null, ['class' => 'form-control', 'placeholder' => "Child's Name"])}} 
	        </div>
	      <div class="col-md-4" style="padding: 0 5px 0 0">      
	        {{Form::text('age', null, ['class' => 'form-control', 'placeholder' => "Child's Age"])}}
	      </div>	   


	      @endif
{{-- 
        <div class="form-group col-md-12" style="padding: 0">
	      <div class="col-md-8" style="padding: 0 5px 0 0">
	        {{Form::text('name', null, ['class' => 'form-control', 'placeholder' => "Child's Name"])}} 
	      </div>
	      <div class="col-md-4" style="padding: 0">
	        {{Form::text('age', null, ['class' => 'form-control', 'placeholder' => "Child's Age"])}}
	      </div>
        </div> --}}





 </div>
        <div class="form-group" style="float: right">
        <input class='wrfbtn' type='submit' name = 'submit' value = 'Add Additional Child'>
          {{Form::submit('Submit', ['class' => 'wrfbtn'])}}
        </div>
      {{Form::close()}}
{{--       <a style="float: right" href="{{'/'}}"><BUTTON class="wrfbtn">Cancel</BUTTON></a> --}}













    </div>
  </div>
 </div>
</div>
@endsection