<?php
/*
      Template Name: Productions
*/
if(is_page()){
    query_posts([
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'ASC',
        'post_type' => 'project'
    ]);
}
get_header('home');

?>
        <main class="container__size">
            <div class="fil-ariane__size">
                <p class="fil-ariane__chemin">
                    <a href="<?php echo get_home_url(); ?>" class="fil-ariane__link"><?php _e('Accueil','b');?></a>
                    <span class="fil-ariane__separator">/</span>
                    <a href="<?php echo get_permalink();?>" class="fil-ariane__link"><?php _e('Projets','b');?></a>
                </p>
            </div>
            <div class="projets">
                <h2 aria-level="2" class="projets__title"><?php the_field('projet_title'); ?></h2>
                <div class="projets__films" >
                    <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
                    <a href="<?php the_permalink();?>" class="projets__movie">
                        <div class=" projets__movie__container">
                            <img src="<?php the_field('metrage_image');?>" alt="Court-métrage 1" class="projets__movie__image" width="970" height="548"/>
                            <div class="projets__movie__content">
                                <h3 aria-level="3" class="projets__movie__title"><?php the_title(); ?></h3>
                                <a href="<?php the_permalink(); ?>" class="projets__movie__link"><?php _e('Voir le projet','b');?></a>
                            </div>
                            <div class="projets__movie__opacity"></div>
                        </div>
                    </a>
                    <?php endwhile; endif; ?>
                </div>
            </div>
            <?php

            get_footer();
