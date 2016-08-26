<?php
/*
      Template Name: Single Atelier
*/
get_header('home');

?>
<main class="container__size">
            <div class="fil-ariane__size">
                <p class="fil-ariane__chemin">
                    <a href="<?php echo get_home_url(); ?>" class="fil-ariane__link"><?php _e('Accueil','b');?></a>
                    <span class="fil-ariane__separator">/</span>
                    <a href="<?php the_permalink(115);?>" class="fil-ariane__link"><?php _e('Ateliers','b');?></a>
                    <span class="fil-ariane__separator">/</span>
                    <a href="<?php get_permalink();?>" class="fil-ariane__link"><?php the_title();?></a>
                </p>
            </div>
            <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

            <?php endwhile; endif; ?>
            <?php
                get_footer()
