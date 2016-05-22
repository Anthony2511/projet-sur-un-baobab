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
                    <a href="#" class="topbar__icon" id="topbar__icon"></a>
                    <nav class="topbar__nav">
                        <h1 aria-level="1"><?php _e('Navigation principale','b');?></h1>
                        <ul class="topbar__nav__list">
                            <a href="<?php echo get_home_url(); ?>" class="topbar__nav__list__link topbar__nav__list__link--active">
                                <div class="topbar__nav__list__link__container">
                                    <li class="topbar__nav__list__link__container__detail topbar__nav__list__link__container__detail--home">Accueil</li>
                                </div>
                            </a>
                            <a href="projets.php" class="topbar__nav__list__link">
                                <div class="topbar__nav__list__link__container">
                                    <li class="topbar__nav__list__link__container__detail">Projets</li>
                                    <img src="../img/iconProjets.png" class="topbar__nav__list__link__container__icon" alt="Icon Projets" width="166" height="156"/>
                                </div>
                            </a>
                            <a href="actualités.php" class="topbar__nav__list__link">
                                <div class="topbar__nav__list__link__container">
                                    <li class="topbar__nav__list__link__container__detail">Actualités</li>
                                    <img src="../img/iconActu.png" class="topbar__nav__list__link__container__icon" alt="Icon Actualités" width="167" height="167"/>
                                </div>
                            </a>
                            <a href="index.php" class="topbar__nav__list__logo">
                                <img class="topbar__nav__list__logo__image" src="../img/Logo.svg" alt="Logo" width="945" height="958"/>
                            </a>
                            <a href="ateliers.php" class="topbar__nav__list__link">
                                <div class="topbar__nav__list__link__container">
                                    <li class="topbar__nav__list__link__container__detail">Ateliers</li>
                                    <img src="../img/iconAteliers.png" class="topbar__nav__list__link__container__icon" alt="Icon Ateliers" width="167" height="167"/>
                                </div>
                            </a>
                            <a href="propos.php" class="topbar__nav__list__link">
                                <div class="topbar__nav__list__link__container">
                                    <li class="topbar__nav__list__link__container__detail">A propos</li>
                                    <img src="../img/iconApropos.png" class="topbar__nav__list__link__container__icon" alt="Icon A propos" width="167" height="167"/>
                                </div>
                            </a>
                            <a href="contact.php" class="topbar__nav__list__link">
                                <div class="topbar__nav__list__link__container">
                                    <li class="topbar__nav__list__link__container__detail">Contact</li>
                                    <img src="../img/iconContact.png" class="topbar__nav__list__link__container__icon" alt="Icon Contact" width="167" height="167" />
                                </div>
                            </a>
                        </ul>
                    </nav>
                    <?php if (is_front_page()): ?>
                        <div class="topbar__intro">
                            <p class="topbar__intro__text">
                                <?php the_field('introduction_header'); ?>
                            </p>
                            <a href="<?php the_field('introduction_target') ?>" class="topbar__intro__link">
                                <span class="topbar__intro__link__button"><?php the_field('introduction_label') ?></span>
                            </a>
                        </div>
                        <figure class="topbar__scroll">
                            <img src="../img/Scroll.png" alt="Icone de scroll" />
                        </figure>
                    <?php endif; ?>
                </header>

                <div class="site-content">
                    <div class="site-content__container">
                    </div>
                </div>
                <div class="site-cache" id="site-cache">
                </div>
            </div>
        </div>
        <main>
