<?php
/**
 *  Erreur 404, si une page n'est pas trouvable, cette page affichera
 */
?>
 <?php 
    $Page404_description = get_theme_mod('Page404_description', 'Default Title'); 
?>
<?php get_header() ?>
    <section class="page404">
        <div class="page404__div">
            <H1 class="page404__titre">Erreur 404</H1>
            <p class="page404__description"> <?php echo $Page404_description?></p>
            <h2 class="page404__titre_secondaire">Vous ne trouvez pas ce que vous chercher?</h2>
            <p>Essayer à nouveau ou explorer nos autres options!</p>
            <div class="page404__recherche"><?php get_search_form();?></div>
          
        </div>
    </section>
    <?php get_footer(); ?>
</body>
</html>