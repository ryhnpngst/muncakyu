<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <link rel="shortcut icon" href="{{url('frontend/images/logo_gunung.png')}}" type="image/x-icon">

        @include('includes.style')
        @stack('peralatan-style')
        @stack('persiapan-style')
        @stack('destinasi-style')
        @stack('detail-style')
        @stack('prepen-style')
        @stack('addon-style')

    </head>
    <body>
        @yield('navbar')
        @yield('content')
        @include('includes.footer')

        @stack('prepen-script')
        @include('includes.script')
        @stack('addon-script')
        @stack('peralatan-script')
        @stack('persiapan-script')
    </body>
</html>