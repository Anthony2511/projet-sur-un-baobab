<?php
/*
      Template Name: Single Post
*/
get_header('home');

?>
<main class="container__size">
            <div class="fil-ariane__size">
                <p class="fil-ariane__chemin">
                    <a href="<?php echo get_home_url(); ?>" class="fil-ariane__link"><?php _e('Accueil','b');?></a>
                    <span class="fil-ariane__separator">/</span>
                    <a href="<?php the_permalink(84);?>" class="fil-ariane__link"><?php _e('Actualités','b');?></a>
                    <span class="fil-ariane__separator">/</span>
                    <a href="<?php get_permalink();?>" class="fil-ariane__link"><?php the_title();?></a>
                </p>
            </div>
            <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
            <div class="article">
                <img src="<?php the_field('article_image');?>" class="article__image" alt="Sur un Baobab a un an" width="1000" height="667"/>
                <div class="article__infos-article">
                    <?php _e('Par','b');?><span class="article__infos-detail article__infos-detail--right"> <?php the_author();?></span>
                    <?php _e('Le','b');?><span class="article__infos-detail"> <?php the_date();?></span>
                </div>
                <h2 aria-level="2" class="article__title"><?php the_title();?></h2>
                <div class="article__texte">
                    <div class="article__partie-one">
                        <p class="article__paragraphe">
                            <?php the_field('article_section-one_paragraphe-one');?>
                        </p>
                        <p class="article__paragraphe">
                            <?php the_field('article_section-one_paragraphe-two');?>
                        </p>
                        <h3 aria-level="3" class="article__partie-one__title"><?php the_field('article_title-section-two');?></h3>
                        <p class="article__paragraphe">
                            <?php the_field('article_section-two_paragraphe-one');?>
                        </p>
                        <p class="article__paragraphe">
                            <?php the_field('article_section-two_paragraphe-two');?>
                        </p>
                        <img class="article__image-article" src="<?php the_field('article_metrage-image-one');?>" alt="" width="624" height="412" />
                    </div>
                </div>
            </div>
            <?php endwhile; endif; ?>
            <div class="article__commentaires">
                <h2 class="article__title-commentaire">Laissez-nous votre avis</h2>
                <p class="article__champ-obli">Les champs * sont obligatoires</p>
                <form class="article__form" action="index.html" method="post">
                    <p class="article__champ">
                        <label for="pseudo" class="article__label">Votre nom<span class="asterix">*</span>&nbsp;:</label>
                        <input type="text" class="article__input" name="pseudo" id="pseudo" required="required">
                    </p>
                    <p class="article__champ">
                        <label for="commentaire" class="article__label">Votre commentaire <span class="asterix">*</span>&nbsp;:</label>
                        <textarea name="commentaire" class="article__area" id="commentaire" rows="8" cols="50" required="required"></textarea>
                    </p>
                    <input type="submit" class="article__button-commentaire" value="Laissez votre commentaire" />
                </form>
            </div>
            <?php
                get_footer();
