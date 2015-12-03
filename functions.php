<?php

	//load script cdomaterialize
	function script_cdomaterialdesign(){
		//load CSS CORE MATERIALIZE
		wp_enqueue_style( 'base-min-css', get_template_directory_uri() . '/css/base.min.css', array(), '1.0' );
		wp_enqueue_style( 'project-min-css', get_template_directory_uri() . '/css/project.min.css', array(), '1.0' );

		//load CSS Add
		wp_enqueue_style( 'font-awesome-min', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.4.0' );
		//wp_enqueue_style( 'font-awesome-min', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array(), '4.4.0' );

		wp_enqueue_style("style", get_stylesheet_uri() );

		//load JS CORE MATERIALIZE & jquery-2.1.1.min.js
		wp_enqueue_script( 'jquery-min', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.11.3', true );
		//wp_enqueue_script( 'jquery-min', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), '1.11.3', true );

		wp_enqueue_script( 'base-min-js', get_template_directory_uri() . '/js/base.min.js', array(), '1.0', true );
		wp_enqueue_script( 'project-min-js', get_template_directory_uri() . '/js/project.min.js', array(), '1.0', true );
	}

	add_action("wp_enqueue_scripts", "script_cdomaterialdesign");

	//set length the excerpt
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
		add_image_size("small_thumb", 214, 214, true);
		add_image_size("big_thumb", 300, 300, true);
		add_image_size("img_thumb", 150, 150, true);

		add_theme_support( 'post-formats', array( 'aside', 'link', 'image', 'quote' ) );
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

	// count posts per format-post
	function count_post_per_format($format, $operator){
		$argumens = array(
  			'tax_query' => array(
    			array(
      				'taxonomy' => 'post_format',
      				'field' => 'slug',
      				'terms' => $format,
				   	'operator' => $operator

    			)
  			),'posts_per_page' => -1
		);

		$total_post = count(query_posts( $argumens ));
		return $total_post;
	}

	// count posts per format-post
	function filter_post_per_format($format, $operator){
		$argumens = array('tax_query' => array(
			array(
			   	'taxonomy' => 'post_format',
			   	'field' => 'slug',
			   	'terms' => $format,
			   	'operator' => $operator,
			),
		), 'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1) );					

		return query_posts( $argumens );
	}
?>