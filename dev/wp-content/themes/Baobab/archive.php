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
<main class="container">
<div class="fil-ariane">
    <p class="fil-ariane__chemin">
        <a href="<?php echo get_home_url(); ?>" class="fil-ariane__link">Accueil</a> >
        <a href="<?php echo get_the_permalink();?>" class="fil-ariane__link">Actualités</a>
    </p>
</div>
<div class="actus">
    <h2 aria-level="2" class="actus__title">Actualités</h2>
        <a href="article.php" class="actus__link">
            <div class="actus__link__container">
                <img src="../img/article-actu1.jpg" alt="Projection de Safidn'i Pela" class="actus__link__images" width="624" height="416"/>
                <div class="actus__link__content">
                    <span class="actus__link__date">Le 17 février 2016 à 20h31</span>
                    <h3 aria-level="3" class="actus__link__title">Projection de Safidn'i Pela</h3>
                    <a href="article.php" class="actus__link__view">Voir l'article</a>
                </div>
                <div class="actus__link__opacity"></div>
            </div>
        </a>
        <a href="article.php" class="actus__link">
            <div class="actus__link__container">
                <img src="../img/article-actu2.jpg" alt="Baobab à un an déja" class="actus__link__images" width="1280" height="853"/>
                <div class="actus__link__content">
                    <span class="actus__link__date">Le 17 février 2016 à 20h31</span>
                    <h3 aria-level="3" class="actus__link__title">Sur un Baobab a un an !</h3>
                    <a href="article.php" class="actus__link__view">Voir l'article</a>
                </div>
                <div class="actus__link__opacity"></div>
            </div>
        </a>
        <a href="article.php" class="actus__link">
            <div class="actus__link__container">
                <img src="../img/article-actu1.jpg" alt="Projection de Safidn'i Pela" class="actus__link__images" width="624" height="416"/>
                <div class="actus__link__content">
                    <span class="actus__link__date">Le 17 février 2016 à 20h31</span>
                    <h3 aria-level="3" class="actus__link__title">Projection de Safidn'i Pela</h3>
                    <a href="article.php" class="actus__link__view">Voir l'article</a>
                </div>
                <div class="actus__link__opacity"></div>
            </div>
        </a>
        <a href="article.php" class="actus__link">
            <div class="actus__link__container">
                <img src="../img/article-actu2.jpg" alt="Baobab à un an déja" class="actus__link__images" width="1280" height="853"/>
                <div class="actus__link__content">
                    <span class="actus__link__date">Le 17 février 2016 à 20h31</span>
                    <h3 aria-level="3" class="actus__link__title">Sur un Baobab a un an !</h3>
                    <a href="article.php" class="actus__link__view">Voir l'article</a>
                </div>
                <div class="actus__link__opacity"></div>
            </div>
        </a>
        <a href="article.php" class="actus__link">
            <div class="actus__link__container">
                <img src="../img/article-actu1.jpg" alt="Projection de Safidn'i Pela" class="actus__link__images" width="624" height="416"/>
                <div class="actus__link__content">
                    <span class="actus__link__date">Le 17 février 2016 à 20h31</span>
                    <h3 aria-level="3" class="actus__link__title">Projection de Safidn'i Pela</h3>
                    <a href="article.php" class="actus__link__view">Voir l'article</a>
                </div>
                <div class="actus__link__opacity"></div>
            </div>
        </a>
        <a href="article.php" class="actus__link">
            <div class="actus__link__container">
                <img src="../img/article-actu2.jpg" alt="Baobab à un an déja" class="actus__link__images" width="1280" height="853"/>
                <div class="actus__link__content">
                    <span class="actus__link__date">Le 17 février 2016 à 20h31</span>
                    <h3 aria-level="3" class="actus__link__title">Sur un Baobab a un an !</h3>
                    <a href="article.php" class="actus__link__view">Voir l'article</a>
                </div>
                <div class="actus__link__opacity"></div>
            </div>
        </a>
    <div class="pictures__pagination">
        <a href="#" class="pictures__link pictures__link--active">1</a>
        <a href="#" class="pictures__link">2</a>
        <span class="pictures__etc">...</span>
        <a href="#" class="pictures__link">3</a>
        <a href="#" class="pictures__link">></a>
    </div>
</div>
<?php
    get_footer();
