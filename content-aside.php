	<div class="col-lg-3 col-md-6 col-sm-6">
		<div class="card">
			<aside class="card-side pull-left">
				<br>
				<a class="btn btn-flat" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>" target="_blank">
					<span class="fa fa-facebook"></span>
				</a><br>
				<a class="btn btn-flat" href="https://plus.google.com/share?url=<?php the_permalink();?>" target="_blank">
					<span class="fa fa-google-plus"></span>
				</a><br>
				<a class="btn btn-flat" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink();?>&summary" target="_blank">
					<span class="fa fa-linkedin"></span>
				</a><br>
				<a class="btn btn-flat" href="http://twitter.com/share?url=<?php the_permalink();?>" target="_blank">
					<span class="fa fa-twitter"></span>
				</a>
			</aside>
			<div class="card-main">
				<div class="card-inner">
					<p class="card-heading"><a data-toggle="modal" href="#modal<?php echo get_the_ID();?>"><?php the_title();?></a></p>
					<p class="margin-bottom-lg">
						<b><?php the_time('F, d Y'); ?> .</b> <?php echo get_the_excerpt(); ?>
					</p>
				</div>
			</div>
		</div>
		<div aria-hidden="true" class="modal fade" id="modal<?php echo get_the_ID();?>" role="dialog" tabindex="-1">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-heading">
						<a class="modal-close" data-dismiss="modal">&times;</a>
						<h2 class="modal-title"><i class="fa fa-file-text-o"></i> <?php the_title();?></i></h2>
					</div>
					<div class="modal-inner">
						<p class="text-left">
							<b><?php the_time('F, d Y'); ?></b> <?php the_content();?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>