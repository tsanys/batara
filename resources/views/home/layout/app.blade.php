<!DOCTYPE html>
<html lang="en">

<head>

    @include('home.partials.head')

    <title>@yield('title')</title>
</head>

<body>
    @if (Request::is('/'))
        @include('home.partials.header')
    @else
        @include('home.partials.header-alt')
    @endif

    @yield('content')

    @include('home.partials.footer')
</body>

</html>
