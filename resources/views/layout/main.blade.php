<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kopi Kenangan Senja</title>
    <link rel="shortcut icon" href="{{ url('assets/img/favicon-coffee.png') }}" type="image/x-icon">

    {{-- FONTS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
        rel="stylesheet">

    {{-- Icons --}}
    <script src="https://unpkg.com/feather-icons"></script>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
</head>

<body>
    {{-- Navbar Start --}}
    <x-navbar />
    {{-- Navbar End --}}

    {{-- Hero section --}}
    <div>
        @yield('home')
        {{-- @yield('dashboard') --}}
        @include('dashboard.about')
        @include('dashboard.menu')
        @include('dashboard.kontak')
    </div>

    {{-- Footer Start --}}
    <x-footer />
    {{-- Footer End --}}

    {{-- feather icons --}}
    <script>
        feather.replace();
    </script>
    <script src="{{ url('assets/js/script.js') }}"></script>


</body>

</html>
