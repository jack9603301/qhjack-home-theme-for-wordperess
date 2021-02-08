<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Nisarg
 */


if ( ! function_exists( 'nisarg_posts_navigation' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 *
 * @todo Remove this function when WordPress 4.3 is released.
 */
function nisarg_posts_navigation() {
	// Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}
	?>
	<nav class="navigation posts-navigation" role="navigation">
		<h2 class="screen-reader-text"><?php esc_html_e( 'Posts navigation', 'nisarg' ); ?></h2>
		<div class="nav-links">

			<div class="row">			
			
				<?php if ( get_next_posts_link() ) { ?>	
				<div class="col-md-6 prev-post">		
				<?php next_posts_link( '<i class="fa fa-angle-double-left"></i>'.esc_html__( ' OLDER POSTS', 'nisarg' ) ); ?>
				</div>
				<?php }	else{
					echo '<div class="col-md-6">';
					echo '<p> </p>';
					echo '</div>';
				} ?>

				<?php if ( get_previous_posts_link() ) { ?>
				<div class="col-md-6 next-post">
				<?php previous_posts_link( esc_html__( 'NEWER POSTS ', 'nisarg' ).'<i class="fa fa-angle-double-right"></i>' ); ?>
				</div>
				<?php } else {
					echo '<div class="col-md-6">';
					echo '<p> </p>';
					echo '</div>';
				} ?>
			</div><!-- row -->		
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'nisarg_post_navigation' ) ) :
/**
 * Display navigation to next/previous post when applicable.
 *
 * @todo Remove this function when WordPress 4.3 is released.
 */
function nisarg_post_navigation() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
	?>
	<nav class="navigation" role="navigation">
		<h2 class="screen-reader-text"><?php esc_html_e( 'Post navigation', 'nisarg' ); ?></h2>
		<div class="nav-links">
			<div class="row">

			<!-- Get Previous Post -->
			
			<?php
			$prev_post = get_previous_post();
			if ( !empty( $prev_post ) ) {
			?>
				<div class="col-md-6 prev-post">
					<a class="" href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>">
						<span class="next-prev-text">
							<i class="fa fa-angle-left"></i><?php esc_html_e(' PREVIOUS ','nisarg'); ?>
						</span><br>
						<?php if( get_the_title( $prev_post->ID ) != '' ) { 
							echo wp_kses_post( get_the_title( $prev_post->ID ) ); 
						} else { esc_html_e('Previous Post','nisarg'); } ?>
					</a>
				</div>
			<?php } 
			 else { 
				echo '<div class="col-md-6">';
				echo '<p> </p>';
				echo '</div>';
			} ?>

			<!-- Get Next Post -->
			
			<?php
			$next_post = get_next_post();
			if ( !empty( $next_post ) ) { 
			?>
				<div class="col-md-6 next-post">
					<a class="" href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>">
						<span class="next-prev-text">
							<?php esc_html_e(' NEXT ','nisarg'); ?><i class="fa fa-angle-right"></i>
						</span><br>
						<?php if( get_the_title( $next_post->ID ) != '' ) {
							echo wp_kses_post( get_the_title( $next_post->ID ) );
						} else { esc_html_e('Next Post','nisarg'); } ?>
					</a>
				</div>
			<?php } 
			 else { 
				echo '<div class="col-md-6">';
				echo '<p> </p>';
				echo '</div>';
			} ?>
			
			</div><!-- row -->
		</div><!-- .nav-links -->
	</nav><!-- .navigation-->
	<?php
}
endif;

if ( ! function_exists( 'nisarg_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function nisarg_posted_on() {

$viewbyauthor_text = __( 'View all posts by', 'nisarg' ).' %s';

$entry_meta = '<i class="fa fa-calendar-o"></i> <a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s </time></a><span class="byline"><span class="sep"></span><i class="fa fa-user"></i>
<span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>';

	$entry_meta = sprintf($entry_meta,
		esc_url( get_permalink() ),
        esc_attr( get_the_time() ),
        esc_attr( get_the_date( 'c' ) ),
        esc_html( get_the_date() ),
        esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
        esc_attr( sprintf( $viewbyauthor_text, get_the_author() ) ),
        esc_html( get_the_author() ));

    print $entry_meta; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	if(comments_open()){	
		printf(' <i class="fa fa-comments-o"></i><span class="screen-reader-text">%1$s </span> ',esc_html_x( 'Comments', 'Used before post author name.', 'nisarg' ));
		comments_popup_link( __('0 Comment','nisarg'), __('1 comment','nisarg'), __('% comments','nisarg'), 'comments-link', ''); // phpcs:ignore WordPress.WP.I18n.MissingTranslatorsComment
	}
}
endif;

if ( ! function_exists( 'nisarg_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function nisarg_entry_footer() {
	
 	if(!is_home() && !is_search() && !is_archive()){
			
			if ( 'post' == get_post_type() ) {

				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( esc_html__( ', ', 'nisarg' ) );
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', esc_html__( ', ', 'nisarg' ) );

				if ( $categories_list || $tags_list  ) {
					echo '<hr>';
					echo '<div class="row">';
				}
				
				if ( $categories_list ) {
					/* translators: 1: list of categories. */
					printf( '<div class="col-md-6 cattegories"><span class="cat-links"><i class="fa fa-folder-open"></i>
		 ' . esc_html( '%1$s') . '</span></div>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				}

				
				
				if ( $tags_list ) {
					/* translators: 1: list of tags. */
					printf( '<div class="col-md-6 tags"><span class="tags-links"><i class="fa fa-tags"></i>' . esc_html( ' %1$s' ) . '</span></div>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				}
				if ( $categories_list || $tags_list  ) {
					echo '</div>';
				}
			}
	}
	
	edit_post_link( esc_html__( 'Edit This Post', 'nisarg' ), '<br><span>', '</span>' );
		
}
endif;

/**
 *  Display featured image of the post
 */
function nisarg_featured_image_disaplay() {
	if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) {  // check if the post has a Post Thumbnail assigned to it. ?>
        <div class="featured-image">
        	<?php if( !is_single() ) { ?>
        	<a href="<?php the_permalink(); ?>" rel="bookmark">
            <?php } 
            the_post_thumbnail('nisarg-full-width'); ?>
            <?php if( !is_single() ) { ?>
            </a> <?php } ?>        
        </div>
        <?php 
    } 
}


if ( ! function_exists( 'wp_body_open' ) ) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
endif;
