<?php
/*
      Template Name: Ateliers
*/

get_header('home');

?>
        <main class="container__size">
            <div class="fil-ariane">
                <p class="fil-ariane__chemin">
                    <a href="<?php echo get_home_url(); ?>" class="fil-ariane__link">Accueil</a> >
                    <a href="<?php echo get_permalink();?>" class="fil-ariane__link">Ateliers</a>
                </p>
            </div>
            <div class="ateliers">
                <h2 aria-level="2" class="ateliers__title">Anime-toi meme</h2>
                <div class="ateliers__tutos">
                    <div class="ateliers__tuto">
                        <figure class="ateliers__content">
                            <img src="img/photo-two.jpg" class="ateliers__content__image" alt="image du tuto 1" width="300" height="200"/>
                        </figure>
                        <div class="ateliers__content">
                            <h3 aria-level="3" class="ateliers__content__title">Tuto 1 - Papiers découpés</h3>
                            <p class="ateliers__text">
                                lorem ipsum amet, consecteur adispiting elit. lorem ipsum amet conssecteur.
                            </p>
                            <a href="<?php the_permalink();?>" class="ateliers__link">Commencer</a>
                        </div>
                    </div>
                    <div class="ateliers__tuto">
                        <figure class="ateliers__content">
                            <img src="img/photo-three.jpg" class="ateliers__content__image" alt="image du tuto 2" width="300" height="200"/>
                        </figure>
                        <div class="ateliers__content">
                            <h3 aria-level="3" class="ateliers__content__title">Tuto 2 - Bruitages et dialogues</h3>
                            <p class="ateliers__text">
                                lorem ipsum amet, consecteur adispiting elit. lorem ipsum amet conssecteur.
                            </p>
                            <a href="tuto.php" class="ateliers__link">Commencer</a>
                        </div>
                    </div>
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
                            <img src="img/Youtube.png" class="footer__section-two__logo"alt="Youtube" width="167" height="167"/>
                        </a>
                        <a href="#" class="footer__section-two__link">
                            <img src="img/Twitter.png" class="footer__section-two__logo"alt="Twitter" width="167" height="167"/>
                        </a>
                        <a href="#" class="footer__section-two__link">
                            <img src="img/Facebook.png" class="footer__section-two__logo"alt="Facebook" width="167" height="167"/>
                        </a>
                        <a href="#" class="footer__section-two__link">
                            <img src="img/Instagram.png" class="footer__section-two__logo"alt="Instagram" width="167" height="167"/>
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
