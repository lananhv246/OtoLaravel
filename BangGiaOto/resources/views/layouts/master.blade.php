<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-3.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/min/dropzone.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Scripts -->
     {{--  <script type="text/javascript" src="http://code.jquery.com/jquery-2.2.4.min.js"></script>   --}}
      <script src="{{ asset('js/jquery.min.js') }}"></script>  
    <script src="{{ asset('js/ajax.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/dropzone.min.js') }}"></script>
</head>
<body>
    <div id="master">
        @yield('content')
    </div>
</body>
</html>
