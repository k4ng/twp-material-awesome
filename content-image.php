	<div class="col-lg-3 col-md-3 col-sm-6">
		<div class="card">
			<div class="card-main">
				<div class="card-img">
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail("img_thumb");
					} else { ?>
						<img alt="alt text" src="<?php bloginfo("template_directory");?>/images/samples/portrait.jpg">
					<?php } ?>
					<p class="card-img-heading">
						<?php the_title();?>
					</p>
				</div>
				<div class="card-action">
					<div class="card-action-btn pull-left">
						<a class="btn btn-flat waves-attach waves-effect" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>" target="_blank"><span class="fa fa-facebook"></span></a>
						<a class="btn btn-flat waves-attach waves-effect" href="https://plus.google.com/share?url=<?php the_permalink();?>" target="_blank"><span class="fa fa-google-plus"></span></a>
						<a class="btn btn-flat waves-attach waves-effect" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink();?>&summary" target="_blank"><span class="fa fa-linkedin"></span></a>
						<a class="btn btn-flat waves-attach waves-effect" href="http://twitter.com/share?url=<?php the_permalink();?>" target="_blank"><span class="fa fa-twitter"></span></a>
					</div>
					<div class="card-action-btn pull-right">
						<a class="btn btn-brand-accent waves-attach waves-effect" data-toggle="modal" href="#modal<?php echo get_the_ID();?>">
							<i class="fa fa-expand"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div aria-hidden="true" class="modal fade" id="modal<?php echo get_the_ID();?>" role="dialog" tabindex="-1">
			<div class="modal-dialog modal-xs">
				<div class="modal-content">
					<div class="modal-heading">
						<a class="modal-close" data-dismiss="modal">&times;</a>
						<h2 class="modal-title"><?php the_title();?></h2>
					</div>
					<div class="modal-inner">
						<div class="modal-img">
							<?php the_post_thumbnail(); ?>
							<?php the_content();?>
						</div>
					</div>
					<div class="modal-footer" align="center">
						<a class="btn btn-flat waves-attach waves-effect" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>" target="_blank"><span class="fa fa-facebook"></span></a>
						<a class="btn btn-flat waves-attach waves-effect" href="https://plus.google.com/share?url=<?php the_permalink();?>" target="_blank"><span class="fa fa-google-plus"></span></a>
						<a class="btn btn-flat waves-attach waves-effect" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink();?>&summary" target="_blank"><span class="fa fa-linkedin"></span></a>
						<a class="btn btn-flat waves-attach waves-effect" href="http://twitter.com/share?url=<?php the_permalink();?>" target="_blank"><span class="fa fa-twitter"></span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	