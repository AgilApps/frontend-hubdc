<!DOCTYPE html>
<html <?php language_attributes() ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>" />
    <title><?php wp_title('-', true, 'right'); bloginfo() ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>css/foundation.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>css/normalize.css">
  </head>
  <body>
    <div id="wrapper">
    <header>
      <div class="logo">
        <img src="<?php bloginfo('template_url')?>../images/logo_2.png" alt="logo" />
        <figcaption>
          <h1>
            <a href="<?php bloginfo('url') ?>"><?php bloginfo() ?></a>
          </h1>
        </figcaption>
      </div>
      <nav>
        <?php wp_nav_menu();  ?>
      </nav>
    </header>
