<footer>
    <?php
    $footer_mission = get_theme_mod('footer_mission', 'Default Title');
    
    ?>
    <div class="piedpage global">
        <section class="piedpage__s1">
         
                <?php wp_nav_menu(array(
                    "menu"=> "externe",
                    "container" => "nav",
                    "container_class" => "piedpage__s1__externe"
                )); ?>
    
            <div class="piedpage__s1__adresse">
                <div class="piedpage__s1__adresse__coord">
                Le Club Voyage Nature vous invite à explorer des destinations sauvages et préservées, pour vivre des aventures authentiques en harmonie avec la nature 
                </div>
                <div class="piedpage__s1__adresse__recherche">
                    <?php get_search_form();   ?>
                </div>
            </div>
            <div class="piedpage__s1__description">
                <?php echo $footer_mission; ?>
            </div>
        </section>
        <section class="piedpage__s2"></section>
      
        
    </div>
</footer>
<?php wp_footer() ?>