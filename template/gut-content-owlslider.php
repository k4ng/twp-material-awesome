<div class="item" align="center">
	<?php if ( has_post_thumbnail() ) {
		the_post_thumbnail("small_thumb", array("class" => "lazyOwl"));
	} else { ?>
		<img alt="default image theme gut" src="<?php bloginfo("template_directory");?>/images/no_img.png" class="wp-post-image lazyOwl">
	<?php } ?>
	<p><a href="<?php the_permalink();?>"><?php the_title();?></a></p>
</div>