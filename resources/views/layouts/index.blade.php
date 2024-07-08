<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>laravel</title>
  <link href="https:://fonts.googleapis.com/css?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ URL::asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::asset('dist/css/adminlte.min.css') }}">
</head>

  <body class="hold-transition sidebar-mini">
<div class="wrapper">
</div>
@include('layouts.header')
@include('layouts.sidebar')
@yield('content')
@include('layouts.footer')
</body>
</html>