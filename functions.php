<?php
function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );
add_filter('widget_text', 'do_shortcode');

// Image size for single posts
add_image_size( 'single-post-thumbnail', 1280, 720 );


/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

// Equipe

// Meus posts $types
function post_type_colaboradores() {
	// Equipe
	register_post_type('Colaboradores',
		array(
			'labels' => array(
				'name' => ('Colaboradores'),
				'singular_name' => ('Colaboradores')
			),
			//exibe as opcoes de dentro da página
			'public' => true,
			'has_archive' => true,
			'menu_icon' => 'dashicons-groups',
			'supports' => array('title','thumbnail','page-attribute'),
		)
	);
}
add_action('init', 'post_type_colaboradores');

?>
