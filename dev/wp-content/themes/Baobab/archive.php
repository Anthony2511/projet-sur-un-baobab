<?php
/*
      Template Name: Archive
*/
if(is_page()){
    query_posts([
        'posts_per_page' => 6,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'post'
    ]);
}
get_header('home');

?>
<main class="container__size">
<div class="fil-ariane__size">
    <p class="fil-ariane__chemin">
        <a href="<?php echo get_home_url(); ?>" class="fil-ariane__link"><?php _e('Accueil','b');?></a>
        <span class="fil-ariane__separator">/</span>
        <a href="<?php echo get_the_permalink();?>" class="fil-ariane__link"><?php _e('Actualités','b');?></a>
    </p>
</div>
<section class="actus">
    <h2 aria-level="2" class="actus__title"><?php the_title();?></h2>
    <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
        <a href="<?php the_permalink();?>" class="actus__link">
            <div class="actus__link__container">
                <img src="<?php the_field('article_image');?>" alt="Projection de Safidn'i Pela" class="actus__link__images" width="450" height="300"/>
                <section class="actus__link__content">
                    <h3 aria-level="3" class="actus__link__title"><?php the_title();?></h3>
                    <a href="<?php the_permalink();?>" class="actus__link__view"><?php _e('Voir l\'article','b');?></a>
                </section>
                <div class="actus__link__opacity"></div>
            </div>
        </a>
    <?php endwhile; endif; ?>
    <div class="pictures__pagination">
        <a href="#" class="pictures__link pictures__link--active">1</a>
        <a href="#" class="pictures__link">2</a>
        <span class="pictures__etc">...</span>
        <a href="#" class="pictures__link">3</a>
        <a href="#" class="pictures__link">></a>
    </div>
</section>
<?php
    get_footer();
