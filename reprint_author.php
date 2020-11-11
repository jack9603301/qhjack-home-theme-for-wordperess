<?php
/**
 * The template for displaying archive pages.
 *
 *
 *
 * @package Nisarg
 */
get_header(); ?>
	<div class="container">
		<div class="row">
			<?php 
                $ppp = get_option('posts_per_page');
                $paged = (get_query_var('paged')) ? (int) get_query_var('paged') : 1;
                $args = array(
                    'posts_per_page' => $ppp,
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'paged' => $paged,
                    'ep_integrate' => true,
                    'meta_query' => array(
                        'relation' => 'AND',
                        array(
                            'key' => 'CopyrightType',
                            'value' => 'Reprint'
                        ),
                        array(
                            'key' => 'DisplayAuthor',
                            'value' => 1,
                            'type' => 'numeric'
                        )
                    )
                );
                if (get_query_var('original_author')) {
                    $original_author = get_query_var('original_author');
                    $args['meta_query'][] = array(
                        'key' => 'Author',
                        'value' => $original_author
                    );
                }
                $posts = new WP_Query($args);
                if ( $posts->have_posts() ) : 
            ?>
				<header class="archive-page-header archive-page-title-background">
					<?php
						the_archive_title( '<h3 class="archive-page-title archive-page-title-background">'.__( 'Browsed by', 'nisarg' ), '</h3>' );
						//the_archive_description( '<div class="taxonomy-description">', '</div>' )
					?>
				</header><!-- .page-header -->
				<div id="primary" class="col-md-9 content-area">
					<main id="main" class="site-main" role="main">
					<?php /* Start the Loop */
					while ( $posts->have_posts() ) : $posts->the_post();
						/*
						 * If you want to disaplay only excerpt, file content-excerpt.php will be used.
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						 $post_display_option = get_theme_mod( 'post_display_option', 'post-excerpt' );

						 if ( 'post-excerpt' === $post_display_option ) {
							 get_template_part( 'template-parts/content', 'excerpt' );
						 } else {
							 get_template_part( 'template-parts/content', get_post_format() );
						 }
					endwhile;
					home_posts_navigation(); ?>
					</main><!-- #main -->
				</div><!-- #primary -->
			<?php else : ?>
				<div id="primary" class="col-md-9 content-area">
					<main id="main" class="site-main" role="main">
						<section id="primary" class="col-md-9 content-area">
							<main id="main" class="site-main" role="main">
								<?php get_template_part( 'template-parts/content', 'none' ); ?>
							</main>
						</section>
					</main><!-- #main -->
				</div><!-- #primary -->
			<?php endif; ?>
				
			<?php get_sidebar( 'sidebar-1' ); ?>
		</div> <!--.row-->
	</div><!--.container-->
<?php get_footer(); ?>
