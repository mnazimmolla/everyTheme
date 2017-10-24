
<?php
function every_comment($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }
    ?>
    <<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
    <?php if ( 'div' != $args['style'] ) : ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
			<?php endif; ?>
			
			
				<?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
				<?php printf( __( '<cite class="fn">%s</cite>' ), get_comment_author_link() ); ?>
		
			
			
			<?php if ( $comment->comment_approved == '0' ) : ?>
				 <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' , 'every' ); ?></em>
				  <br />
			<?php endif; ?>


			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div>
			<?php comment_text(); ?>
			
			<?php if ( 'div' != $args['style'] ) : ?>
			
			
    </div>
    <?php endif; ?>
    <?php
    }