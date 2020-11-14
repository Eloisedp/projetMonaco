<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="Les Hydroalcooliques" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Les Hydroalcooliques</title>
    <link rel="stylesheet" href="css/nav_bar.css" />

    <link href="css/app.css" rel="stylesheet">
    @yield('css')

</head>

<body>

    <header>


        <nav class="nav-bar">
            <div class="logo">
                <a href="/"> <img  class="logo" src="/img/Capture.png" alt="logo"> </a>
            </div>
            <div class="links">
                <a href="/">ACCUEIL</a>
                <a href="/products">PRODUITS</a>
            </div>
        </nav>
    </header>

    @yield('content')

    <footer class="footer">
        <div class="logo">
            <img class="logo" src="/img/Capture.png" alt="logo">
        </div>

        <div class="links">
            <a href="#">Nous contacter</a>
        </div>

        <div class="social">
            <a href="/"> <img src="/img/facebook.png" alt="facebook"> </a>
            <a href="/"> <img src="/img/linked.png" alt="linkedin"> </a>
        </div>

    </footer>

</body>

</html>
