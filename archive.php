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
		<div class="row">
			<?php
				if( have_posts() ){
			?>
				<div class="tile-wrap">
					<div class="tile">
						<div class="pull-left tile-side">
							<div class="avatar avatar-sm">
								<?php if(is_category()){ ?>
									<i class="fa fa-folder-open-o"></i>
								<?php } else if(is_author()){ ?>
									<i class="fa fa-user"></i>
								<?php } else if(is_tag()){ ?>
									<i class="fa fa-tag fa-flip-horizontal"></i>
								<?php } else { ?>
									<i class="fa fa-support"></i>
								<?php } ?>
							</div>
						</div>
						<div class="tile-inner">
							<?php
								if(is_category()){
									echo "<b>This is a category page : </b>"; single_cat_title();
								} else if(is_author()){
									echo "<b>This is a page author : </b>" . get_the_author(); 
								} else if(is_tag()){
									echo "<b>This is a page tag : </b>"; single_tag_title();
								} else {
									echo "<b>This is a page archive</b>";
								}
							?>
						</div>
					</div>
				</div>

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
</div>
<?php get_footer(); ?>