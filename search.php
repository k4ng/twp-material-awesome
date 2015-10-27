<?php get_header(); ?> 
<div class="content">
	<div class="content-heading">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-push-3 col-sm-10 col-sm-push-1">
					<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
						<div class="media">
<<<<<<< HEAD
							<div class="media-object pull-right">
								<button type="submit" class="btn btn-brand-accent">&nbsp;<span class="icon">search</span>&nbsp;</button>
							</div>
							<div class="media-inner">
								<input class="form-control searchbar" type="search" value="<?php echo get_search_query() ?>" name="s" style="color:#FFF;">
=======
							<div class="media-object pull-left">
								<label class="form-icon-label"><span class="icon">search</span></label>
							</div>
							<div class="media-inner">
								<input class="form-control" type="search" placeholder="Entry keyword..." value="<?php echo get_search_query() ?>" name="s" style="color:#FFFFFF;">
>>>>>>> 815eeacd4c0545701d92c47552c4108cface0ae8
							</div>
						</div>
					</form>
				</div>
			</div>
<<<<<<< HEAD
		</div> 
	</div>
	<div class="container">

=======
		</div>
	</div>
	<div class="container">
>>>>>>> 815eeacd4c0545701d92c47552c4108cface0ae8
		<div class="card-wrap">
			<div class="row">
				<?php
					if( have_posts() ){
				?>
					<div class="tile-wrap">
						<div class="tile">
							<div class="pull-left tile-side">
								<div class="avatar avatar-sm">
									<i class="fa fa-search"></i>
								</div>
							</div>
							<div class="tile-inner">
								This is a page search : <?php echo get_search_query(); ?>
							</div>
						</div>
					</div>
					<?php
						while( have_posts() ){ the_post();
							if($post->post_type == "page") continue;
<<<<<<< HEAD
							get_template_part('content', get_post_format());
						}
			 		?>
=======
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
>>>>>>> 815eeacd4c0545701d92c47552c4108cface0ae8
				<?php } else { ?>
					<div class="container" style="text-align:center;">
						<p><i class="mdi-action-room"></i> Not Found</p>
					</div>

					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div class="card">
									<div class="card-main">
										<div class="card-inner">
											<p class="card-heading">Recent Post</p>
											<p>
												<?php
													$query = new WP_Query( array( 
														'post_type' => 'post', 
														'post_status' => 'publish', 
														'posts_per_page' => '3'
													) );
													while( $query->have_posts() ){ $query->the_post();
												?>
													<p><a href="<?php the_permalink();?>"><b><?php the_title();?></b></a><br>
													<i><?php echo get_the_excerpt(); ?></i></p>
													
												<?php } ?>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-main">
										<div class="card-inner">
											<p class="card-heading">Pages</p>
											<p><ul>
												<?php
													$query = new WP_Query( array( 
														'post_type' => 'page', 
														'post_status' => 'publish', 
														'orderby' => 'name', 
														'order' => 'ASC'
													) );
													while( $query->have_posts() ){ $query->the_post();
												?>
													<li><a href="<?php the_permalink();?>" class="list-group-item-heading"><?php the_title();?></a></li>
												<?php } ?>
											</ul></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php }	?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
