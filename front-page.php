<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<title><?php bloginfo('description'); ?> — <?php bloginfo('name');?></title>
	<?php wp_head();?>
</head>
<body class="front-page">
	<div class="container" align="center">
		<div class="row" align="center">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<span class="front-avatar"><?php echo get_avatar( 1 ); ?></span>
				<h3 class="title-front"><?php echo get_the_author_meta("nickname", 1);?></h3>
				<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
					<div class="media">
						<div class="media-object pull-right">
							<button type="submit" class="btn btn-brand-accent">&nbsp;<span class="icon">search</span>&nbsp;</button>
						</div>
						<div class="media-inner">
							<input class="form-control" type="search" placeholder="Search my archive....." value="<?php echo get_search_query() ?>" name="s">
						</div>
					</div>
				</form>
				<p><a href="<?php echo home_url('/blog');?>">Go To Blog</a></p>
			</div>
			<div class="col-md-3"></div>
		</div>
 	</div>
<?php get_footer(); ?>