<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="initial-scale=1.0, width=device-width" name="viewport">
	<meta name="viewport" content="width=device-width">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<title>
		<?php
			if (is_single() || is_page()) {
				wp_title('',true); 
			} else { 
				bloginfo('description'); 
			} 
		?> — 
		<?php bloginfo('name');?>
	</title>
	<?php wp_head();?>	
</head>
<body class="avoid-fout page-brand">
	<div class="avoid-fout-indicator avoid-fout-indicator-fixed">
		<div class="progress-circular progress-circular-center">
			<div class="progress-circular-wrapper">
				<div class="progress-circular-inner">
					<div class="progress-circular-left">
						<div class="progress-circular-spinner"></div>
					</div>
					<div class="progress-circular-gap"></div>
					<div class="progress-circular-right">
						<div class="progress-circular-spinner"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<header class="header header-transparent header-waterfall">
		<ul class="nav nav-list pull-left">
			<li>
				<a data-toggle="menu" href="#menu">
					<span class="icon icon-lg">menu</span>
				</a>
			</li>
		</ul>
		<a class="header-logo margin-left-no" href="<?php echo home_url();?>"><?php bloginfo("name");?></a>
		<div class="header-affix pull-left" data-offset-top="108" data-spy="affix">
			<span class="header-text margin-left-no">
				<?php 
					if( is_single() ){ 
						echo "<i class='icon margin-right'>chevron_right</i> Blog ";
						echo "<i class='icon margin-right'>chevron_right</i>"; the_title(); 
					} else if( is_page() ){ 
						echo "<i class='icon margin-right'>chevron_right</i> Page ";
						echo "<i class='icon margin-right'>chevron_right</i>"; the_title(); 
					} else if(is_category()){
						echo "<i class='icon margin-right'>chevron_right</i> Category ";
						echo "<i class='icon margin-right'>chevron_right</i>"; single_cat_title();
					} else if(is_author()){
						echo "<i class='icon margin-right'>chevron_right</i> Author ";
						echo "<i class='icon margin-right'>chevron_right</i>"; echo get_the_author(); 
					} else if(is_tag()){
						echo "<i class='icon margin-right'>chevron_right</i> Tag ";
						echo "<i class='icon margin-right'>chevron_right</i>"; single_tag_title();
					} else {
						echo "<i class='icon margin-right'>chevron_right</i>"; echo "Blog";
					}
				?>
			</span>
		</div>
		<ul class="nav nav-list pull-right">
			<li>
				<a data-toggle="menu" href="#profile">
					<span class="access-hide"><?php the_author(); ?></span>
					<span class="avatar"><?php echo get_avatar( 1 ); ?></span>
				</a>
			</li>
		</ul>
	</header>

	<?php get_sidebar( 'left' ); ?>
	<?php get_sidebar( 'right' ); ?>
 	