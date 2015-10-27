<?php if( is_single() ){?> 
	<div class="content">
		<div class="content-heading">
			<div class="container">
				<h3 class="heading"><span class="pull-left"><?php the_title(); ?></span> <small class="pull-right"><?php the_time('F, d Y'); ?></small></h3>
			</div>
		</div>
		<div class="container">
			<section class="content-inner">
				<div class="tile-wrap">
					<div class="tile">
						<div class="pull-left tile-side">
							<div class="avatar avatar-sm">
								<a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php echo get_avatar(get_the_author_meta('ID')); ?></a>
							</div>
						</div>
						<div class="tile-inner">
							<span>
								<a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>">
									<?php the_author();?>
<<<<<<< HEAD
								</a>
=======
								</a>&nbsp;
								<small><i>(<?php the_author_url();?>)</i></small>
>>>>>>> 815eeacd4c0545701d92c47552c4108cface0ae8
							</span>
							<span class="pull-right"><?php comments_popup_link( '<span>' . __( 'No Comment', 'doc' ) . '</span>', __( '1 Comment', 'doc' ), __( '% Comments', 'doc' ) );	?></span>
						</div>
					</div>
				</div>
				<?php the_post_thumbnail("big_thumb"); ?>
				<p><?php the_content(); ?></p>
				<div class="tile-wrap">
					<div class="tile">
						<div class="tile-inner">
							<span class="pull-left">CATEGORY : <?php the_category(', '); ?></span>
							<span class="pull-right"><?php the_tags('TAGS : ',', ','');?></span>
						</div>
					</div>
				</div>
				<div class="card">
				<div class="card-main">
					<div class="card-header">
						<div class="card-inner">
							Related Post
						</div>
					</div>
					<div class="card-inner">
<<<<<<< HEAD
						<?php
							$argumens = array('tax_query' => array(
									array(
									   	'taxonomy' => 'post_format',
									   	'field' => 'slug',
									   	'terms' => array(
										   	'post-format-aside',
									   		'post-format-gallery',
									   		'post-format-link',
									   		'post-format-image',
									   		'post-format-quote',
									   		'post-format-status',
									   		'post-format-video',
									   		'post-format-audio',
									   		'post-format-chat'
									   	),
									   	'operator' => 'NOT IN',
									),
								), 'posts_per_page' => 5
							);
							$related = new WP_Query( $argumens );
							if( $related->have_posts() ):
						?>
						        <ul>
						            <?php while( $related->have_posts() ): $related->the_post(); ?>
						                <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
						            <?php endwhile; ?>
						        </ul>
						<?php
							endif;
							wp_reset_postdata();
						?>
=======
						
>>>>>>> 815eeacd4c0545701d92c47552c4108cface0ae8
					</div>
				</div>

			</section>
				
		</div>
	</div>
<?php } else if( is_page() ){ ?>
	<div class="content">
		<div class="container">
			<?php the_post_thumbnail("big_thumb"); ?>
			<p><?php the_content(); ?></p>
		</div>
	</div>
<?php } else { ?>
<<<<<<< HEAD
	<div class="col-lg-3 col-md-12 col-sm-6">
		<div class="card">
			<aside class="card-side card-side-img pull-left">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail("small_thumb");
				} else { ?>
					<img alt="alt text" src="<?php bloginfo("template_directory");?>/images/samples/portrait.jpg">
				<?php } ?>
			</aside>
			<div class="card-main">
				<div class="card-inner">
					<p class="card-heading"><a href="<?php the_permalink();?>"><?php the_title();?></a></p>
					<p class="margin-bottom-lg">
						<b><?php the_time('F, d Y'); ?> .</b> <?php echo get_the_excerpt(); ?>
					</p>
				</div>
				<div class="card-action">
					<div class="card-action-btn pull-left">
						<a class="btn btn-flat" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>" target="_blank">
							<span class="fa fa-facebook"></span>
						</a>
						<a class="btn btn-flat" href="https://plus.google.com/share?url=<?php the_permalink();?>" target="_blank">
							<span class="fa fa-google-plus"></span>
						</a>
						<a class="btn btn-flat" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink();?>&summary" target="_blank">
							<span class="fa fa-linkedin"></span>
						</a>
						<a class="btn btn-flat" href="http://twitter.com/share?url=<?php the_permalink();?>" target="_blank">
							<span class="fa fa-twitter"></span>
						</a>
=======
	<div class="col-lg-3 col-md-4 col-sm-6">
		<div class="card">
			<div class="card-main">
				<div class="card-header">
					<div class="card-header-side pull-left">
						<div class="avatar">
							<?php echo get_avatar( get_the_author_meta('ID') ); ?>
						</div>
					</div>
					<div class="card-inner">
						<span><a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author();?></a></span>
					</div>
				</div>
				<div class="card-img">
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail("small_thumb");
					} else { ?>
						<img alt="alt text" src="<?php bloginfo("template_directory");?>/images/samples/landscape.jpg">
					<?php } ?>
					
				</div>
				<div class="card-inner">
					<p><a href="<?php the_permalink();?>"><?php the_title();?></a></p>
				</div>
				<div class="tile tile-collapse">
					<div data-target="#tile-collapse-<?php the_ID(); ?>" data-toggle="tile">
						<div class="pull-left tile-side" data-ignore="tile">
							<div class="avatar avatar-sm avatar-amber">
								<span class="icon">alarm</span>
							</div>
						</div>
						<div class="tile-inner">
							<div class="text-overflow"><?php the_time('F, d Y'); ?> &nbsp;<i class="fa fa-ellipsis-h"></i></div>
						</div>
					</div>
					<div class="tile-active-show collapse" id="tile-collapse-<?php the_ID(); ?>">
						<div class="tile-sub">
							<p><small><?php echo get_the_excerpt(); ?></small></p>
							<p align="right">
								<a class="btn btn-flat btn-xs" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>" target="_blank">
									<span class="fa fa-facebook"></span>
								</a>
								<a class="btn btn-flat btn-xs" href="https://plus.google.com/share?url=<?php the_permalink();?>" target="_blank">
									<span class="fa fa-google-plus"></span>
								</a>
								<a class="btn btn-flat btn-xs" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink();?>&summary" target="_blank">
									<span class="fa fa-linkedin"></span>
								</a>
								<a class="btn btn-flat btn-xs" href="http://twitter.com/share?url=<?php the_permalink();?>" target="_blank">
									<span class="fa fa-twitter"></span>
								</a>
							</p>
						</div>
						<div class="tile-footer">
							<div class="tile-footer-btn pull-left">
								<a class="btn btn-flat waves-attach" data-toggle="tile" href="#tile-collapse-<?php the_ID(); ?>"><span class="icon">close</span>&nbsp;Close</a>
							</div>
						</div>
>>>>>>> 815eeacd4c0545701d92c47552c4108cface0ae8
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
