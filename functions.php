<?php

function tv9_theme_styles() {
		
	wp_enqueue_style( 'common-header', get_template_directory_uri() . '/css/common-header-footer.css' );
	wp_enqueue_script( 'jquery35', get_template_directory_uri() .'/js/jquery-3.5.1.min.js', array( ),'',false );
	wp_enqueue_script( 'bxslider', get_template_directory_uri() .'/js/jquery.bxslider.min.js',array('jquery35' ),'',false );
	wp_enqueue_script( 'mycommon', get_template_directory_uri() .'/js/common.js',array('jquery35' ),'',false );
	wp_enqueue_script( 'theia-sticky-sidebar', get_template_directory_uri() .'/js/theia-sticky-sidebar.min.js',array('jquery35' ),'',false );
	
    


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
    add_image_size('breaking-news', 400, 400);
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
			'before_widget' => '',
			'after_widget' => '',
		));
		register_sidebar(array(
			'id' => 'homepage-widget',
			'name' => esc_html__( 'TV9 Homepage Widget Area', 'veegam-news' ),
			'description'   => esc_html__( 'The widgetized area in the main content area of the homepage.', 'tv9-news' ),
			'before_widget' => '',
			'after_widget' => '',
		));
		register_sidebar(array(
			'id' => 'homepage-sidebar-widget',
			'name' => esc_html__( 'TV9 Homepage Sidebar Widget Area', 'veegam-news' ),
			'description'   => esc_html__( 'The widgetized area in the main content area of the homepage sidebar.', 'tv9-news' ),
			'before_widget' => '',
			'after_widget' => '',
		));
		register_sidebar(array(
			'id' => 'category-sidebar-widget',
			'name' => esc_html__( 'TV9 Category Sidebar Widget Area', 'veegam-news' ),
			'description'   => esc_html__( 'The widgetized area of category page sidebar.', 'tv9-news' ),
			'before_widget' => '',
			'after_widget' => '',
		));
		register_sidebar(array(
			'id' => 'category-home-widget',
			'name' => esc_html__( 'TV9 Category Homepage Widget Area', 'veegam-news' ),
			'description'   => esc_html__( 'The widgetized area of category homepage.', 'tv9-news' ),
			'before_widget' => '',
			'after_widget' => '',
		));
		register_sidebar(array(
			'id' => 'footer-home-widget',
			'name' => esc_html__( 'TV9 Footer Widget Area', 'veegam-news' ),
			'description'   => esc_html__( 'The widgetized area of footer.', 'tv9-news' ),
			'before_widget' => '',
			'after_widget' => '',
		));
	}
}
add_action( 'widgets_init', 'tv9_sidebars_init' );

include( get_template_directory() . '/widgets/widget-breaking-trending.php');
include( get_template_directory() . '/widgets/widget-breaking.php');
include( get_template_directory() . '/widgets/widget-top9-menu.php');
include( get_template_directory() . '/widgets/widget-section-newstop9.php');
include( get_template_directory() . '/widgets/widget-section-newstop9-right.php');
include( get_template_directory() . '/widgets/widget-section-tag.php');
include( get_template_directory() . '/widgets/widget-section-tag-video.php');
include( get_template_directory() . '/widgets/widget-section-tag-gallery.php'); 
include( get_template_directory() . '/widgets/widget-section-news-4-col.php'); 
include( get_template_directory() . '/widgets/widget-section-news-6-col.php'); 

//breadcrumb

function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}

//time ago

function time_ago( $type = 'post' ) {
    $d = 'comment' == $type ? 'get_comment_time' : 'get_post_time';

    return human_time_diff($d('U'), current_time('timestamp')) . " " . __('ago');

}



?>