<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? '' }}</title>
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" id="tabIcon">
    @include('partials.style')
    @stack('styles')
</head>
<body>

    @yield('content')

    @include('partials.script')
    @stack('scripts')
</body>
</html>
