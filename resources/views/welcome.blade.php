@extends('_includes.layout')
@section('content')  

{{--             @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Admin</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif --}}
            <div class="content">
              <div class="col-md-12">
                <div class="col-md-8 col-md-offset-2">
                    <img width= '100%' src="{{url('img/copy.png')}}">
                    
                </div>                
              </div>
              
              <div class="col-md-12">
                <div class="col-md-8 col-md-offset-2">
                  <div class="col-md-6">
                    <img width= '100%' src="{{url('img/car.png')}}">
                    <a  href="{{url('carshow/create')}}"><button style="margin-bottom: 1em" class="rwbtn">Car & Truck Show Registration</button></a>            
                  </div>
                  <div class="col-md-6">
                    <img width= '100%' src="{{url('img/picniccopy.png')}}"><a href="{{url('attend/create')}}"><button class="rwbtn">Picnic Registration</button></a>                 
                  </div>
                </div>    
              </div>
            </div>
   
@endsection
