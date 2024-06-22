<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- swiper, slider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!--  -->
    <link rel="stylesheet" href="css/style.css?<?= rand() ?>">
    <script src="js/script.js" defer></script>
    <title>Matsuri</title>
</head>

<body>
    <div class="menu space_bottom">
        <nav class="nav_bar space2">
            <div class="logo_container">
                <a href="index.php">
                    <img src="image/logo.png" alt="logo Matsuri">
                    <p>Matsuri</p>
                </a>
            </div>

            <ul class="menu_nav space" id="menu_nav">
                <li class="btn_nav"><a href="index.php">Accueil</a></li>
                <li class="btn_nav"><a href="service.php">Services</a></li>
                <li class="btn_nav"><a href="galerie.php">Galerie</a></li>
                <li class="btn_nav"><a href="index.php#about">A propos</a></li>
                <li class="btn_nav"><a href="contact.php">Contact</a></li>
            </ul>

            <div class="menu_hamburger" id="hamburger">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </nav>
    </div>