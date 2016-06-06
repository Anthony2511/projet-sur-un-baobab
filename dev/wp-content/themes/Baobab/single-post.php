<?php
/*
      Template Name: Single Article
*/
get_header('home');

?>
            <div class="fil-ariane__size">
                <p class="fil-ariane__chemin">
                    <a href="index.php" class="fil-ariane__link">Accueil</a> >
                    <a href="actualités.php" class="fil-ariane__link">Actualités</a> >
                    <a href="article.php" class="fil-ariane__link">Sur un Baobab a un an</a>
                </p>
            </div>
            <div class="article">
                <h2 aria-level="2" class="article__title"> Sur un Baobab a un an !</h2>
                <span class="article__date">Le 15 février 2016 à 15h</span>
                <img src="img/article.jpg" class="article__image" alt="Sur un Baobab a un an" width="1000" height="667"/>
                <div class="article__texte">
                    <div class="article__partie-one">
                        <p class="article__paragraphe">
                            Il y a juste un an, François et moi partions seuls pour Madagascar
                            avec pour unique certitude l’envie commune de réaliser un projet où
                            se rejoignent nos passions pour l’éducation et le cinéma d’animation.
                            Vouloir faire des dessin animés avec des enfants à l’autre bout du monde
                            semblait être une idée un peu folle surtout en voyageant sac-à-dos, en
                            taxi-brousse, à pied ou en stop. Mais cela ne nous a pas démotivé bien
                            au contraire. Au fil de nos rencontres et des échanges, cette aventure nous
                            a permis de découvrir de nombreuses facettes de Madagascar.
                        </p>
                        <p class="article__paragraphe article__paragraphe--float">
                            Même si elles sont souvent positives, nous avons été confronté à des réalités
                            plus dures comme le la corruption omniprésente ou l’extrême pauvreté de la plupart
                            des grandes villes. Cela nous a renforcé dans notre volonté de lier notre projet
                            au soutien d’une cause sociale locale. Au delà de la rencontre avec des jeunes
                            malgaches, le projet nous a surtout permis de découvrir et de partager leur quotidien.
                            Enfin, ce fut l’occasion de rencontrer plusieurs ONG locales et internationales auxquelles
                            nous proposions de réaliser un atelier qui s’inscrivait au programme de leurs activités.
                        </p>
                        <h3 aria-level="3" class="article__partie-one__title">La suite ...</h3>
                        <p class="article__paragraphe">
                            Après plusieurs mois sur place et la réalisation de deux ateliers nous voilà de retour
                            encore plus motivés pour de nouveaux projets. Au programme de 2016, nous avons d’abord
                            la préparation d’un nouvel atelier depuis la Belgique qui se fera probablement de nouveau
                            à Madagascar. Nous continuons également de diffuser un maximum les films réalisés par
                            les enfants de Tuléar en 2015 sur le tourisme responsable et la grossesse précoce au delà de Madagascar.
                        </p>
                        <p class="article__paragraphe article__paragraphe--float">
                            Nous cherchons et contactons des festivals de courts-métrages ou même des associations prêtes
                            à diffuser les films. Enfin, nous préparons également une petite exposition qui sera l’occasion
                            de partager et de présenter quelques images de ce qu’il y a autour des projets réalisés à Madagascar
                            (déroulement de l’atelier, interviews de participants, photos, etc…).
                        </p>
                    </div>
                </div>
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
