<?php get_header(); ?>

	<?php
		if( have_posts() ){
			while( have_posts() ){ the_post();
				get_template_part('template/gut-content-single', get_post_format());
			}
		} else {
			echo "<div class='not-found'>Not Found</div>";
		}
	?>
	

<div class="clear"></div>
<?php get_footer(); ?>