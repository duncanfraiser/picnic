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
              <div class="col-md-12 mobile">
                <div class="col-md-10 col-md-offset-1 mobile" style="margin-bottom: 2em">
{{--                     <img width= '100%' src="{{url('img/ergonpicnic2017.png')}}"> --}}
                  <picture>
                    <source media="(max-width: 770px)" srcset="{{url('img/ErgonPicnic2017mobile.png')}}" width="100%">
                    <img src="{{url('img/ErgonPicnic2017.png')}}"  width="100%">
                  </picture>
                </div>                
              </div>
              
              <div class="col-md-12">
                <div class="col-md-10 col-md-offset-1">




                  <div class="col-md-4">
                   <a href="{{url('attend/create')}}"><button style="margin-bottom: 1em" class="ybbtn">Picnic Registration</button></a>
                  </div>
                  <div class="col-md-4">
                       <a href="{{url('carshow/create')}}"><button style="margin-bottom: 1em" class="ybbtn">Car Show Registration</button></a>           
                  </div>
                  <div class="col-md-4">
                       <a href="{{url('invitee/create')}}"><button style="margin-bottom: 1em" class="ybbtn">Invite a Friend to Car Show</button></a>           
                  </div>
                





                </div>    
              </div>
            </div>
   
@endsection
