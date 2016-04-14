<?php get_header(); ?>
    <!-- <div align="right"><h1><br><br><br>
    <?php
        // if(is_category()){
        //     echo "<b>This is a category page : </b>"; single_cat_title();
        // } else if(is_author()){
        //  echo "<b>This is a page author : </b>" . get_the_author(); 
  //           echo "<br>";
  //           archive_author();
        // } else if(is_tag()){
        //  echo "<b>This is a page tag : </b>"; single_tag_title();
        // } else {
        //   echo "<b>This is a page archive</b>";
        // }
    ?>      
    </h1></div>  -->    
    <!-- Start content -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <div class="row">
            
                <!-- Left sidebar -->
                <div class="col-lg-3 col-md-4">
                    <?php if(is_category()){ ?>
                        <div class="panel bg-success">
                            <div class="panel-body">                                    
                                <div class="">
                                    <div class="row">
                                        <div class="col-xs-6 text-center">
                                            <h2 class="text-white"><i class="ion-bookmark fa-2x"></i></h2>
                                        </div>
                                        <div class="col-xs-6">
                                            <p class="text-white"><?php echo single_cat_title(); ?></p>
                                        </div>
                                    </div><!-- end row -->
                                </div><!-- weather-widget -->
                            </div><!-- panel-body -->
                        </div>
                    <?php }elseif (is_tag()) { ?>
                        <div class="panel bg-success">
                            <div class="panel-body">                                    
                                <div class="">
                                    <div class="row">
                                        <div class="col-xs-6 text-center">
                                            <h2 class="text-white"><i class="ion-nuclear fa-2x"></i></h2>
                                        </div>
                                        <div class="col-xs-6">
                                            <p class="text-white"><?php echo single_tag_title(); ?></p>
                                        </div>
                                    </div><!-- end row -->
                                </div><!-- weather-widget -->
                            </div><!-- panel-body -->
                        </div>                    
                    <?php }elseif (is_author()) { ?>
                        <div class="mini-stat clearfix bx-shadow">
                            <span class="mini-stat-icon">
                                <?php echo get_avatar( get_the_author_meta( get_the_ID() ), 60, null, null, array('class' => 'img-circle img-responsive') ); ?>
                             </span>
                             <div class="mini-stat-info text-right text-muted">
                                <span class="name"><?php the_author();?></span>
                                <a href="<?php the_author_url();?>" target="_blank">visit web</a>
                            </div>
                        </div>
                    <?php } ?>
                    
                    <h3 class="panel-title">Share To : </h3>
                    <h3><?php 
                        share_post_to_c("facebook", current_url(), "_blank");
                        share_post_to_c("google_plus", current_url(), "_blank");
                        share_post_to_c("linkedin", current_url(), "_blank");
                        share_post_to_c("twitter", current_url(), "_blank");
                    ?></h3>
                </div>
                <!-- End Left sidebar -->
            
                <!-- Right Sidebar -->
                <div class="col-lg-9 col-md-8">
                    
                    
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="datatable-archive-author" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Time Published</th>
                                        </tr>
                                    </thead>                                             
                                    <tbody>
                                        <?php 
                                            //query_posts(array('posts_per_page' => 10000000)); 
                                            if( have_posts() ){
                                                while( have_posts() ){ the_post();
                                                    echo "<tr>
                                                            <td><a href='".get_the_permalink()."'>".get_the_title()."</a></td>
                                                            <td>".get_the_time('F, d Y H:i:s A')."</td>
                                                        </tr>";
                                                } 
                                            } else { 
                                                echo "<tr><td>Records Not Found</td></tr>";
                                            }
                                        ?>
                                    </tbody>
                                </table>          
                            </div>
                            
                        
                        </div> <!-- panel body -->
                    </div> <!-- panel -->
                </div> <!-- end Col-9 -->
            
            </div><!-- End row -->



        </div> <!-- container -->
                   
    </div> <!-- content -->

    <?php footer_x();?>

</div>

<?php get_footer(); ?>