<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="url" content="{{ url('/') }}">

    <title>WEBEXIT</title>

    <!-- Styles -->
    
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animations.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}">
    <script src="{{ asset('assets/js/vendor/modernizr-2.6.2.min.js') }}"></script>

    <!--[if lt IE 9]>
        <script src="{{ asset('assets/js/vendor/html5shiv.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/respond.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <![endif]-->
    
</head>
<body>

	 <div id="app">

        @yield('content')

    </div>


</body>
</html>