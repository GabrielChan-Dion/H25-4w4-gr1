<?php
/**
 *  Erreur 404, si une page n'est pas trouvable, cette page affichera
 */
?>
<?php get_header() ?>
<h1>404.php</h1>
    <section class="populaire">
        <div class="global">
            <H1>Page 404</H1>
            <p class="404_description">Vous ne trouvez pas ce que vous chercher?</p>
            <div class="404_recherche"><?php get_search_form();?></div>
        </div>
    </section>
    <?php get_footer(); ?>
</body>
</html>