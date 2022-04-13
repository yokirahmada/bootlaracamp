<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

@stack('addon-style')
@include('components.style')
@stack('prepend-style')



    <title>@yield('title')</title>
</head>

<body>



    @yield('content')

    
    @stack('addon-script')
    @include('components.script')
    @stack('prepend-script')

</body>

</html>