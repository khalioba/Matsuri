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

            <ul class="menu_nav" id="menu_nav">
                <a href="profil.php">
                    <div class="photo_profil_name_title">
                        <div class="photo_profil">
                            <img src="image/Aigle_Ny.jpg" alt="">
                        </div>
                        <div class="profil_name_title">
                            <div class="profil_name">
                                <p>Francis-ny Itoua</p>
                            </div>
                            <div class="profil_title">
                                <p>Administrateur</p>
                            </div>
                        </div>
                    </div>
                </a>

                <div class="rect_menu_lien">
                    <div class="rect_menu_lien_each">
                        <li class="btn_nav"><a href="index.php"><img src="image/home.svg" alt="">Accueil</a></li>
                    </div>
                    <div class="rect_menu_lien_each">
                        <li class="btn_nav"><a href="entreprise.php"><img src="image/home.svg" alt="">Entreprise</a>
                        </li>
                    </div>
                    <div class="rect_menu_lien_each">
                        <li class="btn_nav"><a href="forum.php"><img src="image/home.svg" alt="">Forum</a></li>
                    </div>
                    <div class="rect_menu_lien_each">
                        <li class="btn_nav"><a href="galerie.php"><img src="image/home.svg" alt="">Galerie</a></li>
                    </div>
                </div>

            </ul>

            <div class="menu_hamburger" id="hamburger">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </nav>
    </div>

    <script>
    hamburger.onclick = () => {
        hamburger.classList.toggle("open");
        menu_nav.classList.toggle("menu_nav")
    }
    </script>

    <script>
    // Fonction pour obtenir la page actuelle
    function getCurrentPage() {
        const path = window.location.pathname;
        const page = path.split("/").pop();
        return page.split(".")[0];
    }

    // Fonction pour définir la classe active
    function setActiveNav() {
        const currentPage = getCurrentPage();
        const navLinks = document.querySelectorAll('nav ul li a');
        const navIcons = document.querySelectorAll('nav ul li img');

        navLinks.forEach(link => {
            const linkPage = link.getAttribute('href').split(".")[0];
            if (linkPage === currentPage) {
                link.classList.add('active');
                // Ajouter la classe 'actived' à l'image associée
                const icon = link.previousElementSibling; // Sélectionner l'image associée
                if (icon && icon.tagName === 'IMG') {
                    icon.classList.add('actived');
                }
            } else {
                link.classList.remove('active');
                const icon = link.previousElementSibling;
                if (icon && icon.tagName === 'IMG') {
                    icon.classList.remove('actived');
                }
            }
        });
    }

    // Appelez la fonction pour définir la classe active lors du chargement de la page
    window.onload = setActiveNav;
    </script>