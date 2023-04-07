<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
 wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array(), '1.0.0', 'all' );


}


// Enregistrement des menus
function theme_register_menus()
{
	register_nav_menus(array(
		'header' => __('Principal'),
		'footer' => __('Pied de page'),
	));
}
add_action('init', 'theme_register_menus');


// Personnalisation du thème
function montheme_customize_register($wp_customize)
{
	// Ajout d'une section pour le logo personnalisé
	$wp_customize->add_section('montheme_logo_section', array(
		'title'      => __('Logo personnalisé', 'montheme'),
		'priority'   => 30,
	));

	// Ajout de la fonctionnalité de logo personnalisé
	$wp_customize->add_setting('montheme_logo');

	// Ajout du contrôle pour téléverser le logo personnalisé
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'montheme_logo', array(
		'label'    => __('Téléverser votre logo', 'montheme'),
		'section'  => 'montheme_logo_section',
		'settings' => 'montheme_logo',
	)));
}
add_action('customize_register', 'montheme_customize_register');

// On utilise le hook wp_nav_menu_items pour ajouter le lien "Admin" dans le menu
function ajouter_lien_admin($items, $args)
{
	// On vérifie si l'utilisateur est connecté
	if (is_user_logged_in() && $args->theme_location == 'header') {
		// Si oui, on ajoute le lien "Admin" 
		$items .= '<li><a href="' . admin_url() . '">Admin</a></li>';
	}
	// On retourne la liste d'items
	return $items;
}
// On ajoute la fonction "ajouter_lien_admin" au hook wp_nav_menu_items
add_filter('wp_nav_menu_items', 'ajouter_lien_admin', 10, 2);