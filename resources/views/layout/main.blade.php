<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC Comics | @yield('title')</title>
    @yield('cdns')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    {{-- Header --}}
    @include('includes.header')
    {{-- Main content --}}
    <main>
        <div></div>
        @yield('content')
    </main>

    {{-- Scripts --}}
    @yield('scripts')
    <script src="{{asset('js/app.js')}}"></script>
    
</body>
</html>