<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kopi Kengan Senja</title>

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
    <nav class="navbar">
        <a href="#" class="navbar-logo">keangan<span>senja</span>.</a>
        <div class="navbar-nav">
            <a href="#">Home</a>
            <a href="#about">Tentang Kami</a>
            <a href="#menu">Menu</a>
            <a href="#contact">Kontak</a>
        </div>

        <div class="navbar-extra">
            <a href="#" id="search"><i data-feather="search"></i></a>
            <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    {{-- Navbar End --}}

    {{-- feather icons --}}
    <script>
        feather.replace();
    </script>
</body>

</html>
