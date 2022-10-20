<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- External CSS libraries -->
        <link type="text/css" rel="stylesheet" href="{{asset('client-assets/css/bootstrap.min.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('client-assets/css/magnific-popup.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('client-assets/css/jquery.selectBox.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('client-assets/css/dropzone.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('client-assets/css/rangeslider.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('client-assets/css/animate.min.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('client-assets/css/leaflet.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('client-assets/css/slick.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('client-assets/css/slick-theme.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('client-assets/css/map.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('client-assets/css/jquery.mCustomScrollbar.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('client-assets/fonts/font-awesome/css/font-awesome.min.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('client-assets/fonts/flaticon/font/flaticon.css')}}">

        <!-- Favicon icon -->
        <link rel="shortcut icon" href="{{asset('img/settings/'.config('app.logo'))}}" type="image/x-icon" >

        <!-- Google fonts -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

        <!-- Custom Stylesheet -->
        <link type="text/css" rel="stylesheet" href="{{asset('client-assets/css/style.css')}}">
        <link type="text/css" rel="stylesheet"  id="style_sheet" href="{{asset('client-assets/css/skins/default.css')}}">

    </head>
    <body id="top" class="index-body">
        {{$slot}}
        @include('includes.client.scripts')
    </body>
</html>
