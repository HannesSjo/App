<!DOCTYPE html>
<html <?php language_attributes(); ?>>

  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="theme-color" content="rgb(1, 26, 66, 50)">
    <title><?php bloginfo('name'); ?> |
          <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
         </title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Palanquin+Dark" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Asar" rel="stylesheet">
      <?php wp_head(); ?>
      <style>
        .hero{
          background-image:url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase.jpg'); ?>);
        }
      </style>
  </head>

  <body>
    <a name="Up"></a>
    <div class="hero">
      <nav class=" div.navbar-fixed-top navbar navbar-toggleable-md navbar-light bg-fadedd">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa fa-bars" aria-hidden="true"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!--ul class="navbar-nav mr-auto"-->
          <?php
wp_nav_menu( array(
    'container'          => "div",
    'menu_class'          => 'navbar-nav mr-auto',
    'theme_location' => 'my-custom-menu',
    'container_class' => 'custom-menu-class',
  ));
?>
      <!--/ul-->
    </div>
  </nav>
