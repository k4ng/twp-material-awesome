	<nav aria-hidden="true" class="menu menu-right" id="profile" tabindex="-1">
		<div class="menu-scroll">
			<div class="menu-top">
				<div class="menu-top-img">
					<img alt="John Smith" src="<?php bloginfo("template_directory");?>/images/samples/landscape.jpg">
				</div>
				<div class="menu-top-info">
					<a class="menu-top-user" href="<?php echo get_author_posts_url(get_the_author_meta( "ID", 1));?>"><span class="avatar pull-left"><?php echo get_avatar(1); ?></span><?php echo get_the_author_meta("nickname", 1);?></a>
				</div>
				<div class="menu-top-info-sub">
					<small><?php bloginfo("description");?></small>
				</div>
			</div>
			<div class="menu-content">
				<?php 
					//mobile navbar
					$args = array(
						'menu_class' => 'nav',
						'theme_location' => 'main_menu'
					);
					wp_nav_menu($args);
				?>
			</div>
		</div>
	</nav>