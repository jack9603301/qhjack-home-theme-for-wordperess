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
<?php 
    	wp_get_current_user();
		if(is_user_logged_in()) {
			//header("location:/wp-admin/profile.php");
		}
?>
		<form action="" method="post">
			<div id="subscribe-form">
				<h3>网名：</h3>
				<input type="text" name="nickname" id="nickname" style="width:100%;" required="required" placeholder="请输入一个网名" />
				<h3>电子邮箱：</h3>
				<input type="text" name="email" id="email" style="width:100%;" required="required" placeholder="请输入一个合法有效的电子邮箱" pattern="^[A-Za-z0-9\u4e00-\u9fa5]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$" />
				<h3>人机验证：</h3>
				<div id="geetest-subscribe"></div><br />
				<div style="text-align:right" style="width:100%;" >
					<input type="submit" name="submit" id="submit" value="订阅" />
				</div>
			</div>
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
