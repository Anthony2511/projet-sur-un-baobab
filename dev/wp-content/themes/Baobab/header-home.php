<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Baobab - <?php the_title();?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/css/styles.css';?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="site-container">
            <div class="site-pusher">
                <header class="topbar--other">
                    <div class="topbar__lang">
                        <a href="#" class="topbar__lang__detail topbar__lang__detail--active">Français</a>
                        <a href="#" class="topbar__lang__detail">Espagnol</a>
                        <a href="#" class="topbar__lang__detail">Anglais</a>
                    </div>
                    <figure class="topbar__figure-image">
                        <img class="topbar__image" src="<?php the_field('home_logo');?>" alt="logo du site"/>
                    </figure>
                    <a href="#" class="topbar__icon" id="topbar__icon"></a>
                    <nav class="topbar__nav--bottom">
                        <a href="<?php echo get_home_url(); ?>" class="topbar__icon" id="topbar__icon"></a>
                        <h1 aria-level="1"><?php _e('Navigation principale','b');?></h1>
                        <ul class="topbar__nav__list">
                            <?php foreach (b_get_menu_items('main-nav') as $navItem): ?>
                                <a href="<?php echo $navItem->url;?>" class="topbar__nav__list__link">
                                    <div class="topbar__nav__list__link__container">
                                       <li class="topbar__nav__list__link__container__detail --<?php echo $navItem->icon;?>"><?php echo $navItem->label;?></li>
                                   </div>
                                </a>
                            <?php endforeach; ?>
                        </ul>
                    </nav>
                </header>
                <div class="site-content">
                    <div class="site-content__container">
                    </div>
                </div>
                <div class="site-cache" id="site-cache">
                </div>
            </div>
        </div>
