<?php
$hero_auteur = get_theme_mod('hero_auteur', 'Default Title'); 
?>
<?php get_header() ?>
    <section class="populaire__single">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="populaire__article">
                <?php 
                if (has_post_thumbnail())
                the_post_thumbnail(); ?>
                <h2 class="populaire__titre__single"><?php the_title(); ?></h2>
                <div class="populaire__contenu__single"><?php the_content(); ?></div>
                <p>Auteur: <?php echo $hero_auteur;  ?></p>
                <p>Date de publication: <?php  echo the_field ('date_publication'); ?></p>
                <p>Température minimum&nbsp;<?php  echo the_field ('temperature_minimum'); ?>&#xB0;C</p>
                <p>Température maximum&nbsp;<?php echo the_field ('temperature_maximum'); ?>&#xB0;C</p>
                <p>Température moyenne&nbsp;<?php echo the_field ('temperature_moyenne'); ?>&#xB0;C</p>
            </article>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <?php get_footer(); ?>
</body>
</html>