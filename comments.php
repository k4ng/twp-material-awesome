<?php
	if ( post_password_required() )
		return;
?>
<div class="container">
		<section class="content-inner">

	<?php if ( have_comments() ) : ?>
		<div class="alert alert-success">
			<?php
				printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'twentythirteen' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</div>

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
			if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
		?>
		<nav class="navigation comment-navigation" role="navigation">
			<h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'twentythirteen' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentythirteen' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentythirteen' ) ); ?></div>
		</nav><!-- .comment-navigation -->
		<?php endif; // Check for comment navigation ?>

		<?php if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="no-comments"><?php _e( 'Comments are closed.' , 'twentythirteen' ); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments()?>
	<?php
		$args_comment = array(
			'fields' => apply_filters( 'comment_form_default_fields', array(
    			'author' => '<div class="row"><div class="col-md-4">' . __( 'Your Name' ) . '' . ( $req ? ' <span>*</span>' : '' ) . '<input id="author" name="author" type="text" class="form-control" value="' . esc_attr( $commenter['comment_author'] ) . '" "' . $aria_req . ' />' . '</div>',

    			'email'  => '<div class="col-md-4">' . __( 'Your Email' ) . '' . ( $req ? ' <span>*</span>' : '' ) . '<input id="email" name="email" type="text" class="form-control" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />' . '</div>',
    
    			'url' => '<div class="col-md-4">' . __( 'Web / Blog', 'domainreference' ) . '' . '<input id="url" name="url" type="text" class="form-control" value="' . esc_attr( $commenter['comment_author_url'] ) . '" /> </div></div>') ),

			'comment_field' => '<div class="row"><div class="col-md-12">' . _x( 'Comment', 'noun' ) . '<textarea id="comment" class="form-control" name="comment" aria-required="true" rows="3"></textarea></div></div>',

			'comment_notes_before' => '<div class="alert alert-danger">' . __( 'Your email address will not be published.' ) . ( $req ? $required_text : '' ) . '</div>',

			'class_submit' => 'btn btn-flat btn-brand-accent',
		);
		comment_form($args_comment); 
	?>
</section>
</div><!-- #comments -->