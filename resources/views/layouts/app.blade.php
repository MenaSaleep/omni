<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="layout/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="{{ asset('public/dashbord-style/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('public/dashbord-style/css/mine.css') }}"/>
</head>
<body>


  @if (Auth::user())
        <!----------------------------------------------------------------------------------------------------------->
        <!--------------------------------------- CUSTEM NAVBAR HTML ------------------------------------------------>
        <!----------------------------------------------------------------------------------------------------------->
  
      <div class="navgition">
        <span class="lnr lnr-menu"></span>
      </div>
  
      <div class="menu-nav">
        <span class="lnr lnr-cross"></span>
        <ul>
          <h4><br />
  </h4>
          <p> Management </p>
          <li> <a href="http://localhost/app/profile"> I AM </a></li>
          <li> <a href="http://localhost/app/"> Omnii </a></li>
          <li> <a href="http://localhost/app/edit.indexpage/1"> Edit Home Page </a></li>
        </ul>
      </div>
      <!----------------------------------------------------------------------------------------------------------->
      <!--------------------------------------- CUSTEM NAVBAR HTML ------------------------------------------------>
      <!----------------------------------------------------------------------------------------------------------->


@endif

@yield('content')


    
<script src="{{ asset('public/dashbord-style/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('public/dashbord-style/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/dashbord-style/js/Script.js') }}"></script>
</body>
</html>
