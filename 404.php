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
    <section class="page404">
        <div class="page404__div" style="background-image: url('<?php echo $Page404_background ?>'); background-repeat: no-repeat">
                <H1 class="page404__titre"><?php echo $Page404_title?></H1>
                <p class="page404__description"> <?php echo $Page404_description?></p>
                    
                <div class="page404__recherche"><?php get_search_form();?></div>
            
          
        </div>
    </section>
    <?php get_footer(); ?>
</body>
</html>