<?php
/*
      Template Name: Single Post
*/
get_header('home');

?>
<main class="container__size">
            <div class="fil-ariane__size">
                <p class="fil-ariane__chemin">
                    <a href="<?php echo get_home_url(); ?>" class="fil-ariane__link">Accueil</a> >
                    <a href="<?php the_permalink(84);?>" class="fil-ariane__link">Actualités</a> >
                    <a href="<?php get_permalink();?>" class="fil-ariane__link"><?php the_title();?></a>
                </p>
            </div>
            <div class="article">
                <h2 aria-level="2" class="article__title"><?php the_title();?></h2>
                <span class="article__date"><?php the_date();?></span>
                <img src="<?php the_field('article_image');?>" class="article__image" alt="Sur un Baobab a un an" width="1000" height="667"/>
                <div class="article__texte">
                    <div class="article__partie-one">
                        <p class="article__paragraphe">
                            <?php the_field('article_section-one_paragraphe-one');?>
                        </p>
                        <p class="article__paragraphe article__paragraphe--float">
                            <?php the_field('article_section-one_paragraphe-two');?>
                        </p>
                        <h3 aria-level="3" class="article__partie-one__title"><?php the_field('article_title-section-two');?></h3>
                        <p class="article__paragraphe">
                            <?php the_field('article_section-two_paragraphe-one');?>
                        </p>
                        <p class="article__paragraphe article__paragraphe--float">
                            <?php the_field('article_section-two_paragraphe-two');?>
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
            <?php
                get_footer();
