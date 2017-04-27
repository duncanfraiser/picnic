@extends('_includes.layout')
@section('content')  

<div class="container col-md-6" style="padding: 5em 2.5em 5em 8em">
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





<table style="margin-top: 5em" >
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


<table style="margin-top: 5em" >
  <tr>
  	<th>Total Peeps Attending</th>
  	<th style="width: 100px">Total</th>
  </tr>  
  <tr style="border-top-style: solid; border-color: #000">
    <td>Total</td>
    <td>{{$total}}</td>
  </tr>
</table>
</div>


<div class="container col-md-6" style="padding: 5em 8em 5em 2.5em">
<h1>Car Show Stats</h1>

<table>
  <tr>
  	<th>Employee's Rides</th>
  	<th style="width: 100px">Total</th>
  </tr>  
  <tr style="border-top-style: solid; border-color: #000">
    <td>Employee</td>
    <td>{{$carshow}}</td>
  </tr>
</table>

<table style="margin-top: 5em">
  <tr>
  	<th>Guest's Rides</th>
  	<th style="width: 100px">Total</th>
  </tr>  
  <tr style="border-top-style: solid; border-color: #000">
    <td>Guest</td>
    <td>{{$carguest}}</td>
  </tr>
</table>

<table style="margin-top: 5em">
  <tr>
  	<th>Total's Rides</th>
  	<th style="width: 100px">Total</th>
  </tr>  
  <tr style="border-top-style: solid; border-color: #000">
    <td>All Rides</td>
    <td>{{$carTotal}}</td>
  </tr>
</table>

</div>

</div>
@endsection