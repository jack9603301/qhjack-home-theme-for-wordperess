<?php
/**
 * Template part for displaying posts.
 *
 * @package Nisarg
 */

?>

<article id="post-<?php the_ID(); ?>"  <?php post_class( 'post-content' ); ?>>

	<header class="entry-header">
		<span class="screen-reader-text">订阅</span>
		<h2 class="entry-title">
			订阅
		</h2>
	</header><!-- .entry-header -->
	<hr />
	<div class="entry-content" style="text-align: center">
		<?php if(!isset($_POST['submit'])): ?>
		<?php if(!isset($wp_query->query_vars['key'])): ?>
		<form action="" method="post">
			<label>网名：</label>
			<input type="input" name="nickname" id="nickname" />
			<label>电子邮箱：</label>
			<input type="input" name="email" id="email" />
			<input type="submit" name="submit" id="submit" value="订阅" />
		</form>
		<?php else: ?>
			<?php home_subscribe_no_author($wp_query->query_vars['key']); ?>
		<?php endif; ?>
		<?php elseif(isset($_POST['nickname']) and isset($_POST['email'])): ?>
			<?php qh_subscribe_send_mail($_POST['nickname'],$_POST['email']); ?>
		<?php endif; ?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
