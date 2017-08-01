<!DOCTYPE html>
<html lang="sr-RS">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title('');?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php wp_head(); ?>
    <?php get_template_part('header-social'); ?>
</head>
<body>

<header id="header">
    <div id="header-logo">
        <a href="<?= home_url() ?>">
            <img src="<?= get_template_directory_uri() ?>/assets/crossover-logo.svg" alt="Crossover Trening Centar Logo">
        </a>
    </div>
    <div id="mobile-menu-button">
        <span></span>
        <span></span>
    </div>
    <nav>
        <?php wp_nav_menu([ 'theme_location'	=>	'header-menu' ]); ?>
    </nav>
</header>
