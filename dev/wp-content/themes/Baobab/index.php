<?php
/*
      Template Name: Homepage
*/
get_header();

?>
<div class="head">
    <div class="head__actu">
        <h2 aria-level="2" class="head__actu__title"><?php the_field('about_title');?></h2>
        <div class="head__actu__blog">
            <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
                <div class="head__actu__blog__zone">
                    <a href="movie.php" class="head__actu__blog__zone__link">
                        <div class="head__actu__blog__zone__link__container">
                            <img src="<?php the_field('about_image'); ?>" class="head__actu__blog__zone__link__container__image" alt="Dernier court métrage" width="300" height="169"/>
                            <p class="head__actu__blog__zone__link__container__text">
                                <?php the_field('about_metrages'); ?>
                            </p>
                        </div>
                    </a>
                </div>
            <?php endwhile; endif; ?>
            <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
                <div class="head__actu__blog__zone">
                    <a href="pictures.php" class="head__actu__blog__zone__link">
                        <div class="head__actu__blog__zone__link__container">
                            <img src="../img/actu2.jpg" class="head__actu__blog__zone__link__container__image" alt="Dernière photo" width="1500" height="1000" />
                            <p class="head__actu__blog__zone__link__container__text">
                                <?php the_field('about_photo'); ?>
                            </p>
                        </div>
                    </a>
                </div>
            <?php endwhile; endif; ?>
        </div>
        <div class="head__actu__projet">
            <div class="head__actu__projet__container">
                <h2 aria-level="2" class="head__actu__projet__container__title"><?php the_field('about_projet'); ?></h2>
                <p class="head__actu__projet__container__text">
                    <?php the_field('about_text'); ?>
                </p>
                <a href="<?php the_field('about_cible'); ?>" class="head__actu__projet__container__link">
                    <span class="head__actu__projet__container__link__button"><?php the_field('about_label'); ?></span>
                </a>
            </div>
        </div>
    </div>
    <div class="head__arrow"></div>
</div>
<div class="partenaires">
    <h2 class="partenaires__title">Nos partenaire</h2>
    <div class="partenaires__logo">
        <img src="../img/logoIrea.png" class="partenaires__logo__sponsor"alt="Logo Ireast" width="1162" height="1127"/>
        <img src="../img/logoSncf.png" class="partenaires__logo__sponsor"alt="Logo SNCF" width="2356" height="1248"/>
        <img src="../img/logoHeine.png" class="partenaires__logo__sponsor"alt="Logo Heine" width="1000" height="853"/>
        <img src="../img/logoWilson.png" class="partenaires__logo__sponsor"alt="Logo Wilson" width="2272" height="1704"/>
    </div>
</div>
<?php
    get_footer();
