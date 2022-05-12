<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin-assets/img/apple-icon.png')}}">
        <link rel="icon" type="image/png" href="{{asset('admin-assets/img/favicon.png')}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <!-- Nucleo Icons -->
        <link href="{{asset('admin-assets/css/nucleo-icons.css')}}" rel="stylesheet" />
        <link href="{{asset('admin-assets/css/nucleo-svg.css')}}" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link href="{{asset('admin-assets/css/nucleo-svg.css')}}" rel="stylesheet" />
        <!-- CSS Files -->
        <link id="pagestyle" href="{{asset('admin-assets/css/argon-dashboard.css?v=2.0.2')}}" rel="stylesheet" />
    </head>

<body class="g-sidenav-show   bg-gray-100">
         <div class="min-height-300 bg-primary position-absolute w-100"></div>
            @include('includes.admin.left-sidebar')

             <main class="main-content position-relative border-radius-lg ">
                {{ $slot }}
            </main>

            @include('includes.admin.right-sidebar')
            @include('includes.admin.footer-scripts')

</body>
</html>
