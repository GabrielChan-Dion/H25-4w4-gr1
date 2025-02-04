<?php
/**
 * functions.php
 */
?>
<?php
function ajouter_css_dans_header()
{
    wp_enqueue_style(
        'style_normalize',
        get_template_directory_uri() . '/normalize.css',
        array(),
        filemtime(get_template_directory() . '/normalize.css'));

    wp_enqueue_style(
        'style_principal',
        get_template_directory_uri() . '/style.css',
        array(),
        filemtime(get_template_directory() . '/style.css'));
}
add_action("wp_enqueue_scripts", "ajouter_css_dans_header")

?>