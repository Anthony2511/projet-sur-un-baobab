<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Baobab - Projets</title>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/css/styles.css';?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="site-container">
            <div class="site-pusher">
                <header class="topbar--other">
                    <div class="topbar__lang">
                        <a href="#" class="topbar__lang__detail topbar__lang__detail--active">Français</a>
                        <a href="#" class="topbar__lang__detail">Espagnol</a>
                        <a href="#" class="topbar__lang__detail">Anglais</a>
                    </div>
                    <a href="#" class="topbar__icon" id="topbar__icon"></a>
                    <nav class="topbar__nav">
                        <h1 aria-level="1">Navigation principale</h1>
                        <ul class="topbar__nav__list">
                            <a href="index.php" class="topbar__nav__list__link">
                                <div class="topbar__nav__list__link__container">
                                    <li class="topbar__nav__list__link__container__detail">Accueil</li>
                                    <img src="img/iconHome.png" class="topbar__nav__list__link__container__icon" alt="Icon Home" width="179" height="166"/>
                                </div>
                            </a>
                            <a href="projets.php" class="topbar__nav__list__link topbar__nav__list__link--active">
                                <div class="topbar__nav__list__link__container">
                                    <li class="topbar__nav__list__link__container__detail">Projets</li>
                                    <img src="img/iconProjets.png" class="topbar__nav__list__link__container__icon" alt="Icon Projets" width="166" height="156"/>
                                </div>
                            </a>
                            <a href="actualités.php" class="topbar__nav__list__link">
                                <div class="topbar__nav__list__link__container">
                                    <li class="topbar__nav__list__link__container__detail">Actualités</li>
                                    <img src="img/iconActu.png" class="topbar__nav__list__link__container__icon" alt="Icon Actualités" width="167" height="167"/>
                                </div>
                            </a>
                            <a href="index.php" class="topbar__nav__list__logo">
                                <img class="topbar__nav__list__logo__image" src="img/Logo.svg" alt="Logo" width="945" height="958"/>
                            </a>
                            <a href="ateliers.php" class="topbar__nav__list__link">
                                <div class="topbar__nav__list__link__container">
                                    <li class="topbar__nav__list__link__container__detail">Ateliers</li>
                                    <img src="img/iconAteliers.png" class="topbar__nav__list__link__container__icon" alt="Icon Ateliers" width="167" height="167"/>
                                </div>
                            </a>
                            <a href="propos.php" class="topbar__nav__list__link">
                                <div class="topbar__nav__list__link__container">
                                    <li class="topbar__nav__list__link__container__detail">A propos</li>
                                    <img src="img/iconApropos.png" class="topbar__nav__list__link__container__icon" alt="Icon A propos" width="167" height="167"/>
                                </div>
                            </a>
                            <a href="contact.php" class="topbar__nav__list__link">
                                <div class="topbar__nav__list__link__container">
                                    <li class="topbar__nav__list__link__container__detail">Contact</li>
                                    <img src="img/iconContact.png" class="topbar__nav__list__link__container__icon" alt="Icon Contact" width="167" height="167" />
                                </div>
                            </a>
                        </ul>
                    </nav>
                </header>
                <div class="site-content">
                    <div class="site-content__container">
                    </div>
                </div>
                <div class="site-cache" id="site-cache">
                </div>
            </div>
        </div>
        <main class="container">
            <div class="fil-ariane">
                <p class="fil-ariane__chemin">
                    <a href="index.php" class="fil-ariane__link">Accueil</a> >
                    <a href="projets.php" class="fil-ariane__link">Projets</a>
                </p>
            </div>
            <div class="projets">
                <h2 aria-level="2" class="projets__title">Courts-métrages</h2>
                <div class="projets__films">
                    <a href="movie.php" class="projets__movie">
                        <div class=" projets__movie__container">
                            <img src="img/actu1.jpg" alt="Court-métrage 1" class="projets__movie__image" width="300" height="169"/>
                            <div class="projets__movie__content">
                                <h3 aria-level="3" class="projets__movie__title">Safidn'i Pela</h3>
                                <a href="movie.php" class="projets__movie__link">Voir le projet</a>
                            </div>
                            <div class="projets__movie__opacity"></div>
                        </div>
                    </a>
                    <a href="movie.php" class="projets__movie">
                        <div class="projets__movie__container">
                            <img src="img/tongasoa.jpg" alt="Court-métrage 2" class="projets__movie__image" width="300" height="169" />
                            <div class="projets__movie__content">
                                <h3 aria-level="3" class="projets__movie__title">Tongasoa et le vazaha</h3>
                                <a href="movie.php" class="projets__movie__link">Voir le projet</a>
                            </div>
                            <div class="projets__movie__opacity"></div>
                        </div>
                    </a>
                </div>
            </div>
            <?php

            get_footer();
