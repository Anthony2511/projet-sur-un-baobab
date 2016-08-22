<?php
/*
      Template Name: Ateliers
*/
if(is_page()){
    query_posts([
        'posts_per_page' => 4,
        'orderby' => 'date',
        'order' => 'ASC',
        'post_type' => 'ateliers'
    ]);
}
get_header('home');

?>
        <main class="container__size">
            <div class="fil-ariane__size">
                <p class="fil-ariane__chemin">
                    <a href="<?php echo get_home_url(); ?>" class="fil-ariane__link"><?php _e('Accueil','b');?></a>
                    <span class="fil-ariane__separator">/</span>
                    <a href="<?php echo get_permalink();?>" class="fil-ariane__link"><?php _e('Ateliers','b');?></a>
                </p>
            </div>
            <div class="ateliers">
                <h2 aria-level="2" class="ateliers__title"><?php the_title();?></h2>
                <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
                <div class="ateliers__tutos">
                    <div class="ateliers__tuto">
                        <figure class="ateliers__content">
                            <img src="<?php the_field('tuto_image');?>" class="ateliers__content__image" alt="image du tuto 1" width="624" height="416"/>
                        </figure>
                        <div class="ateliers__content">
                            <h3 aria-level="3" class="ateliers__content__title"><?php the_title();?></h3>
                            <p class="ateliers__text">
                                <?php the_field('tuto_syno');?>
                            </p>
                            <a href="<?php the_permalink();?>" class="ateliers__link"><?php _e('Commencer','b');?></a>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
                </div>
            </div>
            <?php
                get_footer();
