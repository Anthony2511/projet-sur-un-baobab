<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Baobab - Accueil</title>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/css/styles.css';?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="site-container">
            <div class="site-pusher">
                <header class="topbar">
                    <div class="topbar__lang">
                        <a href="#" class="topbar__lang__detail topbar__lang__detail--active">Français</a>
                        <a href="#" class="topbar__lang__detail">Espagnol</a>
                        <a href="#" class="topbar__lang__detail">Anglais</a>
                    </div>
                    <figure class="topbar__figure-image">
                        <img class="topbar__image" src="<?php the_field('home_logo');?>" alt="logo du site"/>
                    </figure>
                    <nav class="topbar__nav">
                        <a href="<?php echo get_home_url(); ?>" class="topbar__icon" id="topbar__icon"></a>
                        <h1 aria-level="1"><?php _e('Navigation principale','b');?></h1>
                        <ul class="topbar__nav__list">
                            <?php foreach (b_get_menu_items('main-nav') as $navItem): ?>
                                <a href="<?php echo $navItem->url;?>" class="topbar__nav__list__link">
                                    <div class="topbar__nav__list__link__container">
                                       <li class="topbar__nav__list__link__container__detail topbar__nav__list__link__container__detail--<?php echo $navItem->icon;?>"><?php echo $navItem->label;?></li>
                                   </div>
                                </a>
                            <?php endforeach; ?>
                        </ul>
                    </nav>
                        <div class="topbar__intro">
                            <p class="topbar__intro__text">
                                <?php the_field('home_text-don'); ?>
                            </p>
                            <a href="<?php the_field('home_cible-button-don') ?>" class="topbar__intro__link">
                                <span class="topbar__intro__link__button"><?php the_field('home_text-button-don') ?></span>
                            </a>
                        </div>
                            <img src="<?php the_field('home_scroll-image');?>" class="topbar__scroll" alt="Icone de scroll" />
                            <p class="topbar__scroll-text">
                                Faire défiler
                            </p>

                </header>
                <div class="site-content">
                    <div class="site-content__container">
                    </div>
                </div>
                <div class="site-cache" id="site-cache">
                </div>
            </div>
        </div>
