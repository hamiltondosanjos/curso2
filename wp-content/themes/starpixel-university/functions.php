<?php 


function starpixel_files(){
	// Essa funçao serve para linkar o BootStrap css e javascript
	wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array('jquery'), '4.1.1', true );
	// Essa Funçao chama o AngularJs
	wp_enqueue_script( 'angular-js', 'https://ajax.googleapis.com/ajax/libs/angularjs/1.2.32/angular.min.js', array('jquery'), '1.2.32', true );

	wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css', array(), '4.1.1', 'all' );
	//Script chama o css
	//wp_enqueue_style('starpixel_main_styles', get_template_directory_uri());
	//
	wp_enqueue_script('main-starpixel-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, 1.0, true);
	//Script chama o css
	wp_enqueue_style('starpixel_main_styles', get_stylesheet_uri());
	// Adciona o awesome fonts
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

	wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
}
add_action('wp_enqueue_scripts', 'starpixel_files');

function starpixel_features() {
	add_theme_support('title-tag');
}

add_action('after_setup_theme', 'starpixel_features');
