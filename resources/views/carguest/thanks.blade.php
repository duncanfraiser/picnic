@extends('_includes.layout')
@section('content')  
<div class="container">
  <div class="col-md-8 col-md-offset-2">
    <img width="100%" src="{{url('img/carshow.jpg')}}">
    <center><h1>Thank You {{$carguest->first_name}} for registering your {{$carguest->make}} {{$carguest->model}} for the classic car & truck show at Mirror Lake Plaza.</h1></center>
  </div>
</div>
@endsection