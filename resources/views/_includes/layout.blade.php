<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{url('/img/logo.png')}}">
        <title>Ergon Picnic</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    
        <script src="{{ asset('/js/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ asset('/js/bootstrap.js') }}"></script>

    </head>
    <body>

      @yield('content')

{{--         <div class="col-md 12" style="float: right; margin-right: 1em; margin-top: 3em">
          <p>Copyright © 2017 Ergon, Inc. All Rights Reserved.</p>
        </div> --}}
    </body>
</html>