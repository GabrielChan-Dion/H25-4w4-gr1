<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4W4-Voyage</title>
    <!-- link rel="stylesheet" href="normalize.css" -->
    <!-- link rel="stylesheet" href="style.css" -->
    <?php wp_head(); ?> 
</head>
<body>
    <header>
        <div class="entete">
            <figure class="entete__logo">
                <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                }
                ?>
            </figure>
            <label for="chk__burger" class="burger">
                <img src="https://s2.svgbox.net/hero-solid.svg?ic=menu-alt-1&color=000" width="32" height="32">
            </label>
            <input type="checkbox" id="chk__burger" class="chk__burger">
            <div class="entete__nav">
                <?php wp_nav_menu(array(
                            'menu' => 'principal',
                            'container' => 'nav',
                            'container_class' => 'entete__menu',
                )); ?>
                <div class="entete__recherche">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </header>