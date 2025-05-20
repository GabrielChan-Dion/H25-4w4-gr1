<footer>
    <?php
    $footer_mission = get_theme_mod('footer_mission', 'Default Title');
    $footer_wave_couleur = get_theme_mod('footer_wave_couleur', '');
    $footer_image = get_theme_mod('footer_image', "");
    vague($footer_wave_couleur);
    
    //Icones sociaux
    for ( $i = 1; $i <= 3; $i++ ){
    $image_url = get_theme_mod( "image_link_image_$i" );
    $link_url  = get_theme_mod( "image_link_url_$i" );
}
    ?>
    <div class="piedpage global">
        <section class="piedpage__s1">
         
                <?php wp_nav_menu(array(
                    "menu"=> "principal",
                    "container" => "nav",
                    "container_class" => "piedpage__s1__externe"
                )); ?>
    
            <div class="piedpage__s1__adresse">
                <div class="piedpage__s1__adresse__coord">
                | info@cmaisonneuve.qc.ca <br>
                | 3800 Sherbrooke St E, Montreal, Quebec H1X 2A2<br>| Ouvert du Lundi au Vendredi 	7 a.m.–10:30 p.m.<br>| (514) 254-7131
                </div>
                <div class="piedpage__s1__adresse__recherche">
                    <?php get_search_form();   ?>
                </div>
                <div class="hero__icone-app">
                 <?php 
                if ( $image_url && $link_url ) ?>
                <a href="<?php echo esc_url( $link_url ); ?>">
                    <img src="<?php echo esc_url( $image_url ); ?>" alt="Image <?php echo $i; ?>" />
                </a>
            </div>
            </div>
            <div class="piedpage__s1__description">
                <?php echo $footer_mission; ?>
                <img src="<?php echo $footer_image?>" alt="" width="100" height="auto">
            </div>
            
        </section>
    </div>
</footer>
<?php wp_footer() ?>