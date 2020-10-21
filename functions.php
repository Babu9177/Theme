<?php

function tv9_theme_styles() {
	wp_enqueue_style( 'common-header', get_template_directory_uri() . '/css/common-header-footer.css' );
	wp_enqueue_style( 'common-header-d', get_template_directory_uri() . '/css/common-header-footer-d.css' );
	wp_enqueue_script( 'common', get_template_directory_uri() .'/js/common.js', array( 'jquery' ),'',true );
	wp_enqueue_script( 'bxslider', get_template_directory_uri() .'/js/jquery.bxslider.min.js', array( 'jquery' ),'',true );
	wp_enqueue_script( 'jquery', get_template_directory_uri() .'/js/jquery-3.5.1.min.js', array( 'jquery' ),'',true );
    


}
add_action('wp_enqueue_scripts', 'tv9_theme_styles');


function tv9_theme_setup() {
	
	// Navigation Menus
	register_nav_menus(array(
		'header' => __('Header Menu')
	));
	add_theme_support( 'brand', array(
	'height'      => 48,
	'width'       => 48,
	'header-text' => array( 'site-title', 'site-description' ),
) );
	add_theme_support('custom_header');
	add_theme_support('custom_background');
	add_theme_support('post-thumbnails');
    add_image_size('breaking-news', 300, 300);
	add_image_size('top-news-big', 220, 220);
    add_image_size('top-news', 50, 50);
	add_theme_support('post-formats', array('aside', 'gallery', 'link','video'));
}
add_action('after_setup_theme', 'tv9_theme_setup');


if ( !function_exists( 'tv9_sidebars_init' ) ) {
	function tv9_sidebars_init() {
		register_sidebar(array(
			'id' => 'header-widget',
			'name' => esc_html__( 'TV9 Header Widget Area', 'veegam-news' ),
			'description'   => esc_html__( 'The widgetized area in header.', 'tv9-news' ),
			'before_widget' => '<section id="%1$s" class="tv9-widget-home %2$s"><div class="tv9-main-box">',
			'after_widget' => '</div></section>',
			'before_title' => '<div class="tv9-widget-home-head"><h4 class="tv9-widget-home-title"><span class="tv9-widget-home-title">',
			'after_title' => '</span></h4></div>',
		));
		register_sidebar(array(
			'id' => 'homepage-widget',
			'name' => esc_html__( 'TV9 Homepage Widget Area', 'veegam-news' ),
			'description'   => esc_html__( 'The widgetized area in the main content area of the homepage.', 'tv9-news' ),
			'before_widget' => '<section id="%1$s" class="tv9-widget-home %2$s"><div class="tv9-main-box">',
			'after_widget' => '</div></section>',
			'before_title' => '<div class="tv9-widget-home-head"><h4 class="tv9-widget-home-title"><span class="tv9-widget-home-title">',
			'after_title' => '</span></h4></div>',
		));
		register_sidebar(array(
			'id' => 'homepage-sidebar-widget',
			'name' => esc_html__( 'TV9 Homepage Sidebar Widget Area', 'veegam-news' ),
			'description'   => esc_html__( 'The widgetized area in the main content area of the homepage sidebar.', 'tv9-news' ),
			'before_widget' => '<section id="%1$s" class="tv9-widget-home %2$s"><div class="tv9-main-box">',
			'after_widget' => '</div></section>',
			'before_title' => '<div class="tv9-widget-home-head"><h4 class="tv9-widget-home-title"><span class="tv9-widget-home-title">',
			'after_title' => '</span></h4></div>',
		));
		register_sidebar(array(
			'id' => 'category-sidebar-widget',
			'name' => esc_html__( 'TV9 Category Sidebar Widget Area', 'veegam-news' ),
			'description'   => esc_html__( 'The widgetized area of category page sidebar.', 'tv9-news' ),
			'before_widget' => '<section id="%1$s" class="tv9-widget-home %2$s"><div class="tv9-main-box">',
			'after_widget' => '</div></section>',
			'before_title' => '<div class="tv9-widget-home-head"><h4 class="tv9-widget-home-title"><span class="tv9-widget-home-title">',
			'after_title' => '</span></h4></div>',
		));
		register_sidebar(array(
			'id' => 'category-home-widget',
			'name' => esc_html__( 'TV9 Category Homepage Widget Area', 'veegam-news' ),
			'description'   => esc_html__( 'The widgetized area of category homepage.', 'tv9-news' ),
			'before_widget' => '<section id="%1$s" class="tv9-widget-home %2$s"><div class="tv9-main-box">',
			'after_widget' => '</div></section>',
			'before_title' => '<div class="tv9-widget-home-head"><h4 class="tv9-widget-home-title"><span class="tv9-widget-home-title">',
			'after_title' => '</span></h4></div>',
		));
		register_sidebar(array(
			'id' => 'footer-home-widget',
			'name' => esc_html__( 'TV9 Footer Widget Area', 'veegam-news' ),
			'description'   => esc_html__( 'The widgetized area of footer.', 'tv9-news' ),
			'before_widget' => '<section id="%1$s" class="tv9-widget-home %2$s"><div class="tv9-main-box">',
			'after_widget' => '</div></section>',
			'before_title' => '<div class="tv9-widget-home-head"><h4 class="tv9-widget-home-title"><span class="tv9-widget-home-title">',
			'after_title' => '</span></h4></div>',
		));
	}
}
add_action( 'widgets_init', 'tv9_sidebars_init' );

include( get_template_directory() . '/widgets/widget-breaking-trending.php');
include( get_template_directory() . '/widgets/widget-breaking.php');
include( get_template_directory() . '/widgets/widget-top9-menu.php');
include( get_template_directory() . '/widgets/widget-section-top.php');
include( get_template_directory() . '/widgets/widget-section-top-ad.php');




?>