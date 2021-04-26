<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}
    <style>
        .active{
            color: white;
            background: rgb(68, 68, 68);
            padding: 2px;
        }
    </style>
</head>
<body>

    {{-- header  --}}
    {{-- Nav --}}
    @include('layouts.partials.header')
    @yield('content')
    @include('layouts.partials.footer')

</body>
</html>