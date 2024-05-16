<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title') 
    </title>
</head>
<body>
    {{-- Partial --}}
    @include('layouts._partials.menu')

    {{-- Here is where the content of the template is ubicated  --}}
    @yield('content')
</body>
</html>
