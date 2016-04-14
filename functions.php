<?php

	//load script gut
	function script_gut(){
		//load CSS CORE
		wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.0' );

		//load CSS ICON
		wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css', array(), '4.0' );
		wp_enqueue_style( 'ionic-icon', get_template_directory_uri() . '/assets/ionicon/css/ionicons.min.css', array(), '2.0' );
		wp_enqueue_style( 'material-icon', get_template_directory_uri() . '/css/material-design-iconic-font.min.css', array(), '1.0' );

		//load CSS MATERIAL
		wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', array(), '1.0' );
		wp_enqueue_style( 'waves-effect', get_template_directory_uri() . '/css/waves-effect.css', array(), '1.0' );

		//PLUGIN CSS
		wp_enqueue_style( 'component', get_template_directory_uri() . '/assets/modal-effect/css/component.css', array(), '1.0' );
		wp_enqueue_style( 'dataTables', get_template_directory_uri() . '/assets/datatables/jquery.dataTables.min.css', array(), '1.0' );
		
		wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/owl-carousel/css/owl.carousel.css', array(), '1.3.2' );
		wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/assets/owl-carousel/css/owl.theme.css', array(), '1.3.2' );
		//wp_enqueue_style( 'owl-transitions', get_template_directory_uri() . '/assets/owl-carousel/css/css/prettify.css', array(), '1.3.2' );

		//Costume CSS
		wp_enqueue_style( 'helper', get_template_directory_uri() . '/css/helper.css', array(), '1.0' );
		wp_enqueue_style( 'style-material', get_template_directory_uri() . '/css/style-material.css', array(), '1.1' );

		wp_enqueue_style("style", get_stylesheet_uri() );

		//load JS CORE
		wp_enqueue_script( 'modernizr-js', get_template_directory_uri() . '/js/modernizr.min.js', array(), '2.1', true );
		wp_enqueue_script( 'jQuery-js', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.0', true );
		wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0', true );
		wp_enqueue_script( 'lazy-js', get_template_directory_uri() . '/js/jquery.lazy.min.js', array(), '0.6.4', true );

		wp_enqueue_script( 'waves-js', get_template_directory_uri() . '/js/waves.js', array(), '1.0', true );
		wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/js/wow.min.js', array(), '1.0', true );
		wp_enqueue_script( 'nicescroll-js', get_template_directory_uri() . '/js/jquery.nicescroll.js', array(), '1.0', true );
		wp_enqueue_script( 'scrollTo-js', get_template_directory_uri() . '/js/jquery.scrollTo.min.js', array(), '1.0', true );

		wp_enqueue_script( 'sparkline-js', get_template_directory_uri() . '/assets/jquery-sparkline/jquery.sparkline.min.js', array(), '1.0', true );
		wp_enqueue_script( 'detectmobile-js', get_template_directory_uri() . '/assets/jquery-detectmobile/detect.js', array(), '1.0', true );
		wp_enqueue_script( 'fastclick-js', get_template_directory_uri() . '/assets/fastclick/fastclick.js', array(), '1.0', true );
		wp_enqueue_script( 'slimscroll-js', get_template_directory_uri() . '/assets/jquery-slimscroll/jquery.slimscroll.js', array(), '1.0', true );
		wp_enqueue_script( 'blockUI-js', get_template_directory_uri() . '/assets/jquery-blockui/jquery.blockUI.js', array(), '1.0', true );

		//PLUGIN JS
		wp_enqueue_script( 'jquery-datatable-js', get_template_directory_uri() . '/assets/datatables/jquery.dataTables.min.js', array(), '1.0', true );
		wp_enqueue_script( 'bootstrap-datatable-js', get_template_directory_uri() . '/assets/datatables/dataTables.bootstrap.js', array(), '1.0', true );

		wp_enqueue_script( 'classie-js', get_template_directory_uri() . '/assets/modal-effect/js/classie.js', array(), '1.0', true );
		wp_enqueue_script( 'modal-effect-js', get_template_directory_uri() . '/assets/modal-effect/js/modalEffects.js', array(), '1.0', true );

		wp_enqueue_script( 'app-js', get_template_directory_uri() . '/js/jquery.app.js', array(), '1.0', true );
		wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/owl-carousel/js/owl.carousel.js', array(), '1.3.2', true );
		wp_enqueue_script( 'gut-js', get_template_directory_uri() . '/js/gut.js', array(), '1.0', true );
	}

	add_action("wp_enqueue_scripts", "script_gut");

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
			"id" => "sidebar_left",
			"before_widget" => "<li class='has_sub'>",
			"after_widget" => "</li>",
			"before_title" => "<a class='waves-effect'><i class='md md-add'></i><span>",
    		"after_title" => "</span></a>",
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

	// show posts per format-post
	function filter_post_per_format($format = array(), $operator){
		$argumens = array('tax_query' => array(
			array(
			   	'taxonomy' => 'post_format',
			   	'field' => 'slug',
			   	'terms' => $format,
			   	'operator' => $operator,
			),
		), 'posts_per_page' => 3 );					

		return query_posts( $argumens );
	}
	
	function current_url() {
	    $protocol = $_SERVER['HTTPS'] == 'on' ? 'https' : 'http';
	    $current = $protocol.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	    return $current;
	}

	function url_share($social_media){
		switch ($social_media) {
			case "facebook":
				$link = "https://www.facebook.com/sharer/sharer.php?u=";
				return $link;
				break;
			case "google_plus":
				$link = "https://plus.google.com/share?url=";
				return $link;
				break;
			case "linkedin":
				$link = "https://www.linkedin.com/shareArticle?mini=true&url=";
				return $link;
				break;
			case "twitter":
				$link = "http://twitter.com/share?url=";
				return $link;
				break;
			default:
				echo "Your favorite color is neither red, blue, nor green!";
		}
	}

	function share_post_to($social_media, $url_post = "http://www.kang-cahya.com/", $target = ""){
		switch ($social_media) {
			case "facebook":
				$link = " <a href='https://www.facebook.com/sharer/sharer.php?u=".$url_post."' target='".$target."'><i class='fa fa-facebook'></i></a> ";
				echo $link;
				return $link;
				break;
			case "google_plus":
				$link = " <a href='https://plus.google.com/share?url=".$url_post."' target='".$target."'><i class='fa fa-google-plus'></i></a> ";
				echo $link;
				return $link;
				break;
			case "linkedin":
				$link = " <a href='https://www.linkedin.com/shareArticle?mini=true&url=".$url_post."&summary=' target='".$target."'><i class='fa fa-linkedin'></i></a> ";
				echo $link;
				return $link;
				break;
			case "twitter":
				$link = " <a href='http://twitter.com/share?url=".$url_post."' target='".$target."'><i class='fa fa-twitter'></i></a> ";
				echo $link;
				return $link;
				break;
			default:
				$link = " <a href='https://www.facebook.com/sharer/sharer.php?u=http://www.kang-cahya.com/' target='".$target."'><i class='fa fa-facebook'></i></a> ";
				echo $link;
				return $link;
		}
	}

	function share_post_to_c($social_media, $url_post = "http://www.kang-cahya.com/", $target = ""){
		switch ($social_media) {
			case "facebook":
				$link = " <a href='https://www.facebook.com/sharer/sharer.php?u=".$url_post."' target='".$target."' class='btn btn-primary'><i class='fa fa-facebook'></i></a> ";
				echo $link;
				return $link;
				break;
			case "google_plus":
				$link = " <a href='https://plus.google.com/share?url=".$url_post."' target='".$target."' class='btn btn-danger'><i class='fa fa-google-plus'></i></a> ";
				echo $link;
				return $link;
				break;
			case "linkedin":
				$link = " <a href='https://www.linkedin.com/shareArticle?mini=true&url=".$url_post."&summary=' target='".$target."' class='btn btn-primary'><i class='fa fa-linkedin'></i></a> ";
				echo $link;
				return $link;
				break;
			case "twitter":
				$link = " <a href='http://twitter.com/share?url=".$url_post."' target='".$target."' class='btn btn-info'><i class='fa fa-twitter'></i></a> ";
				echo $link;
				return $link;
				break;
			default:
				$link = " <a href='https://www.facebook.com/sharer/sharer.php?u=http://www.kang-cahya.com/' target='".$target."' class='btn btn-primary'><i class='fa fa-facebook'></i></a> ";
				echo $link;
				return $link;
		}
	}
	
	function count_post_today(){
		$today = getdate();
		$query=get_posts('year=' .$today["year"] .'&monthnum=' .$today["mon"] .'&day=' .$today["mday"] );
		return count($query);
	}
	
	function limit_show_post_today(){
		return 2;
	}
	
	function post_format_icon($format){
		if($format == "aside"){ return "<i class='md md-receipt'></i>"; }
		elseif($format == "chat"){ return "<i class=''></i>"; }
		elseif($format == "gallery"){ return "<i class=''></i>"; }
		elseif($format == "link"){ return "<i class='md md-link'></i>"; }
		elseif($format == "image"){ return "<i class=''></i>"; }
		elseif($format == "quote"){ return "<i class='md md-format-quote'></i>"; }
		elseif($format == "status"){ return "<i class=''></i>"; }
		elseif($format == "video"){ return "<i class=''></i>"; }
		elseif($format == "audio"){ return "<i class=''></i>";}
		else{ return "<i class='md md-pin-drop'></i>"; }
	}

	function post_slider(){
		query_posts('posts_per_page=6');
		if( have_posts() ){
			while( have_posts() ){ the_post();
				$slide = get_template_part('template/gut-content-owlslider');
				echo $slide;
			}
		} else { 
			$slide = "<div class='not-found'>Slide Not Found</div>";
			echo $slide;
		}
		return $slide;
	}

	function post_datatable(){ 
		query_posts(array('posts_per_page' => 10000000)); 
		if( have_posts() ){
	        while( have_posts() ){ the_post();
		    	$rows = "<tr>
		            	<td><a href='".get_the_permalink()."'>".get_the_title()."</a></td>
		                <td>".get_the_author()."</td>
		                <td>".get_the_time('F, d Y H:i:s A')."</td>
		            </tr>";
		        echo $rows;
		    } 
		} else { 
			$rows = "<tr><td>Records Not Found</td></tr>"; 
			echo $rows;
		}
		return $rows;
	}

	function post_standard(){
		filter_post_per_format(array(
		   	'post-format-aside',
	   		'post-format-gallery',
	   		'post-format-link',
	   		'post-format-image',
	   		'post-format-quote',
	   		'post-format-status',
	   		'post-format-video',
	   		'post-format-audio',
	   		'post-format-chat'
	   	), "NOT IN");
		if( have_posts() ){
			while( have_posts() ){ the_post();
 				$standard = get_template_part('template/gut-content', get_post_format());
				echo $standard;
			}
		} else { 
			$standard = "<div class='not-found'>Not Found</div>";
			echo $standard;
		}
		return $standard;
	}

	function post_aside(){
		filter_post_per_format(array('post-format-aside'), "IN");
		if( have_posts() ){
			while( have_posts() ){ the_post();
 				$aside = get_template_part('template/gut-content', get_post_format());
				echo $aside;
			}
		} else { 
			$aside = "<div class='not-found'>Not Found</div>";
			echo $aside;
		}
		return $aside;
	}

	function post_link(){
		filter_post_per_format(array('post-format-link'), "IN");
		if( have_posts() ){
			while( have_posts() ){ the_post();
 				$link = get_template_part('template/gut-content', get_post_format());
				echo $link;
			}
		} else { 
			$link = "<div class='not-found'>Not Found</div>";
			echo $link;
		}
		return $link;
	}

	function post_quote(){
		filter_post_per_format(array('post-format-quote'), "IN");
		if( have_posts() ){
			while( have_posts() ){ the_post();
 				$quote = get_template_part('template/gut-content', get_post_format());
				echo $quote;
			}
		} else { 
			$quote = "<div class='not-found'>Not Found</div>";
			echo $quote;
		}
		return $quote;
	}

	function archive_author(){
		if( have_posts() ){
			while( have_posts() ){ the_post();
				$post_author = get_template_part('template/gut-content-author');
				echo $post_author;
			}
		} else {
			$post_author = "<div class='not-found'>Post Not Found</div>";
			echo $post_author;
		}
		return $post_author;
	}
	
	function gut_dir_t($param){
		switch ($param) {
			case "homepage":
				$dir = "template/homepage/";
				return $dir;
				break;
			default:
				$dir = "template/";
				return $dir;
		}
	}

	function gut_template(){
		$templ = get_template_part('template/gut-content', get_post_format());
		echo $templ;
		return $templ;
	}

	function cut_title_post($data_leng){
		$leng = strlen($data_leng);
		if($leng <= 14){
			$cut = strtolower($data_leng);
			echo $cut;
			return $cut;
		}else{
			$cut = strtolower(substr($data_leng, 0, 14)."...");
			echo $cut;
			return $cut;
		}
	}

	function footer_x(){
		$by = "
			<footer class='footer text-right'>
		        2015 © GUT Theme.
		    </footer>
		";

		echo $by;
		return $by;
	}
?>