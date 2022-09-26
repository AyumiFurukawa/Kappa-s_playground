<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>kappa's Playground</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
        <link href="{{ asset('/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/dist/css/app.css') }}" rel="stylesheet" type="text/css">
        @yield('css')

        <script src="js/jquery.min.js"></script>
        <script src="js/templatemo-script.js"></script>
        @yield('js')

    </head>

    <body>
        <header class="tm-header" id="tm-header">
            <div class="tm-header-wrapper">
                <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="tm-site-header">
                    <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-regular fa-laptop"></i></div>
                    <h1 class="text-center">Kappa's Playground</h1>
                </div>
                <nav class="tm-nav" id="tm-nav">
                    <ul>
                        <li class="tm-nav-item"><a href="index.html" class="tm-nav-link">
                            <i class="fas fa-home"></i>
                            Blog Home
                        </a></li>
                        <li class="tm-nav-item"><a href="contact.html" class="tm-nav-link">
                            <i class="fas fa-book fa-solid "></i>
                            Index
                        </a></li>
                        <li class="tm-nav-item"><a href="post.html" class="tm-nav-link">
                            <i class="fas fa-pen"></i>
                            Single Post
                        </a></li>
                        <li class="tm-nav-item active"><a href="about.html" class="tm-nav-link">
                            <i class="fas fa-users"></i>
                            About Me
                        </a></li>
                    </ul>
                </nav>
                <div class="tm-mb-65">
                    <a href="https://facebook.com" class="tm-social-link">
                        <i class="fab fa-github tm-social-icon"></i>
                    </a>
                    <a href="https://twitter.com" class="tm-social-link">
                        <i class="fab fa-twitter tm-social-icon"></i>
                    </a>
                    <a href="https://instagram.com" class="tm-social-link">
                        <i class="fab fa-instagram tm-social-icon"></i>
                    </a>
                </div>
            </div>
        </header>

        @yield('content')


    </body>
</html>
