<!DOCTYPE html>
<html lang="sr-RS">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title('');?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="HandheldFriendly" content="true">
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115643718-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-115643718-1');
	</script>
    
    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '507652569959042');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=507652569959042&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->

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
