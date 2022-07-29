<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.admin.head')
    </head>

<body class="g-sidenav-show   bg-gray-100">
         <div class="min-height-300 bg-primary position-absolute w-100"></div>
            @include('includes.admin.left-sidebar')

             <main class="main-content position-relative border-radius-lg ">
                {{ $slot }}
            </main>

            @include('includes.admin.scripts')

</body>
</html>
