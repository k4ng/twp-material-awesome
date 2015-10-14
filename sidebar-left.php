	<nav aria-hidden="true" class="menu" id="menu" tabindex="-1">
		<div class="menu-scroll">
			<div class="menu-content">
				<div class="menu-logo">
					<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
						<div class="media">
							<div class="media-object pull-left">
								<label class="form-icon-label"><span class="icon">search</span></label>
							</div>
							<div class="media-inner">
								<input class="form-control" type="search" placeholder="Entry keyword..." value="<?php echo get_search_query() ?>" name="s">
							</div>
						</div>
					</form>
				</div>
				<div class="sidebar_left">
					<?php dynamic_sidebar("sidebar_left");?>
				</div>
			</div>
		</div>
	</nav>