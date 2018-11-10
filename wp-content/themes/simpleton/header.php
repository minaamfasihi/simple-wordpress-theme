<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <!-- if your theme uses additional stylesheets etc, then this line will contain those -->
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <div class="container">
        <h1><?php bloginfo('name'); ?></h1>
        <span><?php bloginfo('description'); ?></span>
      </div>
    </header>