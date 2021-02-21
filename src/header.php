<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="google-site-verification" content="f2b5hyRFMnivumtMVMrU_iyjgUJN-MMsN67yxiOkKo4" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/safari-pinned-tab.svg" color="#1a353d">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/assets/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="wrapper">
      <header class="header" role="banner">
        <div class="inner">
          <div class="header__logo logo">
            <a href="<?php echo home_url(); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tm_logo.jpg" alt="Logo" class="logo__image">
            </a>
          </div>
          <nav class="nav" role="navigation">
            <?php wp_nav_menu() ?>
          </nav>
          <div class="social-links">
            <a class="social-links__link social-links__link--instagram" href="https://www.instagram.com/innovamed.lt" target="_blank"/></a>
            <a class="social-links__link social-links__link--facebook" href="https://www.facebook.com/innovamed.lt" target="_blank"/></a>
          </div>
        </div>
      </header>
