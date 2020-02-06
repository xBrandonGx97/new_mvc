<!doctype html>
<html lang="{{$_SESSION['Settings']['SITE_LANG']}}">
    <head>
        @include('inc.head')
    </head>
    <body>
        @yield('content')
        @include('inc.footer')
    </body>
</html>
