<?php
/*
      Template Name: Homepage
*/
if ( is_home() ) :
	get_header('home');
elseif ( is_404() ) :
	get_header( '404' );
else :
	get_header();
endif;

if(is_page()){
    query_posts([
        'posts_per_page' => 2,
        'orderby' => 'date',
        'order' => 'ASC',
        'post_type' => 'project'
    ]);
}
?>
<main>
<div class="head">
    <div class="head__actu">
        <h2 aria-level="2" class="head__actu__title"><?php the_field('home_title');?></h2>
        <div class="head__actu__blog">
            <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
                <div class="head__actu__blog__zone">
                    <a href="<?php the_permalink(); ?>" class="head__actu__blog__zone__link">
                        <div class="head__actu__blog__zone__link__container">
                            <img src="<?php the_field('metrage_image'); ?>" class="head__actu__blog__zone__link__container__image" alt="Dernier court métrage" width="300" height="169"/>
                            <p class="head__actu__blog__zone__link__container__text">
                                <?php the_title();?>
                            </p>
                        </div>
                    </a>
                </div>
            <?php endwhile; endif; ?>
        </div>
        <div class="head__actu__projet">
            <div class="head__actu__projet__container">
                <h2 aria-level="2" class="head__actu__projet__container__title"><?php the_field('home_title-projet');?></h2>
                <p class="head__actu__projet__container__text">
                    <?php the_field('home_text-projet'); ?>
                </p>
                <a href="<?php the_field('home_cible-button'); ?>" class="head__actu__projet__container__link">
                    <span class="head__actu__projet__container__link__button"><?php _e('En savoir plus','b');?></span>
                </a>
            </div>
        </div>
    </div>
    <div class="head__arrow"></div>
</div>
<div class="partenaires">
    <h2 class="partenaires__title"><?php the_field('home_title-partenaires');?></h2>
    <div class="partenaires__logo">
        <img src="<?php the_field('about_logo'); ?>" class="partenaires__logo__sponsor"alt="Logo Ireast" width="1162" height="1127"/>
        <img src="<?php the_field('about_logo'); ?>" class="partenaires__logo__sponsor"alt="Logo SNCF" width="2356" height="1248"/>
        <img src="<?php the_field('about_logo'); ?>" class="partenaires__logo__sponsor"alt="Logo Heine" width="1000" height="853"/>
        <img src="<?php the_field('about_logo'); ?>" class="partenaires__logo__sponsor"alt="Logo Wilson" width="2272" height="1704"/>
    </div>
</div>
<?php
    get_footer();
