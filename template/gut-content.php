<div class="col-md-6 col-sm-6 col-lg-4">
	<div class="panel">
        <div class="panel-body">
            <div class="media-main">
                <a class="pull-left">
                	<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail("small_thumb", array("class" => "thumb-lg img-circle"));
					} else { ?>
						<img alt="default image theme gut" src="<?php bloginfo("template_directory");?>/images/no_img.png" class="thumb-lg img-circle">
					<?php } ?>
                </a>
                <div class="info">
                    <h4><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php cut_title_post(get_the_title());?></a></h4>
                    <p><b><?php the_time('F, d Y'); ?></b></p>
                </div>
            </div>
            <div class="clearfix"></div>
            <hr>
            <ul class="social-links list-inline">
	            <li><?php share_post_to("facebook", get_the_permalink(), "_blank"); ?></li>
	            <li><?php share_post_to("google_plus", get_the_permalink(), "_blank"); ?></li>
	            <li><?php share_post_to("linkedin", get_the_permalink(), "_blank"); ?></li>
	            <li><?php share_post_to("twitter", get_the_permalink(), "_blank"); ?></li>
	        </ul>
        </div> <!-- panel-body -->
    </div>
</div>