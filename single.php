<?php get_header(); ?>

	<?php
		if( have_posts() ){
			while( have_posts() ){ the_post();
				get_template_part('content');
			}
		} else {
			echo "Tidak ada post";
		}
	?>
	
	<?php comments_template(); ?>


<div class="clear"></div>
<?php get_footer(); ?>