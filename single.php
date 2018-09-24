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
				<?php while ( have_posts() ) : 
					the_post();
					get_template_part( 'template-parts/content',get_post_format() );
				?>
				</main><!-- #main -->
				<div class="post-navigation">
					<?php home_post_navigation(); ?>
				</div>

				<?php 
					$custom_fields = get_post_custom_keys($post_id);
					if(in_array('CopyrightType',$custom_fields)):
				?>
				
				<div id="secondary" class="post-copyright">
					<aside id="copyright" class='widget'>
						<h3 class="widget-title">©版权声明</h3>
						<?php 
							$custom_fields = get_post_custom_keys($post_id);
							if(in_array('CopyrightType',$custom_fields)):
								$custom = get_post_custom($post_id);
								$CopyrightType = $custom['CopyrightType'][0];
								if($CopyrightType == "Original"):
						?>
						<strong>
							<p>本文章由<?php the_author(); ?>撰写，采用<a href="https://creativecommons.org/licenses/by-nc-sa/3.0/cn/" title="著名-非商业使用-相同形式共享">BY-NC-SA</a>授权发布，转载请以链接形式标明<a href="" title="<?php the_title(); ?>">本文地址</a>，非原创(转载)文章版权归作者所有。</p>
						</strong>
						<?php 
								elseif($CopyrightType == "Reprint"):
									$custom = get_post_custom($post_id);
									$ReprintURL = $custom['ReprintURL'];
									$ReprintTitle = $custom['ReprintTitle'];
						?>
						<strong>
							<p>本文为转载文章，由『<a href="<?php echo $ReprintURL[0] ?>" title="<?php the_title(); ?>"><?php echo $ReprintTitle[0] ?></a>』原创发布，已获得转载许可。版权归原作者所有。</p>
						</strong>
						<?php
								endif;
							endif;
						?>
						<br />
					</aside>
				</div>

				<?php endif; ?>
				
				<div class="post-comments">
					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

					if ( ! comments_open() ) {
						_e( 'Comments are closed.', 'nisarg' );
					}
					?>
				</div>
				<?php endwhile; // End of the loop. ?>
			</div><!-- #primary -->
			<?php get_sidebar( 'sidebar-1' ); ?>
		</div> <!--.row-->
	</div><!--.container-->
	<?php get_footer(); ?>
