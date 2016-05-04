<?php
/*
      Template Name: Single Project
*/
get_header();

?>

    <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
        <section class="project">
            <h2 class="project__title"><?php the_title();?></h2>
            <p class="project__type">
                <?php
                    echo get_the_term_list( get_the_ID(), 'project-type', 'Type(s) de projets: ', ' - ', '&nbsp;!' );
                 ?>
            </p>
            <div class="project__content">
                <?php the_content();?>
            </div>
            <dl class="project__details">
                <dt class="project__label">Pays :</dt>
                <dd class="project__value"><?php the_field('localisation');?></dd>
                <dt class="project__label">Durée :</dt>
                <dd class="project__value"><?php the_field('duree');?></dd>
            </dl>
        </section>
    <?php endwhile; endif; ?>
<?php

get_footer();
