<?php
/*
 *   Template Name: 订阅/反订阅
 */
get_header(); ?>

<div class="container">
	<div class="row">
		<div id="primary" class="col-md-9 content-area">
			<main id="main" role="main">
<?php 
				$type=isset($wp_query->query_vars['action'])?$wp_query->query_vars['action']:'subscribe';
				if($type === 'subscribe' || $type === 'unsubscribe') {
					get_template_part( 'template-parts/content',$type );
				}
?>
			</main><!-- #main -->
		</div><!-- #primary -->
		<?php get_sidebar( 'sidebar-1' ); ?>
	</div> <!--.row-->
</div><!--.container-->
<?php 
	get_footer();
?>