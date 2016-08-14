<?php
/*
      Template Name: About
*/
get_header('home');
?>
<main class="container__size">
            <div class="fil-ariane__size">
                <p class="fil-ariane__chemin">
                    <a href="<?php echo get_home_url(); ?>" class="fil-ariane__link"><?php _e('Accueil','b');?></a>
                    <span class="fil-ariane__separator">/</span>
                    <a href="<?php the_permalink();?>" class="fil-ariane__link"><?php _e('A Propos','b');?></a>
                </p>
            </div>
            <div class="about">
                <h2 aria-level="2" class="about__title"><?php the_title();?></h2>
                <h3 aria-level="3" class="about__sous-title"><?php the_field('about_title-section-one');?></h3>
                <img src="<?php the_field('about_image');?>" class="about__image" alt="Sur un Baobab a un an"/>
                <div class="about__texte">
                    <div class="about__partie-one">
                        <p class="about__paragraphe">
                            <?php the_field('about_section-one_paragraphe-one');?>
                        </p>
                        <p class="about__paragraphe about__paragraphe--float">
                            <?php the_field('about_section-one_paragraphe-two');?>
                        </p>
                        <h3 aria-level="3" class="about__partie-one__title"><?php the_field('about_title-section-two');?></h3>
                        <div class="about__photos">
                            <div class="about__info">
                                <img src="<?php the_field('about_photo-françois');?>" class="about__photos-membres" alt="" />
                                <p class="about__info-name">
                                    <?php the_field('about_name_member-one');?>
                                </p>
                                <p class="about__info-mail">
                                    <?php the_field('about_mail-françois');?>
                                </p>
                                <p class="about__paragraphe">
                                    <?php the_field('about_description-françois');?>
                                </p>
                            </div>
                            <div class="about__info">
                                <img src="<?php the_field('about_photo-elena');?>" class="about__photos-membres" alt="" />
                                <p class="about__info-name">
                                    <?php the_field('about_name_member-two');?>
                                </p>
                                <p class="about__info-mail">
                                    <?php the_field('about_mail-elena');?>
                                </p>
                                <p class="about__paragraphe">
                                    <?php the_field('about_description-elena');?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                get_footer();
