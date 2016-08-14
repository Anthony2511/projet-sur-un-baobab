<?php
/*
      Template Name: Single Project
*/
get_header('home');

?>
<div class="movie">
    <div class="fil-ariane__size">
        <p class="fil-ariane__chemin">
            <a href="<?php echo get_home_url(); ?>" class="fil-ariane__link"><?php _e('Accueil','b');?></a>
            <span class="fil-ariane__separator">/</span>
            <a href="<?php echo get_permalink(108); ?>" class="fil-ariane__link"><?php _e('Projets','b');?></a>
            <span class="fil-ariane__separator">/</span>
            <a href="<?php echo get_permalink(); ?>" class="fil-ariane__link"><?php the_title();?></a>
        </p>
    </div>
    <h2 aria-level="2" class="movie__title"><?php the_title();?></h2>
    <iframe class="movie__video"width="560" height="315" src="https://www.youtube.com/embed/92IwfppA5SQ" frameborder="0" allowfullscreen></iframe>
    <div class="movie__container">
        <div class="movie__content">
            <section class="movie__section">
                <h2 aria-level="2" class="movie__title-section">Fiche technique</h2>
                <table class="movie__fiche movie__fiche--width">
                    <caption class="movie__caption"><?php _e('Informations','b');?></caption>
                    <tbody>
                        <tr class="movie__row">
                            <th class="movie__row__head"><?php _e('Titre français','b');?></th>
                            <td class="movie__row__infos">Le choix de Pela</td>
                        </tr>
                        <tr class="movie__row">
                            <th class="movie__row__head"><?php _e('Durée','b');?></th>
                            <td class="movie__row__infos">6 min 27 sec</td>
                        </tr>
                        <tr class="movie__row">
                            <th class="movie__row__head"><?php _e('Pays','b');?></th>
                            <td class="movie__row__infos">Madagascar</td>
                        </tr>
                        <tr class="movie__row">
                            <th class="movie__row__head"><?php _e('Date','b');?></th>
                            <td class="movie__row__infos">24 Mai 2016</td>
                        </tr>
                        <tr class="movie__row">
                            <th class="movie__row__head"><?php _e('Technique','b');?></th>
                            <td class="movie__row__infos">2D, papier-découpé, image par image, déchets recyclés</td>
                        </tr>
                        <tr class="movie__row">
                            <th class="movie__row__head"><?php _e('Thème','b');?></th>
                            <td class="movie__row__infos">Tourisme</td>
                        </tr>
                        <tr class="movie__row">
                            <th class="movie__row__head"><?php _e('Participants','b');?></th>
                            <td class="movie__row__infos">19 enfants et adolescents</td>
                        </tr>
                        <tr class="movie__row">
                            <th class="movie__row__head"><?php _e('Direction et coordination','b');?></th>
                            <td class="movie__row__infos">Elena CABEDO GARCIA et François CHENOT</td>
                        </tr>
                        <tr class="movie__row">
                            <th class="movie__row__head"><?php _e('Assistants','b');?></th>
                            <td class="movie__row__infos">Henrmine ANDRY, Virginie Olivia ANDRIAMPENOSOA Razandry M. LAFINIARIVO</td>
                        </tr>
                        <tr class="movie__row">
                            <th class="movie__row__head"><?php _e('Musique','b');?></th>
                            <td class="movie__row__infos">MIKEBO</td>
                        </tr>
                        <tr class="movie__row">
                            <th class="movie__row__head"><?php _e('Histoire originale','b');?></th>
                            <td class="movie__row__infos">Emma LIDON et Josué AHIAVAO</td>
                        </tr>
                        <tr class="movie__row">
                            <th class="movie__row__head"><?php _e('Montage son','b');?></th>
                            <td class="movie__row__infos">Elena Cabedo Garcia</td>
                        </tr>
                        <tr class="movie__row">
                            <th class="movie__row__head"><?php _e('Montage son','b');?></th>
                            <td class="movie__row__infos">François Chenot</td>
                        </tr>
                        <tr class="movie__row">
                            <th class="movie__row__head"><?php _e('Production','b');?></th>
                            <td class="movie__row__infos">Sur un Baobab</td>
                        </tr>
                        <tr class="movie__row">
                            <th class="movie__row__head"><?php _e('Langues','b');?></th>
                            <td class="movie__row__infos">Français et Malgache</td>
                        </tr>
                        <tr class="movie__row">
                            <th class="movie__row__head"><?php _e('Sous titre disponibles','b');?></th>
                            <td class="movie__row__infos">Fr / Es / An</td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <section class="movie__section">
                <h2 aria-level="2" class="movie__title-section">Le projet</h2>
                <h3 aria-level="3" class="movie__section-title"><?php the_field('metrage_projet_title-one');?></h3>
                <p class="movie__section-text">
                    <?php the_field('metrage_paragraphe-one');?>
                </p>
                <h3 aria-level="3" class="movie__section-title"><?php the_field('metrage_projet_title-two');?></h3>
                <p class="movie__section-text">
                    <?php the_field('metrage_paragraphe-two');?>
                </p>
            </section>
            <section class="movie__section">
                <div class="movie__section-one">
                    <h2 aria-level="2" class="movie__title-section">Making of</h2>
                    <h3 aria-level="3" class="movie__section-title"><?php the_field('metrage_making_title-one');?></h3>
                    <p class="movie__section-text">
                        <?php the_field('metrage_making_paragraphe-one');?>
                    </p>
                    <figure class="movie__section-picture">
                        <img class="movie__picture-image"src="<?php the_field('metrage_making_image-one');?>" alt="" />
                    </figure>
                    <p class="movie__section-legend"><?php the_field('metrage_making_legend_image-one');?></p>
                </div>
                <div class="movie__section-one">
                    <h3 aria-level="3" class="movie__section-title"><?php the_field('metrage_making_title-two');?></h3>
                        <p class="movie__section-text">
                            <?php the_field('metrage_making_paragraphe-two');?>
                        </p>
                        <figure class="movie__section-picture">
                            <img class="movie__picture-image" src="<?php the_field('metrage_making_image-two');?>" alt="" />
                        </figure>
                    <p class="movie__section-legend"><?php the_field('metrage_making_legend_image-two');?></p>
                </div>
                <div class="movie__section-one">
                    <h3 aria-level="3" class="movie__section-title"><?php the_field('metrage_making_title-three');?></h3>
                        <p class="movie__section-text">
                            <?php the_field('metrage_making_paragraphe-three');?>
                        </p>
                        <figure class="movie__section-picture">
                            <img class="movie__picture-image" src="<?php the_field('metrage_making_image-three');?>" alt="" />
                        </figure>
                    <p class="movie__section-legend"><?php the_field('metrage_making_legend_image-four');?></p>
                </div>
                <div class="movie__section-one">
                    <h3 aria-level="3" class="movie__section-title"><?php the_field('metrage_making_title-four');?></h3>
                        <p class="movie__section-text">
                            <?php the_field('metrage_making_paragraphe-four');?>
                        </p>
                        <figure class="movie__section-picture">
                            <img class="movie__picture-image" src="<?php the_field('metrage_making_image-four');?>" alt="" />
                        </figure>
                    <p class="movie__section-legend"><?php the_field('metrage_making_legend_image-four');?></p>
                </div>
            </section>
            <section class="movie__section" id="tab-four">

            </section>
        </div>
    </div>

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
<?php
    get_footer();
