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
    <div class="movie__video video-container">
        <?php the_field('metrage_link-video');?>
    </div>
    <div class="movie__container">
        <div class="movie__content">
            <section class="movie__section">
                <h3 aria-level="3" class="movie__title-section"><?php the_field('metrage_title-one');?></h3>
                <table class="movie__fiche movie__fiche--width">
                    <caption class="movie__caption"><?php _e('Informations','b');?></caption>
                    <tbody>
                        <tr class="movie__row">
                            <th class="movie__row__head"><?php _e('Titre français','b');?></th>
                            <td class="movie__row__infos"><?php the_field('metrage_fiche-title');?></td>
                        </tr>
                        <tr class="movie__row">
                            <th class="movie__row__head"><?php _e('Durée','b');?></th>
                            <td class="movie__row__infos"><?php the_field('metrage_fiche-duree');?></td>
                        </tr>
                        <tr class="movie__row">
                            <th class="movie__row__head"><?php _e('Pays','b');?></th>
                            <td class="movie__row__infos"><?php the_field('metrage_fiche-pays');?></td>
                        </tr>
                        <tr class="movie__row">
                            <th class="movie__row__head"><?php _e('Date','b');?></th>
                            <td class="movie__row__infos"><?php the_field('metrage_fiche-date');?></td>
                        </tr>
                        <tr class="movie__row">
                            <th class="movie__row__head"><?php _e('Participants','b');?></th>
                            <td class="movie__row__infos"><?php the_field('metrage_fiche-participants');?></td>
                        </tr>
                        <tr class="movie__row">
                            <th class="movie__row__head"><?php _e('Technique','b');?></th>
                            <td class="movie__row__infos"><?php the_field('metrage_fiche-technique');?></td>
                        </tr>
                        <tr class="movie__row">
                            <th class="movie__row__head"><?php _e('Thème','b');?></th>
                            <td class="movie__row__infos"><?php the_field('metrage_fiche-theme');?></td>
                        </tr>
                        <tr class="movie__row">
                            <th class="movie__row__head"><?php _e('Direction et coordination','b');?></th>
                            <td class="movie__row__infos"><?php the_field('metrage_fiche-direction');?></td>
                        </tr>
                        <tr class="movie__row">
                            <th class="movie__row__head"><?php _e('Assistants','b');?></th>
                            <td class="movie__row__infos"><?php the_field('metrage_fiche-assistant');?></td>
                        </tr>
                        <tr class="movie__row">
                            <th class="movie__row__head"><?php _e('Musique','b');?></th>
                            <td class="movie__row__infos"><?php the_field('metrage_fiche-musique');?></td>
                        </tr>
                        <tr class="movie__row">
                            <th class="movie__row__head"><?php _e('Histoire originale','b');?></th>
                            <td class="movie__row__infos"><?php the_field('metrage_fiche-histoire');?></td>
                        </tr>
                        <tr class="movie__row">
                            <th class="movie__row__head"><?php _e('Montage son','b');?></th>
                            <td class="movie__row__infos"><?php the_field('metrage_fiche-son');?></td>
                        </tr>
                        <tr class="movie__row">
                            <th class="movie__row__head"><?php _e('Montage image','b');?></th>
                            <td class="movie__row__infos"><?php the_field('metrage_fiche-image');?></td>
                        </tr>
                        <tr class="movie__row">
                            <th class="movie__row__head"><?php _e('Production','b');?></th>
                            <td class="movie__row__infos"><?php the_field('metrage_fiche-production');?></td>
                        </tr>
                        <tr class="movie__row">
                            <th class="movie__row__head"><?php _e('Langues','b');?></th>
                            <td class="movie__row__infos"><?php the_field('metrage_fiche-langues');?></td>
                        </tr>
                        <tr class="movie__row">
                            <th class="movie__row__head"><?php _e('Sous titre disponibles','b');?></th>
                            <td class="movie__row__infos"><?php the_field('metrage_fiche-sous-titres');?></td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <section class="movie__section">
                <h3 aria-level="3" class="movie__title-section"><?php the_field('metrage_title-two');?></h3>
                <section>
                    <h4 aria-level="4" class="movie__section-title"><?php the_field('metrage_projet_title-one');?></h4>
                </section>
                <p class="movie__section-text">
                    <?php the_field('metrage_paragraphe-one');?>
                </p>
                <h4 aria-level="4" class="movie__section-title"><?php the_field('metrage_projet_title-two');?></h4>
                <p class="movie__section-text">
                    <?php the_field('metrage_paragraphe-two');?>
                </p>
            </section>
            <div class="movie__section">
                <section class="movie__section-one">
                    <h3 aria-level="3" class="movie__title-section"><?php the_field('metrage_title-three');?></h3>
                    <section>
                        <h4 aria-level="4" class="movie__section-title"><?php the_field('metrage_making_title-one');?></h4>
                    </section>
                    <p class="movie__section-textWidth">
                        <?php the_field('metrage_making_paragraphe-one');?>
                    </p>
                    <figure class="movie__section-picture">
                        <img class="movie__picture-image"src="<?php the_field('metrage_making_image-one');?>" alt="" />
                    </figure>
                    <p class="movie__section-legend"><?php the_field('metrage_making_legend_image-one');?></p>
                </section>
                <section class="movie__section-one">
                    <h4 aria-level="4" class="movie__section-title"><?php the_field('metrage_making_title-two');?></h4>
                        <p class="movie__section-textWidth">
                            <?php the_field('metrage_making_paragraphe-two');?>
                        </p>
                        <figure class="movie__section-picture">
                            <img class="movie__picture-image" src="<?php the_field('metrage_making_image-two');?>" alt="" />
                        </figure>
                    <p class="movie__section-legend"><?php the_field('metrage_making_legend_image-two');?></p>
                </section>
                <section class="movie__section-one">
                    <h4 aria-level="4" class="movie__section-title"><?php the_field('metrage_making-title-three');?></h4>
                        <p class="movie__section-textWidth">
                            <?php the_field('metrage_making_paragraphe-three');?>
                        </p>
                        <figure class="movie__section-picture">
                            <img class="movie__picture-image" src="<?php the_field('metrage_making_image-three');?>" alt="" />
                        </figure>
                    <p class="movie__section-legend"><?php the_field('metrage_making_legend_image-four');?></p>
                </section>
                <section class="movie__section-one">
                    <h4 aria-level="4" class="movie__section-title"><?php the_field('metrage_making_title-four');?></h4>
                        <p class="movie__section-textWidth">
                            <?php the_field('metrage_making_paragraphe-four');?>
                        </p>
                        <figure class="movie__section-picture">
                            <img class="movie__picture-image" src="<?php the_field('metrage_making_image-four');?>" alt="" />
                        </figure>
                    <p class="movie__section-legend"><?php the_field('metrage_making_legend_image-four');?></p>
                </section>
            </div>
        </div>
    </div>
</div>
<section class="don">
    <h2 aria-level="2" class="don__title"><?php the_field('don_title');?></h2>
    <figure class="don__arrow-one">
        <img src="<?php the_field('don_arrow-left');?>" alt="" width="60" height="100" />
    </figure>
    <p class="don__button">
        <a href="<?php the_field('don_cible-button');?>" class="don__link"><?php the_field('don_text-button');?></a>
    </p>
    <figure class="don__arrow-two">
        <img src="<?php the_field('don_arrow-right');?>" alt="" width="60" height="100"/>
    </figure>
</section>
<?php
    get_footer();
