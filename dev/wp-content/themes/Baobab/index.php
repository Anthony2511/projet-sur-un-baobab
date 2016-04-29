<?php
/*
        Template Name: Homepage
*/

get_header();

if ( have_posts() ):
	while ( have_posts() ):
		the_post();
?>
<main class="ma-page">
    <section class="ma-page__content">
        <h2 class="ma-page__title"><?php the_title(); ?></h2>

        <div class="ma-page__text">
            <?php the_content();?>
        </div>
        <aside class="about">
            <h3 class="about__title"><?php the_field('about_title');?></h3>
            <div class="about__content">
                <?php the_field('about_content');?>
            </div>
        </aside>

    <?php endwhile;
    endif;
    ?>
        <section class="last-articles">
            <h3 class="last-articles">Derniers article</h3>
            <div class="last-articles__container">
                <?php
                    $args = array( 'posts_per_page' => 3);
                    $posts = new WP_Query( ['posts_per_page' =>] );
                    foreach ( $posts as $post ) : setup_postdata( $post ); ?>
	                      <article class="article">
	                          <h4 class="article__title"><?php the_title(); ?></h4>
                              <p class="article__date">
                                  Publié le <time class="article__time" datetime="<?php the_date('c');?>"><?php the_date('l j F');?></time>
                              </p class="article__expcerpt">
                                <?php the_custom_excerpt();?>
                              <p>
                                  <a href="<?php the_permalink();?>" class="article__link">Lire la suite</a>
                              </p>
	                      </article>
                    <?php endforeach;
                    wp_reset_postdata();?>

            </div>
        </section>
    </section>
</main>

<?php

get_footer();
