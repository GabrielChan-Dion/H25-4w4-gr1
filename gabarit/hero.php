<?php  
$hero_auteur = get_theme_mod('hero_auteur', 'Default Title'); 
$image_count = get_theme_mod('number_of_hero_images', 3);
for ($k = 0; $k < $image_count; $k++){
$hero_background[$k] = get_theme_mod('hero_background_' . $k, 'Default Title'); 
}
?>
<section class="hero">
    <!-- ///////////////////////////////////////////////// hero__carrousel -->
    <?php foreach ($hero_background as $index => $image_url) : ?>
    <div class="hero__carrousel" style="background-image: url('<?php echo esc_url($image_url); ?>');"></div>
    <?php endforeach; ?>
    <div class="hero__radio">
        <?php foreach ($hero_background as $index => $image_url) : ?>
            <input
                class="hero__radio__input"
                type="radio"
                name="carrousel"
                data-id_carrousel="<?php echo $index; ?>"
                <?php echo $index === 0 ? 'checked="checked"' : ''; ?>
            >
        <?php endforeach; ?>
    </div>

    <!-- ///////////////////////////////////////////////// hero__contenu -->
    <div class="hero__contenu global">
        <h1 class="hero__titre">
            <?php  bloginfo('name'); ?>
        </h1>
        <p class="hero__description">
        <?php  bloginfo('description'); ?>
        </p>
        <a href="" class="hero__courriel">
            info@cmaisonneuve.qc.ca
        </a>
        <button class="hero__bouton">
            Inscription
        </button>
        <div class="hero__icone-app">
            <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
            <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="20" height="20">
            <img src="https://s2.svgbox.net/social.svg?ic=paypal&color=000000" width="20" height="20">
            <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=000000" width="20" height="20">
        </div>
        <p>Auteur:<?php echo $hero_auteur;  ?></p>
        </div>
    </section>