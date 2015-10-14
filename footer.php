	<footer class="footer">
		<div class="container">
			<p>
				<a href="http://kang-cahya.com" rel="dofollow">Cahya Dyazin</a> . 
				<a href="https://github.com/dyazincahya/theme-wp-material">WP-theme-material</a> . 
				<a href="https://wordpress.org">Wordpress</a>
			</p>
		</div>
	</footer>
	<?php if( is_single() || is_page() ){ ?>
		<div class="share">
			<div class="fbtn-container">
				<div class="fbtn-inner">
					<a class="fbtn fbtn-brand-accent fbtn-lg" data-toggle="dropdown"><span class="fbtn-text">Share To</span><span class="fbtn-ori icon">share</span><span class="fbtn-sub icon">close</span></a>
					<div class="fbtn-dropdown">
						<a class="fbtn" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>" target="_blank"><span class="fbtn-text">Facebook</span><span class="fa fa-facebook"></span></a>
						<a class="fbtn" href="https://plus.google.com/share?url=<?php the_permalink();?>" target="_blank"><span class="fbtn-text">Google +</span><span class="fa fa-google-plus"></span></a>
						<a class="fbtn" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink();?>&summary" target="_blank"><span class="fbtn-text">Linkedin</span><span class="fa fa-linkedin"></span></a>
						<a class="fbtn" href="http://twitter.com/share?url=<?php the_permalink();?>" target="_blank"><span class="fbtn-text">Twitter</span><span class="fa fa-twitter"></span></a>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
	<?php wp_footer();?>
</body>
</html>