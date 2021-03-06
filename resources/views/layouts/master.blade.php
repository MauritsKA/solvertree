<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{url('images/favicon.ico')}}" sizes="32x32" />

    <title>{{ config('app.name', 'Solvertree') }}</title>
    <meta name="description" content="Making global problems insightful">
    <meta name="author" content="Maurits Korthals Altes">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css')}}?{{rand(1,100)}}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    @yield('css')
</head>

<body>

 @yield('content')
    
 @include('layouts.footer')