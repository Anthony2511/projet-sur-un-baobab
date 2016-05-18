<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Baobab - Accueil</title>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/css/styles.css';?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="site-container">
            <div class="site-pusher">
                <header class="topbar">
                    <div class="topbar__lang">
                        <a href="#" class="topbar__lang__detail topbar__lang__detail--active">Français</a>
                        <a href="#" class="topbar__lang__detail">Espagnol</a>
                        <a href="#" class="topbar__lang__detail">Anglais</a>
                    </div>
                    <a href="#" class="topbar__icon" id="topbar__icon"></a>
                    <nav class="topbar__nav">
                        <h1 aria-level="1">Navigation principale</h1>
                        <ul class="topbar__nav__list">
                            <a href="<?php echo get_home_url(); ?>" class="topbar__nav__list__link topbar__nav__list__link--active">
                                <div class="topbar__nav__list__link__container">
                                    <li class="topbar__nav__list__link__container__detail">Accueil</li>
                                    <img src="img/iconHome.png" class="topbar__nav__list__link__container__icon" alt="Icon Home" width="179" height="166"/>
                                </div>
                            </a>
                            <a href="projets.php" class="topbar__nav__list__link">
                                <div class="topbar__nav__list__link__container">
                                    <li class="topbar__nav__list__link__container__detail">Projets</li>
                                    <img src="img/iconProjets.png" class="topbar__nav__list__link__container__icon" alt="Icon Projets" width="166" height="156"/>
                                </div>
                            </a>
                            <a href="actualités.php" class="topbar__nav__list__link">
                                <div class="topbar__nav__list__link__container">
                                    <li class="topbar__nav__list__link__container__detail">Actualités</li>
                                    <img src="../img/iconActu.png" class="topbar__nav__list__link__container__icon" alt="Icon Actualités" width="167" height="167"/>
                                </div>
                            </a>
                            <a href="index.php" class="topbar__nav__list__logo">
                                <img class="topbar__nav__list__logo__image" src="../img/Logo.svg" alt="Logo" width="945" height="958"/>
                            </a>
                            <a href="ateliers.php" class="topbar__nav__list__link">
                                <div class="topbar__nav__list__link__container">
                                    <li class="topbar__nav__list__link__container__detail">Ateliers</li>
                                    <img src="../img/iconAteliers.png" class="topbar__nav__list__link__container__icon" alt="Icon Ateliers" width="167" height="167"/>
                                </div>
                            </a>
                            <a href="propos.php" class="topbar__nav__list__link">
                                <div class="topbar__nav__list__link__container">
                                    <li class="topbar__nav__list__link__container__detail">A propos</li>
                                    <img src="../img/iconApropos.png" class="topbar__nav__list__link__container__icon" alt="Icon A propos" width="167" height="167"/>
                                </div>
                            </a>
                            <a href="contact.php" class="topbar__nav__list__link">
                                <div class="topbar__nav__list__link__container">
                                    <li class="topbar__nav__list__link__container__detail">Contact</li>
                                    <img src="../img/iconContact.png" class="topbar__nav__list__link__container__icon" alt="Icon Contact" width="167" height="167" />
                                </div>
                            </a>
                        </ul>
                    </nav>
                        <div class="topbar__intro">
                            <p class="topbar__intro__text">
                                Nous voyageons sac au dos en proposant des ateliers de cinéma d’animation pour enfants, adolescents et/ou adultes.
                            </p>
                            <a href="don.php" class="topbar__intro__link">
                                <span class="topbar__intro__link__button">Soutenez-nous</span>
                            </a>
                        </div>
                        <div class="topbar__scroll">
                    </div>
                </header>
                <div class="site-content">
                    <div class="site-content__container">
                    </div>
                </div>
                <div class="site-cache" id="site-cache">
                </div>
            </div>
        </div>
        <main>
            <div class="head">
                <div class="head__actu">
                    <h2 aria-level="2" class="head__actu__title">Dernières réalisations</h2>
                    <div class="head__actu__blog">
                        <div class="head__actu__blog__zone">
                            <a href="movie.php" class="head__actu__blog__zone__link">
                                <div class="head__actu__blog__zone__link__container">
                                    <img src="../img/actu1.jpg" class="head__actu__blog__zone__link__container__image" alt="Dernier court métrage" width="300" height="169"/>
                                    <p class="head__actu__blog__zone__link__container__text">
                                        Dernier court-métrage
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="head__actu__blog__zone">
                            <a href="pictures.php" class="head__actu__blog__zone__link">
                                <div class="head__actu__blog__zone__link__container">
                                    <img src="../img/actu2.jpg" class="head__actu__blog__zone__link__container__image" alt="Dernière photo" width="1500" height="1000" />
                                    <p class="head__actu__blog__zone__link__container__text">
                                        Dernière photo
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="head__actu__projet">
                        <div class="head__actu__projet__container">
                            <h2 aria-level="2" class="head__actu__projet__container__title">Notre projet</h2>
                            <p class="head__actu__projet__container__text">
                                Nous voyageons en proposant un atelier itinérant de cinéma d’animation
                                qui s’inscrit dans le soutien d’une cause sociale. Pour cela, nous
                                accompagnons un groupe de jeunes enfants, adolescents et/ou adultes
                                pendant plusieurs semaines dans la réalisation collective d’un
                                cout-métrage d’animation à partir d’un thème, d’un conte ou
                                d’une histoire, choisie ou écrite ensemble.
                            </p>
                            <a href="propos.php" class="head__actu__projet__container__link">
                                <span class="head__actu__projet__container__link__button">En savoir plus</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="head__arrow">
                </div>
            </div>
            <div class="partenaires">
                <h2 class="partenaires__title">Nos partenaires</h2>
                <div class="partenaires__logo">
                    <img src="../img/logoIrea.png" class="partenaires__logo__sponsor"alt="Logo Ireast" width="1162" height="1127"/>
                    <img src="../img/logoSncf.png" class="partenaires__logo__sponsor"alt="Logo SNCF" width="2356" height="1248"/>
                    <img src="../img/logoHeine.png" class="partenaires__logo__sponsor"alt="Logo Heine" width="1000" height="853"/>
                    <img src="../img/logoWilson.png" class="partenaires__logo__sponsor"alt="Logo Wilson" width="2272" height="1704"/>
                </div>
            </div>
        </main>
        <footer class="footer">
            <div class="footer__opacity">
                <div class="footer__section-one">
                    <div class="footer__section-one__contact">
                        <h2 aria-level="2" class="footer__section-one__title">Nous contacter</h2>
                        <p class="footer__section-one__numero">
                            WhatsApp : +32495348966
                        </p>
                        <p class="footer__section-one__numero">
                            Téléphone : +32495348966
                        </p>
                    </div>
                    <div class="footer__section-one__contact">
                        <h2 aria-level="2" class="footer__section-one__title">Dernières nouvelles</h2>
                        <a href="article.php" class="footer__section-one__nouvelles">
                            Sur un baobab, un an déja !
                        </a>
                        <a href="article.php" class="footer__section-one__nouvelles">
                            Projection de Safidn’i Pela
                        </a>
                        <a href="article.php" class="footer__section-one__nouvelles">
                            Sur un baobab, un an déja !
                        </a>
                    </div>
                    <div class="footer__section-one__contact">
                        <h2 aria-level="2" class="footer__section-one__title">Navigation</h2>
                        <ul class="footer__section-one__list">
                            <li class="footer__section-one__detail"><a href="index.php" class="footer__section-one__link">Accueil</a></li>
                            <li class="footer__section-one__detail"><a href="projets.php" class="footer__section-one__link">Projets</a></li>
                            <li class="footer__section-one__detail"><a href="actualités.php" class="footer__section-one__link">Actualités</a></li>
                            <li class="footer__section-one__detail"><a href="ateliers.php" class="footer__section-one__link">Ateliers</a></li>
                            <li class="footer__section-one__detail"><a href="propos.php" class="footer__section-one__link">A Propos</a></li>
                            <li class="footer__section-one__detail"><a href="contact.php" class="footer__section-one__link">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer__section-two">
                    <div class="footer__section-two__copyright">
                        <p class="footer__section-two__date">
                            &copy; 2016 | Design by Baobab
                        </p>
                    </div>
                    <div class="footer__section-two__social">
                        <a href="#" class="footer__section-two__link">
                            <img src="../img/Youtube.png" class="footer__section-two__logo"alt="Youtube" width="167" height="167"/>
                        </a>
                        <a href="#" class="footer__section-two__link">
                            <img src="../img/Twitter.png" class="footer__section-two__logo"alt="Twitter" width="167" height="167"/>
                        </a>
                        <a href="#" class="footer__section-two__link">
                            <img src="../img/Facebook.png" class="footer__section-two__logo"alt="Facebook" width="167" height="167"/>
                        </a>
                        <a href="#" class="footer__section-two__link">
                            <img src="../img/Instagram.png" class="footer__section-two__logo"alt="Instagram" width="167" height="167"/>
                        </a>
                    </div>
                    <div class="footer__section-two__back">
                        <a href="#" class="footer__section-two__high">Revenir en haut</a>
                    </div>
                </div>
            </div>
        </footer>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"/></script>
        <script type="text/javascript" src="javascript.js"/></script>
    </body>
</html>
