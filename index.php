<?php get_header(); ?>
<div class="content">
	<div class="content-heading">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-push-3 col-sm-10 col-sm-push-1">
					<h1 class="heading">
						<?php 
							if( is_single() || is_page() ){ 
								the_title(); 
							} else if( is_category() ){
								single_cat_title();
							} else if( is_author() ){
								echo get_the_author(); 
							} else if( is_tag() ){
								single_tag_title();
							} else {
								bloginfo("name");
							}
						?>
					</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<section class="content-inner">
			<div class="card-wrap">
				<div class="row">
					<?php
						if( have_posts() ){
					?>
						<?php
							while( have_posts() ){ the_post();
								get_template_part('content');
							}
				 		?>
				 		
						<div class="row">
							<div class="col-md-6">
								<span class="pull-left"><?php previous_posts_link(); ?></span>
							</div>
							<div class="col-md-6">
								<span class="pull-right"><?php next_posts_link(); ?></span>
							</div>
						</div>
					<?php
						} else {
							echo "Tidak ada post";
						}
					?>
				</div>
			</div>
		</selection>
	</div>
</div>
<?php get_footer(); ?>