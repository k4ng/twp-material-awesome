<?php get_header(); ?> 
<div class="content">
	<div class="content-heading">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-push-3 col-sm-10 col-sm-push-1">
<<<<<<< HEAD
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
					?>
						<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
							<div class="media">
								<div class="media-object pull-right">
									<button type="submit" class="btn btn-brand-accent">&nbsp;<span class="icon">search</span>&nbsp;</button>
								</div>
								<div class="media-inner">
									<input class="form-control searchbar" type="search" value="<?php echo get_search_query() ?>" name="s" style="color:#FFF;">
								</div>
							</div>
						</form>
					<?php } ?>
=======
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
>>>>>>> 815eeacd4c0545701d92c47552c4108cface0ae8
				</div>
			</div>
		</div>
	</div>
	<div class="container">
<<<<<<< HEAD
		<nav class="tab-nav">
			<ul class="nav nav-list">
				<li class="active"><a class="waves-attach" data-toggle="tab" href="#standard-tab">
					<i class="fa fa-thumb-tack"></i>&nbsp;Standard 
					(<?php echo count_post_per_format(array(
						'post-format-aside',
						'post-format-gallery',
						'post-format-link',
						'post-format-image',
						'post-format-quote',
						'post-format-status',
						'post-format-video',
						'post-format-audio',
						'post-format-chat'
					), "NOT IN");?>)
				</a></li>
				<li><a class="waves-attach" data-toggle="tab" href="#aside-tab">
					<i class="fa fa-file-text-o"></i>&nbsp;Aside
					(<?php echo count_post_per_format("post-format-aside", "IN");?>)
				</a></li>
				<li><a class="waves-attach" data-toggle="tab" href="#link-tab">
					<i class="fa fa-link"></i>&nbsp;Link
					(<?php echo count_post_per_format("post-format-link", "IN");?>)
				</a></li>
				<li><a class="waves-attach" data-toggle="tab" href="#image-tab">
					<i class="fa fa-camera"></i>&nbsp;Image
					(<?php echo count_post_per_format("post-format-image", "IN");?>)
				</a></li>
				<li><a class="waves-attach" data-toggle="tab" href="#quote-tab">
					<i class="fa fa-quote-left"></i>&nbsp;Quote
					(<?php echo count_post_per_format("post-format-quote", "IN");?>)
				</a></li>
			</ul>
		</nav>
		<div class="clear"></div>
		<div class="tab-content">
			<div class="tab-pane fade active in" id="standard-tab">
				<div class="row">
					<?php
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
								get_template_part('content');
							}
				 	?>
					<?php } else { echo "<div class='not-found'>Not Found</div>"; } ?>
				</div>
			</div>
			<div class="tab-pane fade" id="aside-tab">
				<div class="row">
					<?php
						filter_post_per_format("post-format-aside","IN");
						if( have_posts() ){
							while( have_posts() ){ the_post();
								get_template_part('content', get_post_format());
							}
						} else { echo "<div class='not-found'>Aside Not Found</div>"; }
					?>
				</div>
			</div>
			<div class="tab-pane fade" id="link-tab">
				<div class="row">
					<?php
						filter_post_per_format("post-format-link","IN");
						if( have_posts() ){
							while( have_posts() ){ the_post();
								get_template_part('content', get_post_format());
							}
						} else { echo "<div class='not-found'>Link Not Found</div>"; }
					?>
				</div>
			</div>
			<div class="tab-pane fade" id="image-tab">
				<div class="row">
					<?php
						filter_post_per_format("post-format-image","IN");
						if( have_posts() ){
							while( have_posts() ){ the_post();
								get_template_part('content', get_post_format());
							}
						} else { echo "<div class='not-found'>Image Not Found</div>"; }
					?>
				</div>
			</div>
			<div class="tab-pane fade" id="quote-tab">
				<div class="row">
					<?php
						filter_post_per_format("post-format-quote","IN");
						if( have_posts() ){
							while( have_posts() ){ the_post();
								get_template_part('content', get_post_format());
							}
						} else { echo "<div class='not-found'>Quote Not Found</div>"; }
					?>
				</div>
			</div>
		</div>
=======
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
>>>>>>> 815eeacd4c0545701d92c47552c4108cface0ae8
	</div>
</div>
<?php get_footer(); ?>
