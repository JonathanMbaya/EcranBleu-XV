<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>


    <!-- BALISES META DONNEES -->
    
    <meta charset="UTF-8">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="follow"/>
    <meta name="author" content="Jonathan MBAYA" />
    <meta name="copyright" content="EcranBleu XV" />

    <!-- Feuilles de style -->
    <link rel="stylesheet" href="style.css">


    <!-- Link vers les polices du site -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

    <!-- Logo icon -->
    <link href="<?php echo get_template_directory_uri(); ?>/" rel="icon">


    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/ddf42ed228.js" crossorigin="anonymous"></script>


    <!-- TITRE DE LA PAGE DANS L'ONGLET-->
    <title> <?php the_title(); ?> </title>

    <?php wp_head(); ?>
    
</head>

<body <?php body_class();?>>


<!-- SCROLL TOP -->

<div id="top"></div>

<!-- METTRE LE SCROLL TO ICI -->

<a href="#top"><i id="arrow-up" class="fa-solid fa-circle-arrow-up"></i></a>

<!-- MENU NAVBAR -->

    <nav class ="navbar navbar-expand-md navbar-light">

        <div id="logo">
            <a href="<?php  bloginfo ( 'url' ); ?>">
                <?php
                    echo '<img class="logo-labo img-fluid" src=" '.get_bloginfo('stylesheet_directory').'img/components/fondlogo.png"/>'
                ?>
            </a>
        </div>

        <button class="navbar-toggler pull-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div style = "color : white; "  class ="collapse navbar-collapse menu" id="navbarSupportedContent">

            <?php

            wp_nav_menu ( array (

                'theme_location' => 'main',
                'container' => false ,
                'menu_class' => 'menu' ,
                'fallback_cb' => '__return_false' ,
                'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                'profondeur' => 2 ,
                'walker' => new bootstrap_5_wp_nav_menu_walker()

            ));

            ?>

        </div>

    </nav>

<!-- FIN MENU NAVBAR -->

