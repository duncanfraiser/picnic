@extends('_includes.layout')
@section('content')  

<div class="container col-md-4 col-md-offset-4">
<h1>Picnic Stats</h1>
<table>
  <tr>
    <th>Adults</th>
    <th style="width: 100px">Total</th>
  </tr>
  <tr>
    <td>Employees</td>
    <td>{{$attend}}</td>
  </tr>
<tr>
    <td>Employee's Guest</td>
    <td>{{$guest}}</td>
  </tr>
    <tr style="border-top-style: solid; border-color: #000">
    <td>Total Adults</td>
    <td>{{$attendTotal}}</td>
  </tr>
  
</table>





<table style="margin-top: 2em" >
  <tr>
  	<th>Kids</th>
  	<th style="width: 100px">Total</th>
  </tr>  
      <td>Kids ages 6 and under</td>
    <td>{{$younger}}</td>
  </tr>
  <tr>
    <td>Kids ages 7 and up</td>
    <td>{{$older}}</td>
  </tr>
    <tr style="border-top-style: solid; border-color: #000">
    <td>Total Kids</td>
    <td>{{$kidTotal}}</td>
  </tr>
</table>


<table style="margin-top: 2em" >
  <tr>
  	<th>Total People Attending</th>
  	<th style="width: 100px">Total</th>
  </tr>  
  <tr style="border-top-style: solid; border-color: #000">
    <td>Total</td>
    <td>{{$total}}</td>
  </tr>
</table>



<div class="col-md-12"  style="margin: 2em 0 0 0; padding: 0">
<div class="col-xs-8 col-sm-8 col-md-8" style="padding: 0">
<h1>Car Show Stats</h1>
</div>
<div class="col-xs-4 col-sm-4 col-md-4" style="padding: 0"> 
<a href="{{url('/stats/vehicles')}}"><button class="ybfbtn" style="float: right; margin: 25px 0 10px 0; padding: 0em .5em;
">More Info</button></a>
</div>
</div>





<table>
  <tr>
  	<th>Vehicles</th>
  	<th style="width: 100px">Total</th>
  </tr>  
  <tr>
    <td>Employee Vehicles</td>
    <td>{{$carshow}}</td>
  </tr>
  <tr>
    <td>Guest Vehicles</td>
    <td>{{$carguest}}</td>
  </tr>
  <tr style="border-top-style: solid; border-color: #000">
    <td>Total Vehicles</td>
    <td>{{$carTotal}}</td>
  </tr>
</table>







</div>
@endsection