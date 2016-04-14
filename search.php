<?php get_header(); ?>
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
			<?php
				if( have_posts() ){
			?>
				<div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-search"></i> This is a page search : <?php echo get_search_query(); ?></h3>
                    </div>
                    <div class="panel-body">
                        <div class="grid-structure">
							<div class="row">
								<?php
									while( have_posts() ){ the_post();
										if($post->post_type == "page") continue;
										get_template_part('template/gut-content', get_post_format());
									}
								?>
							</div>
						</div>
					</div>
				</div>
				<?php
					the_posts_pagination( array(
						'prev_text' => __( 'Back', 'textdomain' ),
						'next_text' => __( 'Next', 'textdomain' ),
						'screen_reader_text' => __("")
					) );
				?>
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
	<?php footer_x();?>
</div>
<?php get_footer(); ?>