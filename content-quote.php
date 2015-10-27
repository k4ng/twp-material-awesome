	<div class="col-lg-3 col-md-4 col-sm-6"> 
		<div class="card">
			<div class="card-main">
				<div class="card-inner">
					<p>
						<i class="fa fa-quote-left"></i>
							<?php echo get_the_excerpt(); ?>...
					</p>
				</div>
				<div class="card-action">
					<div class="card-action-btn pull-left">
						<a class="btn btn-flat waves-attach waves-effect" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>" target="_blank">
						<span class="fa fa-facebook"></span>
						</a>
						<a class="btn btn-flat waves-attach waves-effect" href="https://plus.google.com/share?url=<?php the_permalink();?>" target="_blank">
							<span class="fa fa-google-plus"></span>
						</a>
						<a class="btn btn-flat waves-attach waves-effect" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink();?>&summary" target="_blank">
							<span class="fa fa-linkedin"></span>
						</a>
						<a class="btn btn-flat waves-attach waves-effect" href="http://twitter.com/share?url=<?php the_permalink();?>" target="_blank">
							<span class="fa fa-twitter"></span>
						</a>
					</div>
					<div class="card-action-btn pull-right">
						<a class="btn btn-brand-accent waves-attach waves-effect" title="Detail Quote" data-toggle="modal" href="#modal<?php echo get_the_ID();?>">
							<i class="fa fa-ellipsis-h"></i>
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
						<h2 class="modal-title"><i class="fa fa-quote-left"></i> Detail Quote</i></h2>
					</div>
					<div class="modal-inner">
						<p class="text-left">
							<?php echo strip_tags(get_the_content());?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
