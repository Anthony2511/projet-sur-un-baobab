</main>
<?php $easy_options = get_option("easy_page_options"); ?>
<footer class="footer">
    <div class="footer__opacity">
        <div class="footer__section-one">
            <section class="footer__section-one__contact">
                <h2 aria-level="2" class="footer__section-one__title"><?php echo $easy_options['titresection1'];?></h2>
                <p class="footer__section-one__numero">
                    <?php echo $easy_options['whatsapp'];?>
                </p>
                <p class="footer__section-one__numero">
                    <?php echo $easy_options['tel'];?>
                </p>
            </section>
            <section class="footer__section-one__contact">
                <h2 aria-level="2" class="footer__section-one__title"><?php echo $easy_options['titresection2'];?></h2>
                    <?php
                        $posts = new WP_Query( ['posts_per_page' => 3, 'post_type' => 'post'] );
                        if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();?>
                    <a href="<?php the_permalink();?>" class="footer__section-one__nouvelles">
                        <?php the_title();?>
                    </a>
                    <?php wp_reset_postdata(); ?>
                <?php endwhile; endif; ?>
            </section>
            <section class="footer__section-one__contact footer__section-one__contact--none">
                <h2 aria-level="2" class="footer__section-one__title"><?php echo $easy_options['titresection3'];?></h2>
                <ul class="footer__section-one__list">
                    <li class="footer__section-one__detail"><a href="<?php echo get_home_url(); ?>" class="footer__section-one__link">Accueil</a></li>
                    <li class="footer__section-one__detail"><a href="<?php echo get_permalink(108); ?>" class="footer__section-one__link">Projets</a></li>
                    <li class="footer__section-one__detail"><a href="<?php echo get_permalink(84); ?>" class="footer__section-one__link">Actualités</a></li>
                    <li class="footer__section-one__detail"><a href="<?php echo get_permalink(117); ?>" class="footer__section-one__link">Ateliers</a></li>
                    <li class="footer__section-one__detail"><a href="<?php echo get_permalink(146); ?>" class="footer__section-one__link">A Propos</a></li>
                    <li class="footer__section-one__detail"><a href="<?php echo get_permalink(169); ?>" class="footer__section-one__link">Contact</a></li>
                </ul>
            </section>
        </div>
        <div class="footer__section-two">
            <div class="footer__section-two__copyright">
                <p class="footer__section-two__date">
                    <?php echo $easy_options['copyright'];?>
                </p>
            </div>
            <div class="footer__section-two__social">
                <a href="<?php echo $easy_options['youtube'];?>" class="footer__section-two__link">
                    <img src="<?php echo $easy_options['imageyoutube'];?>" class="footer__section-two__logo"alt="Youtube" width="167" height="167"/>
                </a>
                <a href="<?php echo $easy_options['twitter'];?>" class="footer__section-two__link">
                    <img src="<?php echo $easy_options['imagetwitter'];?>" class="footer__section-two__logo"alt="Twitter" width="167" height="167"/>
                </a>
                <a href="<?php echo $easy_options['facebook'];?>" class="footer__section-two__link">
                    <img src="<?php echo $easy_options['imagefacebook'];?>" class="footer__section-two__logo"alt="Facebook" width="167" height="167"/>
                </a>
                <a href="<?php echo $easy_options['instagram'];?>" class="footer__section-two__link">
                    <img src="<?php echo $easy_options['imageinstagram'];?>" class="footer__section-two__logo"alt="Instagram" width="167" height="167"/>
                </a>
            </div>
            <div class="footer__section-two__back">
                <a href="#" class="footer__section-two__high"><?php _e('Revenir en haut','b');?></a>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"/></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() .'/scripts/menu-metrage.js';?>"/></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() .'/scripts/jquery-2.2.1.min.js';?>"/></script>

</body>
</html>
