@extends('_includes.layout')
@section('content')  
<div class="container">
  <div class="col-md-8 col-md-offset-2">
    <img width="100%" src="{{url('img/carshow.jpg')}}">


    <h3>Thank You, {{$carguest->first_name}}.<br/><br/> You have successfully registered your {{$carguest->make}} {{$carguest->model}} in the Auto, Motorcycle & Tractor Show at Mirror Lake.</h3><br/>


  </div>
</div>
@endsection