<?php


function theme_31w_customize_register($wp_customize) {
  // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
  $wp_customize->add_section('hero_section', array(
    'title' => __('Hero Section', 'theme_31w'),
    'priority' => 30,
));
//////////////////////////////////////////////////////// l'auteur
$wp_customize->add_setting('hero_auteur', array(
  'default' => __('Gabriel Chan-Dion', 'theme_31w'),
  'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('hero_auteur', array(
  'label' => __('Auteur', 'theme_31w'),
  'section' => 'hero_section',
  'type' => 'text',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_couleur', array(
  'label' => __('Couleur du texte', 'theme_31w'),
  'section' => 'hero_section',
)));

//////////////////////////////////////////////////////// Nouvelle section footer

  $wp_customize->add_section('footer_section', array(
    'title' => __('Section pied de page', 'theme_31w'),
    'priority' => 30,
));
////////////////////////////////////////////////////////// Champ mission
$wp_customize->add_setting('footer_mission', array(
  'default' => __('Mission du club de voyage', 'theme_31w'),
  'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('footer_mission', array(
  'label' => __('Mission', 'theme_31w'),
  'section' => 'footer_section',
  'type' => 'textarea',
));
//////////////////////////////////////////////////////// Section 404
$wp_customize->add_section('Page404_section', array(
  'title' => __('Section 404', 'theme_31w'),
  'priority' => 30,
));
//////////////////////////////////////////////////////// Section 404 -- Title
$wp_customize->add_setting('Page404_title', array(
  'default' => __('Page 404', 'theme_31w'),
  'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('Page404_title', array(
  'label' => __('Title', 'theme_31w'),
  'section' => 'Page404_section',
  'type' => 'text',
));
//////////////////////////////////////////////////////// Section 404 --> Description
$wp_customize->add_setting('Page404_description', array(
  'default' => __('Description de la page 404', 'theme_31w'),
  'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('Page404_description', array(
  'label' => __('Description', 'theme_31w'),
  'section' => 'Page404_section',
  'type' => 'textarea',
));

//////////////////////////////////////////////////////// Section 404 --> Image en arrière plan
$wp_customize->add_setting('Page404_background', array(
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'Page404_background', array(
  'label' => __('Image en background', 'theme_31w'),
  'section' => 'Page404_section',
)));
//////////////////////////////////////////////////////// Section 404 --> Couleurs
$wp_customize->add_setting('Page404_couleur', array(
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'Page404_couleur', array(
  'label' => __('Couleur du texte', 'theme_31w'),
  'section' => 'Page404_section',
)));

////////////////////////////////////////////////// image en background de la zone hero
for ($k=0; $k<3; $k++)
{
  $wp_customize->add_setting('hero_background_' . $k, array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_' . $k, array(
    'label' => __('Image en background ' . ($k+1) , 'theme_31w'),
    'section' => 'hero_section',
  )));

}
}
?>