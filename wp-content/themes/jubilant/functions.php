<?php

function load_stylesheets()
{
	wp_register_style('font', get_template_directory_uri() . '/css/font-awesome.css', array(), 1, 'all');
	wp_enqueue_style('font');

	wp_register_style('flexslider', get_template_directory_uri() . '/css/flexslider.css', array(), 1, 'all');
	wp_enqueue_style('flexslider');

	wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), 1, 'all');
	wp_enqueue_style('bootstrap');

	wp_register_style('styles', get_template_directory_uri() . '/style.css', array(), 1, 'all');
	wp_enqueue_style('styles');

	wp_register_style('custom', get_template_directory_uri() . '/custom.css', array(), 1, 'all');
	wp_enqueue_style('custom');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

//load scripts
function addjs()
{
	wp_enqueue_script('jquery');

	wp_register_script('jQuery', get_template_directory_uri() . '/js/jquery.js', array(), 1, 1, 1);
	wp_enqueue_script('jQuery');

	wp_register_script('flexslidermin', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array(), 1, 1, 1);
	wp_enqueue_script('flexslidermin');

	wp_register_script('script', get_template_directory_uri() . '/js/script.js', array(), 1, 1, 1);
	wp_enqueue_script('script');

	wp_register_script('custom', get_template_directory_uri() . '/custom.js', array(), 1, 1, 1);
	wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'addjs');



add_theme_support('post-thumbnails');
//menus suppport
add_theme_support('menus');

//register menus
register_nav_menus(
	array(
		'top-menu' => __('Top Menu', 'theme'),
	)
);

///menus suppport
add_theme_support('widget');

//register menus
register_sidebar(array(
	'name' => 'Footer Sidebar1',
	'id' => 'footer-sidebar-1',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
));

register_sidebar(array(
	'name' => 'Footer Sidebar2',
	'id' => 'footer-sidebar-2',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
));

register_sidebar(array(
	'name' => 'Footer Sidebar3',
	'id' => 'footer-sidebar-3',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
));

register_sidebar(array(
	'name' => 'copyrights',
	'id' => 'copyrights',
	'description' => 'Copyright area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
));

register_sidebar(array(
	'name' => 'blogg sidebar-1',
	'id' => 'blogg-sidebar-1',
	'description' => 'blogg sidebar area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
));

register_sidebar(array(
	'name' => 'undersida',
	'id' => 'undersida',
	'description' => 'undersida sidebar area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
));

//the_custom_logo
add_theme_support( 'custom-logo');

add_image_size('slider',1200,700,true);

?>