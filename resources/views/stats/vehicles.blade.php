@extends('_includes.layout')
@section('content')  
<div class="container col-md-12">
<h1>Car Show Stats</h1>


<h3>Employees</h3>
<table style="table-layout: fixed;">
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Type</th>
    <th>Year</th>
    <th>Make</th>
    <th>Model</th>
    <th>Engine</th>
  </tr>
  @foreach($carshows as $carshow)
    <tr>
      <td>{{$carshow->first_name}} {{$carshow->last_name}}</td>
      <td>{{$carshow->email}}</td>
      <td>{{$carshow->type}}</td>
      <td>{{$carshow->year}}</td>
      <td>{{$carshow->make}}</td>
      <td>{{$carshow->model}}</td>
      <td>{{$carshow->engine}}</td>
    </tr>
  @endforeach
</table>

<h3>Guests</h3>
<table style="table-layout: fixed;"">
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Type</th>
    <th>Year</th>
    <th>Make</th>
    <th>Model</th>
    <th>Engine</th>
  </tr>
  @foreach($carguests as $carguest)
    <tr>
      <td>{{$carguest->first_name}} {{$carguest->last_name}}</td>
      <td>{{$carguest->email}}</td>
      <td>{{$carguest->type}}</td>
      <td>{{$carguest->year}}</td>
      <td>{{$carguest->make}}</td>
      <td>{{$carguest->model}}</td>
      <td>{{$carguest->engine}}</td>
    </tr>
  @endforeach
</table>







@endsection