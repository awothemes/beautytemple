<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package beautytemple
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<section id="comments" class="comment-area">
    <div class="container">
        <div class="comment-area__inner">
            <?php
            // You can start editing here -- including this comment!
            if ( have_comments() ) :
                ?>
                <h2 class="comments-title">
                    <?php
                    $beautytemple_comment_count = get_comments_number();
                    if ( '1' === $beautytemple_comment_count ) {

                            esc_html__( 'One comment', 'beautytemple' );

                    } else {
                        printf( // WPCS: XSS OK.
                            /* translators: 1: comment count number, 2: title. */
                            esc_html( _nx( '%1$s comment', '%1$s comments', $beautytemple_comment_count, 'comments title', 'beautytemple' ) ),
                            number_format_i18n( $beautytemple_comment_count )
                        );
                    }
                    ?>
                </h2><!-- .comments-title -->

                <?php the_comments_navigation(); ?>

                <ul class="comment-list">
                    <?php
                    wp_list_comments( array(
	                    'callback'          => 'beautytemple_comment',
	                    'end-callback'      => '</div>',
                        'style'      => 'ul',
	                    'avatar_size'       => 82,
	                    'short_ping' => true,
                    ) );
                    ?>
                </ul><!-- .comment-list -->

                <?php
                the_comments_navigation();

                // If comments are closed and there are comments, let's leave a little note, shall we?
                if ( ! comments_open() ) :
                    ?>
                    <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'beautytemple' ); ?></p>
                    <?php
                endif;

            endif; // Check for have_comments().

            $fields =  array(

	            'author' =>

		            '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
		            '" size="30"' . $aria_req . ' placeholder="' . esc_html__( 'Name', 'beautytemple' ) . '"/>',

	            'email' =>
		            '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
		            '" size="30"' . $aria_req . ' placeholder="' . esc_html__( 'Email', 'beautytemple' ) . '"/>',

	            'url' =>
		            '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
		            '" size="30" placeholder="' . esc_html__( 'Website', 'beautytemple' ) . '" />',
            );
            $args = array(
	            'id_form'           => 'commentform',
	            'class_form'      => 'comment-form',
	            'id_submit'         => 'submit',
	            'class_submit'      => 'submit',
	            'name_submit'       => 'submit',
	            'title_reply'       => esc_html__( 'Leave a Reply', 'beautytemple' ),
	            'title_reply_to'    => esc_html__( 'Leave a Reply to %s', 'beautytemple' ),
	            'cancel_reply_link' => esc_html__( 'Cancel Reply', 'beautytemple' ),
	            'label_submit'      => esc_html__( 'Post Comment', 'beautytemple' ),
	            'format'            => 'xhtml',


	            'fields' => apply_filters( 'comment_form_default_fields', $fields ),

	            'comment_field' =>  '<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="' . esc_html__( 'Comment', 'beautytemple' ) . '"></textarea>',

	            'must_log_in' => '<div class="must-log-in">' .
	                             sprintf(
		                             __( 'You must be <a href="%s">logged in</a> to post a comment.', 'beautytemple' ),
		                             wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
	                             ) . '</div>',

	            'logged_in_as' => '<div class="logged-in-as">' .
	                              sprintf(
		                              __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>', 'beautytemple'  ),
		                              admin_url( 'profile.php' ),
		                              $user_identity,
		                              wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
	                              ) . '</div>',

	            'comment_notes_before' => null,

	            'comment_notes_after' => null,


            );

            comment_form($args);
            ?>
        </div>
    </div>
</section><!-- #comments -->
