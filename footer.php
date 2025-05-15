<footer>
    <?php
    $footer_mission = get_theme_mod('footer_mission', 'Default Title');
    $footer_wave_couleur = get_theme_mod('footer_wave_couleur', '');
    $footer_image = get_theme_mod('footer_image', "");
    vague($footer_wave_couleur);
    
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
                <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=paypal&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=000000" width="20" height="20">
            </div>
            </div>
            <div class="piedpage__s1__description">
                <?php echo $footer_mission; ?>
                <img class="piedpage__image" src="<?php echo $footer_image?>" alt="">
            </div>
            
        </section>
        <section class="piedpage__s2"></section>
      
        
    </div>
</footer>
<?php wp_footer() ?>