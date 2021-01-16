<?php use App\App; ?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" type="image/png" href="img/mini.svg" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title><?= App::getTitle(); ?></title>
</head>

<body>
    <!--Navigation Bar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="d-flex flex-grow-1">
            <span class="w-100 d-lg-none d-block">
                <!-- hidden spacer to center brand on mobile --></span>
            <a class="navbar-brand d-none d-lg-inline-block" href="http://localhost/saadblog/public/">
                <img src="img/logo_nav_brand.svg" width="200px" height="auto" alt="">
            </a>
            <a class="navbar-brand-two mx-auto d-lg-none d-inline-block" href="http://localhost/saadb/public/">
                <img src="img/mini.svg" width="30px" height="auto" alt="">
            </a>
            <div class="w-100 text-right">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
        <div class="collapse navbar-collapse flex-grow-1 text-right " id="myNavbar">
            <ul class="navbar-nav ml-auto flex-nowrap">
                <li class="nav-item">
                    <a href="http://localhost/saadbouh/public/" class="nav-link m-2 menu-item nav-active">Accueil</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link m-2 menu-item">FORUM</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link m-2 menu-item">À PROPOS</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link m-2 menu-item">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--Page Content-->
    <div class="container">
        <?= $content; ?>
    </div>

    <!--Script js-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>