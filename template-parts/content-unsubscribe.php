<?php
/**
 * Template part for displaying posts.
 *
 * @package Nisarg
 */

?>

<article id="post-<?php the_ID(); ?>"  <?php post_class( 'post-content' ); ?>>

	<header class="entry-header">
		<span class="screen-reader-text">取消订阅</span>
		<h2 class="entry-title">
			取消订阅
		</h2>
	</header><!-- .entry-header -->
	<hr />
	<div class="entry-content" style="text-align: center">
<?php
		if(isset($wp_query->query_vars['key'])) :
			home_unsubscribe($wp_query->query_vars['key']);
?>
		<?php else: ?>
		取消订阅的链接无效。
		<?php endif; ?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
