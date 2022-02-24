<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package Nisarg
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

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			$nisarg_comment_count = get_comments_number();
			if ( '1' === $nisarg_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'nisarg' ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			} else {
				printf( 
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $nisarg_comment_count, 'comments title', 'nisarg' ) ),
					number_format_i18n( $nisarg_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			}
			?>
		</h2>
		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 50,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php
		// Are there comments to navigate through?
		if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
		?>
		<nav class="navigation comment-navigation" role="navigation">
		<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'nisarg' ); ?></h2>
		<div class="nav-links">
			<?php
			if ( $prev_link = get_previous_comments_link( __( 'Older Comments', 'nisarg' ) ) ) :
				printf( '<div class="nav-previous">%s</div>', $prev_link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			endif;

			if ( $next_link = get_next_comments_link( __( 'Newer Comments', 'nisarg' ) ) ) :
				printf( '<div class="nav-next">%s</div>', $next_link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			endif;
			?>
		</div><!-- .nav-links -->
		</nav><!-- .comment-navigation -->
		<?php endif; // Check for comment navigation ?>

		<?php if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.' , 'nisarg' ); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments() ?>
	<?php comment_form(); ?>
</div><!-- #comments -->
