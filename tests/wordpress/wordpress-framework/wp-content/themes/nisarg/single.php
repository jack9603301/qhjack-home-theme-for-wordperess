<?php
/**
 * The template for displaying all single posts.
 *
 * @package Nisarg
 */

get_header(); ?>

	<div class="container">
		<div class="row">
			<div id="primary" class="col-md-9 content-area">
				<main id="main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content',get_post_format() ); ?>
				</main><!-- #main -->
				<div class="post-navigation">
					<?php nisarg_post_navigation(); ?>
				</div>
				<div class="post-comments">
					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

					if ( ! comments_open() ) {
						esc_html_e( 'Comments are closed.', 'nisarg' );
					}
					?>
				</div>
				<?php endwhile; // End of the loop. ?>
			</div><!-- #primary -->
			<?php get_sidebar( 'sidebar-1' ); ?>
		</div> <!--.row-->
	</div><!--.container-->
	<?php get_footer(); ?>
