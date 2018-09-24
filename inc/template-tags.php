<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Nisarg
 */


if ( ! function_exists( 'home_pages_navigation' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 *
 * @todo Remove this function when WordPress 4.3 is released.
 */
function home_pages_navigation() {
	wp_link_pages(array(
		'before' => '<div class="page-links">'.esc_html__( 'Pages:', 'nisarg' ), 
		'after' => '', 
		'next_or_number' => 'next', 
		'previouspagelink' => __('PrevPage', 'nisarg' ), 
		'nextpagelink' => ""));
	wp_link_pages(array(
		'before' => '', 
		'after' => '', 
		'next_or_number' => 'number', 
		'link_before' =>'<span>', 
		'link_after'=>'</span>'
	));
	wp_link_pages(array(
		'before' => '',
		'after' => '</div>',
		'next_or_number' => 'next',
		'previouspagelink' => '',
		'nextpagelink' => __('NextPage', 'nisarg' )
	));
}
endif;

if ( ! function_exists( 'home_posts_navigation' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 *
 * @todo Remove this function when WordPress 4.3 is released.
 */
function home_posts_navigation() {
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
				<?php next_posts_link('<i class="fa fa-angle-double-left"></i>'.'上一页'); ?>
				</div>
				<?php }	else{
					echo '<div class="col-md-6">';
					echo '<p> </p>';
					echo '</div>';
				} ?>
				
				<?php if ( get_previous_posts_link() ) { ?>
				<div class="col-md-6 prev-post">
				<?php previous_posts_link( '下一页'.'<i class="fa fa-angle-double-right"></i>' ); ?>
				</div>
				<?php } else {
					echo '<div class="col-md-6">';
					echo '<p> </p>';
					echo '</div>';
				} ?>
				</div>		
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'home_post_navigation' ) ) :
/**
 * Display navigation to next/previous post when applicable.
 *
 * @todo Remove this function when WordPress 4.3 is released.
 */
function home_post_navigation() {
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
				if (!empty( $prev_post )){
			?>
				<div class="col-md-6 prev-post">
				<a class="" href="<?php echo esc_url(get_permalink( $prev_post->ID )); ?>"><span class="next-prev-text"><i class="fa fa-angle-left"></i><?php _e('PREVIOUS ','nisarg'); ?>
</span><br><?php if(get_the_title( $prev_post->ID ) != ''){echo get_the_title( $prev_post->ID );} else { _e('Previous Post','nisarg'); }?></a>
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
				if ( is_a( $next_post , 'WP_Post' ) ) { 
			?>
			<div class="col-md-6 next-post">
			<a class="" href="<?php echo esc_url(get_permalink( $next_post->ID )); ?>"><span class="next-prev-text">
 <?php _e(' NEXT','nisarg'); ?><i class="fa fa-angle-right"></i></span><br><?php if(get_the_title( $next_post->ID ) != ''){echo get_the_title( $next_post->ID );} else {  _e('Next Post','nisarg'); }?></a>
			</div>
			<?php } 
			 else { 
				echo '<div class="col-md-6">';
				echo '<p> </p>';
				echo '</div>';
			} ?>
			
			</div>
		</div><!-- .nav-links -->
	</nav><!-- .navigation-->
	<?php
}
endif;
?>