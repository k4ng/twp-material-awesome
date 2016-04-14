<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
	<label>
		<span></span>
		<input type="search" placeholder="Entry keyword..." class="search_field" value="<?php echo get_search_query() ?>" name="s" />
	</label>
	<input type="submit" class="search_submit" value="Search" />
</form>