<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="google-site-verification" content="f2b5hyRFMnivumtMVMrU_iyjgUJN-MMsN67yxiOkKo4" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.jpg" rel="shortcut icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="wrapper">
      <header class="header" role="banner">
        <div class="header__logo logo">
          <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tadas.jpg" alt="Logo" class="logo__image">
          </a>
        </div>
        <nav class="nav" role="navigation">
          <?php wp_nav_menu() ?>
          <div class="social-links">
            <a class="social-links__link social-links__link--instagram" href="https://www.instagram.com/tadas.physio/" target="_blank"/></a>
          </div>
        </nav>
      </header>
