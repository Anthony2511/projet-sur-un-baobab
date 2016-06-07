<?php
if(is_page()){
    query_posts([
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'ASC',
        'post_type' => 'post'
    ]);
}
?>
</main>
<footer class="footer">
    <div class="footer__opacity">
        <div class="footer__section-one">
            <div class="footer__section-one__contact">
                <h2 aria-level="2" class="footer__section-one__title">Nous contacter</h2>
                <p class="footer__section-one__numero">
                    WhatsApp : +32495348966
                </p>
                <p class="footer__section-one__numero">
                    Téléphone : +32495348966
                </p>
            </div>
            <div class="footer__section-one__contact">
                <h2 aria-level="2" class="footer__section-one__title">Dernières nouvelles</h2>
                <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
                    <a href="<?php the_permalink();?>" class="footer__section-one__nouvelles">
                        <?php the_title();?>
                    </a>
                <?php endwhile; endif; ?>
            </div>
            <div class="footer__section-one__contact">
                <h2 aria-level="2" class="footer__section-one__title">Navigation</h2>
                <ul class="footer__section-one__list">
                    <li class="footer__section-one__detail"><a href="<?php echo get_home_url(); ?>" class="footer__section-one__link">Accueil</a></li>
                    <li class="footer__section-one__detail"><a href="<?php echo get_permalink(108); ?>" class="footer__section-one__link">Projets</a></li>
                    <li class="footer__section-one__detail"><a href="<?php echo get_permalink(84); ?>" class="footer__section-one__link">Actualités</a></li>
                    <li class="footer__section-one__detail"><a href="<?php echo get_permalink(117); ?>" class="footer__section-one__link">Ateliers</a></li>
                    <li class="footer__section-one__detail"><a href="<?php echo get_permalink(146); ?>" class="footer__section-one__link">A Propos</a></li>
                    <li class="footer__section-one__detail"><a href="contact.php" class="footer__section-one__link">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="footer__section-two">
            <div class="footer__section-two__copyright">
                <p class="footer__section-two__date">
                    &copy; 2016 | Design by Baobab
                </p>
            </div>
            <div class="footer__section-two__social">
                <a href="#" class="footer__section-two__link">
                    <img src="../img/Youtube.png" class="footer__section-two__logo"alt="Youtube" width="167" height="167"/>
                </a>
                <a href="#" class="footer__section-two__link">
                    <img src="../img/Twitter.png" class="footer__section-two__logo"alt="Twitter" width="167" height="167"/>
                </a>
                <a href="#" class="footer__section-two__link">
                    <img src="../img/Facebook.png" class="footer__section-two__logo"alt="Facebook" width="167" height="167"/>
                </a>
                <a href="#" class="footer__section-two__link">
                    <img src="../img/Instagram.png" class="footer__section-two__logo"alt="Instagram" width="167" height="167"/>
                </a>
            </div>
            <div class="footer__section-two__back">
                <a href="#" class="footer__section-two__high">Revenir en haut</a>
            </div>
        </div>
    </div>
    <?php wp_footer();?>
</footer>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"/></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() .'/scripts/javascript.js';?>"/></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() .'/scripts/menu-metrage.js';?>"/></script>
</body>
</html>
