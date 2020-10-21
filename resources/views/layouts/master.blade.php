<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title', 'Home Page')</title>
        <!-- CSS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/CustomStyles.css">
        <!-- jQuery and JS bundle w/ Popper.js -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="app">
            <!-- Set the navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
                <a class="navbar-brand" href="#"> <img src="/images/diamanthia_logo.png" width="auto" height="60px" alt="diamanthia_logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <!-- Home -->
                        <li class="nav-item {{ Route::is('home.index') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('home.index') }}">Home </a>
                        </li>
                        <li class="nav-item {{ Route::is('catalog.list') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('catalog.list') }}">Catalog </a>
                        </li>
                        <li class="nav-item {{ Route::is('info.us') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('home.index') }}">About Us</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Show the content of the views -->
            <main class="content">
                @yield('content')
            </main>

            <!-- Show the footer --> 
            <footer class="page-footer bg-light">
                <span>&nbsp;&copy; Diamanthia Jewelry Store 2020 </span>
            </footer>
        </div>
    </body>
</html>
