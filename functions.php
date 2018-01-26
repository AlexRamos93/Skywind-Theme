<?php 

	function wpbootstrap_scripts_with_jquery()
	{
		// Register the script like this for a theme:
		wp_register_script( 'custom-script', get_template_directory_uri() . '/public/js/bootstrap.min.js', array( 'jquery' ) );
		//Register the ajax in the theme:
		wp_register_script( 'ajax', get_template_directory_uri() . '/public/js/ajax.js', array( 'jquery' ), '', true);
		wp_enqueue_script( 'ajax');
		// For either a plugin or a theme, you can then enqueue the script:
		wp_enqueue_script( 'custom-script' );
		// Register the script for jquery:
		wp_enqueue_script( 'bootstrap-jquery', get_stylesheet_directory_uri() . '/public/js/jquery-3.2.1.min.js' );
		

	}
	
	add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );
	
	// Support to menus option in the dashboard
	add_theme_support( 'menus' );

	// Support to posts have thumbnails
	add_theme_support('post-thumbnails');

	//Support for posts format
	add_theme_support('post-formats', array('aside', 'gallery', 'link'));

	
	//remove the wpautop filter
	remove_filter( 'the_content', 'wpautop' );
	remove_filter( 'the_excerpt', 'wpautop' );

	//Customizer File
	require get_template_directory() . '/inc/customizer-index.php';

?>