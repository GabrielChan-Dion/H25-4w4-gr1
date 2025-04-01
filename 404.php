<?php
/**
 *  Erreur 404, si une page n'est pas trouvable, cette page affichera
 */
?>
 <?php 
    $Page404_title = get_theme_mod('Page404_title', 'Default Title'); 
    $Page404_couleur = get_theme_mod('Page404_couleur', 'Default Title'); 
    $Page404_description = get_theme_mod('Page404_description', 'Default Title'); 
    $Page404_background = get_theme_mod("Page404_background", 'Default Title');
?>
<?php get_header() ?>
    <section class="page404" style="background-image: url('<?php echo $Page404_background ?>'); background-repeat: no-repeat; background-size: cover;" >
        
                <H1 class="page404__titre"><?php echo $Page404_title?></H1>
                <p class="page404__description"> <?php echo $Page404_description?></p>
                    
                
                <nav class="page404__nav">
                    <?php wp_nav_menu(array(
                                'menu' => 'Page404',
                                'container' => 'nav',
                                'container_class' => 'page404__menu',
                    )); ?>
                </nav>
                <div class="page404__recherche"><?php get_search_form();?></div>
          
    </section>
    <?php get_footer(); ?>
</body>
</html>