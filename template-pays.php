<?php
/*
Template Name: pays
*/
?>
<?php get_header() ?>

<section class="populaire">
    <div class="pays">
        <h1 class="pays__titre">Les plus beaux Pays</h1>
        <p class="pays__description">
            Plongez au cœur de l’aventure et laissez-vous emporter par l’appel du large ! 
            Notre planète regorge de destinations incroyables, chacune promettant une expérience unique et mémorable. 
            Que vous rêviez de plages idylliques baignées de soleil, de sommets majestueux invitant à la randonnée, 
            de villes vibrantes d’histoire et de modernité, ou de rencontres culturelles authentiques, 
            il y a un pays fait pour vous.
        </p>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php if (in_category('galerie')) {
                the_content();
            } ?>
        <?php endwhile; endif; ?>
    </div>
        <?php vague($couleur_bas);?>

</section>

<?php get_footer(); ?>