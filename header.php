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
	<?php wp_head();?>	
</head>
<body class="fixed-left">
        <div id="wrapper">
        	<!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="<?php echo home_url( '/' ); ?>" class="logo"> <span><?php echo get_bloginfo( 'name' ); ?>  </span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>
                            <form class="navbar-form pull-left" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
                                <div class="form-group">
                                    <input type="search" value="<?php echo get_search_query() ?>" name="s" class="form-control search-bar" placeholder="Type here for search...">
                                </div>
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </form>

                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                        <i class="md md-notifications"></i> <span class="badge badge-xs badge-danger"><?php echo count_post_today();?></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="text-center notifi-title">New post today</li>
                                        <li class="list-group">
											<?php
												$today = getdate();
												$args = array(
													'date_query' => array(
														array(
															'year'  => $today['year'],
															'month' => $today['mon'],
															'day'   => $today['mday'],
														),
													),
													'posts_per_page' => limit_show_post_today()
												);
												$query = new WP_Query($args);
												if( $query->have_posts() ){
													while( $query->have_posts() ){ $query->the_post();
											?>
												<!-- list item-->
												<a href="<?php the_permalink();?>" class="list-group-item">
												  <div class="media">
													 <div class="pull-left">
														<?php echo post_format_icon(get_post_format( get_the_ID() )); ?>
													 </div>
													 <div class="media-body clearfix">
														<div class="media-heading"><?php the_title();?></div>
														<p class="m-0">
															<small><?php 
																the_time("H:i:s A");
																echo " . By,";
																the_author();
															?></small>
														</p>
													 </div>
												  </div>
												</a>
											<?php
													}
												} else { echo "<div class='not-found'><i class='ion-android-folder'></i> Not found!</div>"; }
												
												if(count_post_today() > limit_show_post_today()){
													echo '
														<a data-toggle="modal" href="#post-today" class="list-group-item">
														  <small>See all post today</small>
														</a>
													';
												}
											?>                                            
                                        </li>
                                    </ul>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="md md-comment"></i></a>
                                </li>
                                <!-- <li class="hidden-xs">
                                    <a href="#" class="waves-effect waves-light" data-toggle="modal" data-target="#by"><i class="md md-info"></i></a>
                                </li> -->
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->
            <!-- <div id="by" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog"> 
                    <div class="modal-content"> 
                        <div class="modal-header"> 
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                            <h4 class="modal-title">2015 &copy; GUT Theme Wordpress</h4> 
                        </div> 
                        <div class="modal-body"> 
                            <div class="row"> 
                                <div class="col-md-12"> 
                                	<p class="lead">
                                		<ul>
                                			<li>Template by Molrtan</li>
                                			<li>Convert to theme wordpress by Kang-cahya</li>
                                		</ul>
                                	</p>
                                </div>
                            </div> 
                        </div>
                    </div> 
                </div>
            </div> -->
			
			<div id="post-today" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
				<div class="modal-dialog">
					<div class="modal-content p-0 b-0">
						<div class="panel panel-color panel-primary">
							<div class="panel-heading"> 
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
								<h3 class="panel-title">All Post Today</h3> 
							</div> 
							<div class="panel-body">
								<table id="datatable2" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Published</th>
                                            <th>Author</th>
                                        </tr>
                                    </thead>                                             
                                    <tbody>
                                        <?php 
											$today = getdate();
											$args_nolimit = array(
												'date_query' => array(
													array(
														'year'  => $today['year'],
														'month' => $today['mon'],
														'day'   => $today['mday'],
													),
												)
											);
											$query_2 = new WP_Query($args_nolimit);
											if( $query_2->have_posts() ){
                                          		while( $query_2->have_posts() ){ $query_2->the_post(); 
										?>
													<tr>
	                                                    <td><?php the_title();?></td>
	                                                    <td><?php the_time('H:i:s A'); ?></td>
	                                                    <td><?php the_author(); ?></td>
	                                                </tr>
	                                    <?php } } else { echo "<tr><td>Records Not Found</td></tr>"; }?>
                                    </tbody>
                                </table>
							</div> 
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
			<?php get_sidebar( 'left' ); ?>
 	