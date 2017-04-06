<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p>Hello, {{$invitee->invitee_name}},<br/><br/>

{{$invitee->employee_name}} has inivited you to enter Ergon’s Auto, Motorcycle & Tractor Show to be held on Saturday, May 20, 2017. Setup begins at 9 a.m.  Registration closes on Friday, May 5, 2017.  <a href="{{url('carshow_guest/create')}}">Click here to register.</a></p>


</body>
</html>

