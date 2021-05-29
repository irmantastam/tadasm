<?php

/**
 * Add theme support for various WordPress features.
 *
 * @return void
 */
function tadasm_setup() {
	// Support programmable title tag.
	add_theme_support( 'title-tag' );

	// Support custom logo.
	add_theme_support( 'custom-logo' );

	// Make theme available for translation.
	load_theme_textdomain( 'tadasm', get_template_directory() . '/languages' );

	// Register top menu.
	register_nav_menus(
		array(
			'top' => esc_html__( 'Top Menu', 'tadasm' ),
		)
	);
}
add_action( 'after_setup_theme', 'tadasm_setup' );

/**
 * Specify JS bundle path.
 *
 * @return void
 */
function tadasm_load_scripts() {
	wp_enqueue_script( 'main', get_template_directory_uri() . '/../dist/bundle.js' );
}
add_action( 'wp_enqueue_scripts', 'tadasm_load_scripts' );

/**
 * Specify CSS bundle path.
 *
 * @return void
 */
function tadasm_load_styles() {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/../dist/bundle.css' );
}
add_action( 'wp_enqueue_scripts', 'tadasm_load_styles' );

/**
 * Register widget area.
 *
 * @return void
 */
function tadasm_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'tadasm' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here to appear in your sidebar.', 'tadasm' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'tadasm_widgets_init' );

?>
