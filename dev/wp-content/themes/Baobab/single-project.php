<?php
/*
      Template Name: Single Project
*/
get_header('home');

?>
<div class="movie">
    <div class="fil-ariane">
        <p class="fil-ariane__chemin">
            <a href="<?php echo get_home_url(); ?>" class="fil-ariane__link">Accueil</a> >
            <a href="<?php echo get_permalink(108); ?>" class="fil-ariane__link">Projets</a> >
            <a href="<?php echo get_permalink(); ?>" class="fil-ariane__link">Safidn'i Pela</a>
        </p>
    </div>
    <h2 aria-level="2" class="movie__title"><?php the_title();?></h2>
    <ul class="movie__menu">
        <a href="#" class="movie__menu__link"><li class="movie__menu__list movie__menu__list--active">Voir le film</li></a>
        <a href="#" class="movie__menu__link"><li class="movie__menu__list">Le projet</li></a>
        <a href="#" class="movie__menu__link"><li class="movie__menu__list">Making-of</li></a>
        <a href="#" class="movie__menu__link"><li class="movie__menu__list">Fiche technique</li></a>
    </ul>
    <iframe class="movie__video"width="560" height="315" src="https://www.youtube.com/embed/92IwfppA5SQ" frameborder="0" allowfullscreen></iframe>
    <a href="#" class="movie__partage">Partager</a>
    <div class="movie__pictures">
        <h3 aria-level="3" class="movie__pictures__title">Photos de tournage</h3>
        <img src="img/photo-one.jpg" class="movie__pictures__image" alt="Décor du tournage" width="300" height="202"/>
        <img src="img/photo-two.jpg" class="movie__pictures__image" alt="Ramsay, personnage du court-métrag" width="300" height="200"/>
        <img src="img/photo-three.jpg" class="movie__pictures__image" alt="Décor du tournage" width="300" height="200"/>
        <a href="pictures.php">
            <div class="movie__pictures__plus">
                <div class="movie__pictures__croix">
                    <img src="img/plus.png" alt="voir plus" width="30" height="30" />
                </div>
            </div>
        </a>
    </div>
    <div class="movie__commentaires">
        <div class="movie__mon-commentaire">
            <img src="img/photoProfil.png" class="movie__mon-commentaire__profil " alt="Photo de profil" width="40" height="50"/>
            <form class="movie__mon-commentaire__form" action="index.html" method="post">
                <input type="text" class="movie__mon-commentaire__champ" placeholder="Votre commentaire" name="name" value="">
            </form>
        </div>
        <div class="movie__publier">
            <div class="movie__person">
                <img src="img/photoProfil.png" class="movie__person__profil" alt="Photo de profil" width="40" height="50"/>
                <p class="movie__person__author">
                    Julien Heyndels, 21 mars 2015 à 17h31
                </p>
            </div>
            <p class="movie__publier__text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Sed ut dignissim nisl. Interdum
            </p>
        </div>
    </div>
</div>
<div class="don">
    <h3 aria-level="3" class="don__title">Soutenez-nous dans notre projet</h3>
    <figure class="don__arrow-one">
        <img src="img/flecheDon.png" alt="" width="60" height="100" />
    </figure>
    <p class="don__button">
        <a href="don.html" class="don__link">Soutenez-nous</a>
    </p>
    <figure class="don__arrow-two">
        <img src="img/flecheDon2.png" alt="" width="60" height="100"/>
    </figure>
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
