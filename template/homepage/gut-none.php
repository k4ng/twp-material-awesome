	<div class="col-md-6 col-sm-6 col-lg-4">
        <div class="mini-stat clearfix bx-shadow">
            <span class="mini-stat-icon">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail("small_thumb", array("class" => "img-circle img-responsive"));
				} else { ?>
					<img alt="default image theme gut" src="<?php bloginfo("template_directory");?>/images/no_img.jpg" class="img-circle img-responsive">
				<?php } ?>
			</span>
            <div class="mini-stat-info text-right text-muted">
                <span class="name"><a href="<?php the_permalink();?>"><?php the_title();?></a></span>
				<p><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a></p>
                <b><?php the_time('F, d Y'); ?> .</b>
            </div>
            <br>
            <hr class="m-t-10">
            <ul class="text-center social-links list-inline m-0">
				<li>
					<a href="<?php echo url_share("facebook"); the_permalink(); ?>" target="_blank">
						<i class="fa fa-facebook"></i>
					</a>
                </li>
                <li>
                    <a href="<?php echo url_share("google_plus"); the_permalink(); ?>" target="_blank">
						<i class="fa fa-google-plus"></i>
					</a>
                </li>
                <li>
                    <a href="<?php echo url_share("linkedin"); the_permalink(); ?>&summary" target="_blank">
						<i class="fa fa-linkedin"></i>
					</a>
                </li>
				<li>
					<a href="<?php echo url_share("twitter"); the_permalink(); ?>" target="_blank">
						<i class="fa fa-twitter"></i>
					</a>
				</li>
            </ul>
        </div>
    </div>