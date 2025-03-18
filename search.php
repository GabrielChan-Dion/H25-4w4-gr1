<?php 
//search.php est le modèle pour afficher les résultats de recherche
?>
<?php get_header() ?>

    <section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="populaire__article__search">
                <h2 class="populaire__titre__search"><?php the_title(); ?></h2>
                <?php
            if (has_post_thumbnail()) {
                // permet d'afficher la petite image associé à l'article (image mise en avant)
                the_post_thumbnail('thumbnail'); }
            ?>
                <div class="populaire__contenu__search"><?php echo wp_trim_words(get_the_excerpt(),50,"..."); ?></div>
                <a class="carte__bouton carte__bouton--actif"  href="<?php the_permalink(); ?>">Suite</a>
            </article>
            <?php endwhile; endif; ?>
        </div>
    </section>
    
    <?php get_footer(); ?>
</body>
</html>