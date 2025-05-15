<?php
/**
 * Gabarit permettant d'afficher une carte
*/
?>
<article class="carte carte--grande">
    <div class="carte__contenu">
        <?php
        if (has_post_thumbnail()) {
            // permet d'afficher la petite image associé à l'article (image mise en avant)
            the_post_thumbnail('thumbnail'); }
        ?>
        <h2 class="carte__titre"><?php the_title(); ?></h2>
        <p class="carte__description"><?php echo wp_trim_words(get_the_excerpt(), 20, "...") ; ?></p>
        <a class="carte__bouton carte__bouton--actif"  href="<?php the_permalink(); ?>">Suite</a>
            <?php //Affiche les category
            $categories = get_the_category();
            if ($categories) {
                $output = array();

                foreach ($categories as $category) {
                    if ($category->slug === 'populaire') {
                        continue; // enlève la catégory populaire
                    }

                    $output[] = '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
                }

                echo implode(', ', $output);
            }
            ?>
        <p>Température minimum&nbsp;<?php  echo the_field ('temperature_minimum'); ?>&#xB0;C</p>
        <p>Température maximum&nbsp;<?php echo the_field ('temperature_maximum'); ?>&#xB0;C</p>
        <p>Température moyenne&nbsp;<?php echo the_field ('temperature_moyenne'); ?>&#xB0;C</p>
    </div>
</article>