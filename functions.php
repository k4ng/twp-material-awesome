<?php

	//load script cdomaterialize
	function script_cdomaterialize(){
		wp_enqueue_style("style", get_stylesheet_uri() );

		//load CSS CORE MATERIALIZE
		wp_enqueue_style( 'base-min-css', get_template_directory_uri() . '/css/base.min.css', array(), '1.0' );
		wp_enqueue_style( 'project-min-css', get_template_directory_uri() . '/css/project.min.css', array(), '1.0' );

		//load CSS Add
		wp_enqueue_style( 'font-awesome-min', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.4.0' );

		//load JS CORE MATERIALIZE & jquery-2.1.1.min.js
		wp_enqueue_script( 'jquery-min', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.11.3', true );

		wp_enqueue_script( 'base-min-js', get_template_directory_uri() . '/js/base.min.js', array(), '1.0', true );
		wp_enqueue_script( 'project-min-js', get_template_directory_uri() . '/js/project.min.js', array(), '1.0', true );
	}

	add_action("wp_enqueue_scripts", "script_cdomaterialize");

	//the excerpt
	function get_excerpt_length(){
		return 20;
	}

	function return_excerpt_text(){
		return '';
	}

	add_filter('excerpt_more', 'return_excerpt_text');
	add_filter('excerpt_length', 'get_excerpt_length');

	function init_setup(){
		register_nav_menus(array(
			'main_menu' => 'Menu Utama',
			'menu_footer' => 'Menu Footer'
		));

		//thumbnail
		add_theme_support("post-thumbnails");
		add_image_size("small_thumb", 287, 214, true);
		add_image_size("big_thumb", 300, 300, true);
	}

	add_action("after_setup_theme","init_setup");

	function widget_setup(){
		register_sidebar(array(
			"name" => "Sidebar Left",
			"id" => "sidebar_left"
		));

		register_sidebar(array(
			"name" => "Footer Right",
			"id" => "footer_right"
		));
	}

	add_action("widgets_init", "widget_setup");
?>