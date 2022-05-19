<?php
/**
 * L'entête « header » de chacune des pages de notre site
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head() ?>
    <style>
        .site__footer{
            background-color: <?= get_theme_mod("couleur_background_footer"); ?>;
        }
        .site__header{
            background-color: <?= get_theme_mod("couleur_background_body"); ?>;
        }
       
    </style>
    <?php show_admin_bar(true); ?>
</head>
<body  <?php body_class("site"); ?>>
<header class="site__header">
    <?php echo get_custom_logo();  ?>
    <!-- <h1 class="header__titre">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">    
            <?php bloginfo('name'); ?></h1>
        </a> -->
    <h2 class="header__description"><?php bloginfo('description'); ?></h2>
    <section class="util">

        <?php get_search_form(); ?>
    </section>
</header>
<section class="site__barre">
    <input type="checkbox"  id="chk-burger">
    <label for="chk-burger" id="burger" class= "burger">
       <div class="burger__ligne"></div>
       <div class="burger__ligne"></div>
       <div class="burger__ligne"></div>
    </label>
    <?php 
    $icone = '<svg width="15px" height="15px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#000000"><path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>';
    wp_nav_menu(array("menu"=>"principal",
                            "container"=>"nav", 
                            "link_before"=>$icone)); ?>
</section>
