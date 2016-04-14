<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <div class="row">                

                <!-- Right Sidebar -->
                <div class="col-md-12 col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="btn-toolbar" role="toolbar">
                                <?php share_post_to_c("facebook", get_the_permalink(), "_blank"); ?>
                                <?php share_post_to_c("google_plus", get_the_permalink(), "_blank"); ?>
                                <?php share_post_to_c("linkedin", get_the_permalink(), "_blank"); ?>
                                <?php share_post_to_c("twitter", get_the_permalink(), "_blank"); ?>
                            </div>
                        </div>
                        
                    </div> <!-- End row -->
                    

                    <!-- Message -->
                    <div class="panel panel-default m-t-20">
                        <div class="panel-heading"> 
                            <h3 class="panel-title"><?php the_title();?></h3> 
                        </div>
                        <div class="panel-body">
                            <div class="media m-b-30 ">
                                <a href="#" class="pull-left">
                                    <?php echo get_avatar( get_the_author_meta( get_the_ID() ), 32 ); ?>
                                </a>
                                <div class="media-body">
                                    <span class="media-meta pull-right" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php the_time('H:i:s A');?>"><?php the_time('F, d Y');?></span>
                                    <h4 class="text-primary m-0"><a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>">
                                        <?php the_author();?>
                                    </a></h4>
                                    <small class="text-muted"><?php the_author_url();?></small>
                                </div>
                            </div> <!-- media -->
                            <p><?php the_content();?></p>

                            <hr/>
                            <p><?php the_tags('TAGS : ',', ','');?></p>
                            <p><?php the_category(', '); ?></p>
                            <hr/>
                            <h4> <i class="ion-steam"></i> Related Post : </h4>

                            <div class="col-sm-8 col-md-8">
                            <?php
                                $argumens = array('tax_query' => array(
                                        array(
                                            'taxonomy' => 'post_format',
                                            'field' => 'slug',
                                            'terms' => array(
                                                'post-format-aside',
                                                'post-format-gallery',
                                                'post-format-link',
                                                'post-format-image',
                                                'post-format-quote',
                                                'post-format-status',
                                                'post-format-video',
                                                'post-format-audio',
                                                'post-format-chat'
                                            ),
                                            'operator' => 'NOT IN',
                                        ),
                                    ), 'posts_per_page' => 5
                                );
                                $related = new WP_Query( $argumens );
                                if( $related->have_posts() ):
                            ?>
                                    <ol>
                                        <?php while( $related->have_posts() ): $related->the_post(); ?>
                                            <li>
                                                <a href="<?php the_permalink();?>"><?php the_title();?></a> . 
                                                <span data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php the_time('H:i:s A');?>">
                                                    <?php the_time('F, d Y');?>
                                                </span>
                                            </li>
                                        <?php endwhile; ?>
                                    </ol>
                            <?php
                                endif;
                                wp_reset_postdata();
                            ?>
                            </div>
                        
                        
                        </div> <!-- panel-body -->
                    </div> <!-- End panel -->
                    <!-- End message -->

                    <?php comments_template(); ?>
                </div> <!-- Col-->
            
            </div><!-- End row -->


        </div> <!-- container -->
                   
    </div> <!-- content -->

    <?php footer_x();?>

</div>