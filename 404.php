<?php
/**
 *  Erreur 404, si une page n'est pas trouvable, cette page affichera
 */
?>
 <?php 
    $Page404_description = get_theme_mod('404_description', 'Default Title'); 
?>
<?php get_header() ?>
    <section class="Page404">
        <div class="Page404_section">
            <H1 class="Page404_titre">Page 404</H1>
            <p class="Page404_description">Vous ne trouvez pas ce que vous chercher?</p>
            <div class="Page404_recherche"><?php get_search_form();?></div>
           <?php echo $Page404_description?>
            
        </div>
    </section>
    <?php get_footer(); ?>
</body>
</html>