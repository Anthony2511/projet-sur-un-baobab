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
                <h1 aria-level="1" class="hidden">Baobab</h1>
                <header class="topbar topbar--other">
                    <div class="topbar__lang">
                        <a href="#" class="topbar__lang__detail topbar__lang__detail--active">Français</a>
                        <a href="#" class="topbar__lang__detail">Espagnol</a>
                        <a href="#" class="topbar__lang__detail">Anglais</a>
                    </div>
                    <figure class="topbar__figure-image">
                        <img class="topbar__image" src="<?php echo get_template_directory_uri() . '/../../uploads/2016/04/logo-150x150-1.png';?>" alt="logo du site"/>
                    </figure>
                    <nav class="topbar__nav--bottom">
                        <a href="<?php echo get_home_url(); ?>" class="topbar__icon" id="topbar__icon"></a>
                        <h2 aria-level="2" class="hidden"><?php _e('Navigation principale','b');?></h2>
                        <ul class="topbar__list">
                            <?php foreach (b_get_menu_items('main-nav') as $navItem): ?>
                                <li class="topbar__list__detail">
                                    <a href="<?php echo $navItem->url;?>" title="Vers la page <?php echo $navItem->label;?>" class="topbar__list__link topbar__list__link--<?php echo $navItem->icon;?>"><?php echo $navItem->label;?></a>
                               </li>
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
