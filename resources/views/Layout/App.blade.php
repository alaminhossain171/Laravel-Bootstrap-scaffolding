<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    @include('Layout.Header')

@yield('content')
@include('Layout.Footer')
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>