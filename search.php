<?php
/**
 * The template for displaying search results pages.
 *
 * @package Nisarg
 */

get_header(); ?>
	<div class="container">
		<div class="row">
			<section id="primary" class="col-md-9 content-area">
				<main id="main" class="site-main" role="main">
				<?php if ( have_posts() ) : ?>
					<header class="search-page-header">
						<h3 class="search-page-title"><?php printf( esc_html__( 'Search Results for: %s', 'nisarg' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
					</header><!-- .page-header -->

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );
						?>
					<?php endwhile; ?>
					<?php nisarg_posts_navigation(); ?>

				<?php else : ?>
					<?php get_template_part( 'template-parts/content', 'none' ); ?>
				<?php endif; ?>
				</main><!-- #main -->
			</section><!-- #primary -->
			<?php get_sidebar( 'sidebar-1' ); ?>
		</div> <!--.row-->
	</div><!--.container-->
	<?php get_footer(); ?>
