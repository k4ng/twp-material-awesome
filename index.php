 <?php get_header(); ?>
	<!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->                      
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
               	<!-- Page-Title -->
				<div class="row">
					<div class="col-sm-12">
                        <h4 class="pull-left page-title">Welcome !</h4>
                        <ol class="breadcrumb pull-right">
                            <li><?php echo get_bloginfo( 'name' ); ?> </li>
                            <li class="active"><?php bloginfo('description'); ?></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
					<div class="col-sm-12">

					  	<div id="owl-gut" class="owl-carousel">
					  		<?php post_slider(); ?>
					  	</div>
					</div>
				</div><br>

                <div class="row">
                	<div class="col-md-12 col-sm-12 col-xs-12">
	                    <ul class="nav nav-tabs navtab-bg"> 
	                        <li class="active"> 
	                            <a href="#standard" data-toggle="tab" aria-expanded="true"> 
	                                <span class="visible-xs"><i class="md md-pin-drop"></i></span> 
	                                <span class="hidden-xs"><i class="md md-pin-drop"></i> standard</span> 
	                            </a> 
	                        </li> 
	                        <li class=""> 
	                            <a href="#aside" data-toggle="tab" aria-expanded="false"> 
	                                <span class="visible-xs"><i class="md md-receipt"></i></span> 
	                                <span class="hidden-xs"><i class="md md-receipt"></i> aside</span> 
	                            </a> 
	                        </li> 
	                        <li class=""> 
	                            <a href="#link" data-toggle="tab" aria-expanded="false"> 
	                                <span class="visible-xs"><i class="md md-link"></i></span> 
	                                <span class="hidden-xs"><i class="md md-link"></i> link</span> 
	                            </a> 
	                        </li> 
	                        <li class=""> 
	                            <a href="#quote" data-toggle="tab" aria-expanded="false"> 
	                                <span class="visible-xs"><i class="md md-format-quote"></i></span> 
	                                <span class="hidden-xs"><i class="md md-format-quote"></i> quote</span> 
	                            </a> 
	                        </li> 
	                    </ul> 
						
	                    <div class="tab-content"> 
	                        <div class="tab-pane active" id="standard"><div class="row"><?php post_standard(); ?></div></div> 
	                        <div class="tab-pane" id="aside"><div class="row"><?php post_aside(); ?></div></div> 
	                        <div class="tab-pane" id="link"><div class="row"><?php post_link(); ?></div></div> 
	                        <div class="tab-pane" id="quote"><div class="row"><?php post_quote(); ?></div></div> 
	                    </div>
                    </div>
                </div>

                <div class="row">
                	<div class="col-md-12 col-sm-12 col-xs-12">
                		<div class="panel panel-default panel-border">
                            <div class="panel-heading"> 
                                <h3 class="panel-title">All Post</h3> 
                            </div> 
                            <div class="panel-body">
                            	<div class="table-responsive">
	                                <table id="datatable" class="table table-striped table-bordered">
	                                    <thead>
	                                        <tr>
	                                	        <th>Title</th>
	                                            <th>Author</th>
	                                            <th>Time Published</th>
	                                        </tr>
	                                    </thead>                                             
	                                    <tbody>
	                                    	<?php post_datatable(); ?>
	                                    </tbody>
	                                </table>
	                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- container -->
                               
        </div> <!-- content -->

        <?php footer_x();?>

    </div>
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->
<?php get_footer(); ?>