<?php
	if ( post_password_required() ){
		return;
	}
	$ttl_comment=wp_count_comments( get_the_ID() )->approved;
?>
<div class="panel panel-default">
    <div class="panel-heading">
    	<h3 class="panel-title"><i class="md md-comment"></i> 
    		<?php echo "Total ".$ttl_comment." Comments"; ?>
    	</h3>
    </div>
    <div class="panel-body">
		<?php if($ttl_comment <= 0){ echo "No comment !"; }else{ if ( have_comments() ) { ?>
			<ul class="comment-list" >
				<?php
					wp_list_comments( array(
						'style'       => 'ul',
						'short_ping'  => true,
						'reverse_top_level' => null,
						'per_page' => 5, //Allow comment pagination
	        			'reverse_top_level' => false
					) );
				?>
			</ul><!-- .comment-list -->

			<?php
				// Are there comments to navigate through?
				if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) {
			?>
			<nav class="navigation comment-navigation" role="navigation">
				<h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'gut' ); ?></h1>
				<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'gut' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'gut' ) ); ?></div>
			</nav><!-- .comment-navigation -->
			<?php } ?>

			<?php if ( ! comments_open() && get_comments_number() ) { ?>
				<p class="no-comments"><?php _e( 'Comments are closed.' , 'gut' ); ?></p>
			<?php } ?>

		<?php } }?>
	</div>
</div>

<div class="panel panel-default">
    <div class="panel-body">
		<?php
			$args_comment = array(
				'fields' => apply_filters( 'comment_form_default_fields', array(
	    			'author' => '<div class="form-group"><label>' . __( 'Your Name' ) . '' . ( $req ? ' <span>*</span>' : '' ) . '</label><input id="author" name="author" type="text" placeholder="Name..." class="form-control" value="' . esc_attr( $commenter['comment_author'] ) . '" "' . $aria_req . ' />' . '</div>',

	    			'email'  => '<div class="form-group"><label>' . __( 'Your Email' ) . '' . ( $req ? ' <span>*</span>' : '' ) . '</label><input id="email" name="email" type="text" class="form-control" placeholder="Email..." value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />' . '</div>',
	    
	    			'url' => '<div class="form-group"><label>' . __( 'Web / Blog', 'domainreference' ) . '' . '</label><input id="url" name="url" type="text" class="form-control" placeholder="Url..." value="' . esc_attr( $commenter['comment_author_url'] ) . '" /> </div>') ),

				'comment_field' => '<div class="form-group"><label>' . _x( 'Comment', 'noun' ) . '</label><textarea class="wysihtml5 form-control" placeholder="Message body" style="height: 200px" name="comment"></textarea></div>',

				'comment_notes_before' => '',
				'class_submit' => 'btn btn-primary waves-effect waves-light',
			);
			comment_form($args_comment); 
		?>
	</div>
</div>
			
	                
			