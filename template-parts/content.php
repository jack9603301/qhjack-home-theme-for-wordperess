<?php
/**
 * Template part for displaying posts.
 *
 * @package Nisarg
 */

?>

<article id="post-<?php the_ID(); ?>"  <?php post_class( 'post-content' ); ?>>

	<?php
	if ( is_sticky() && is_home() && ! is_paged() ) {
		printf( '<span class="sticky-post">%s</span>', esc_html__( 'Featured', 'nisarg' ) );
	} ?>

	<?php nisarg_featured_image_disaplay(); ?>

	<header class="entry-header">
		<span class="screen-reader-text"><?php the_title();?></span>
		<?php if ( is_single() ) : ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php else : ?>
			<h2 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h2>
		<?php endif; // is_single() ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<h5 class="entry-date"><?php nisarg_posted_on(); ?></h5>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="bdsharebuttonbox">
			<a href="#" class="bds_more" data-cmd="more">分享到：</a>
			<a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间">QQ空间</a>
			<a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博">新浪微博</a>
			<a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博">腾讯微博</a>
			<a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网">人人网</a>
			<a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信">微信</a>
      </div>
	  	<script>
			window._bd_share_config={
				"common":{
					"bdSnsKey":{},
					"bdText":"",
					"bdMini":"2",
					"bdMiniList":false,
					"bdPic":"",
					"bdStyle":"0",
					"bdSize":"16"
				},
				"share":{
					"bdSize":16
				},
				"selectShare":{
					"bdContainerClass":null,
					"bdSelectMiniList":[
						"qzone",
						"tsina",
						"tqq",
						"renren",
						"weixin"
					]
				}
			};
			var ishttps = 'https:' == document.location.protocol ? true: false;
			if (ishttps) {
				with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='/static/api/js/share.js?v=89860593.js?'];
			}
			else {
				with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
			}
		</script>
		<br />
	</div>

			<div class="entry-content">
				<?php
					the_content( '...<p class="read-more"><a class="btn btn-default" href="'. esc_url( get_permalink( get_the_ID() ) ) . '">' . __( ' Read More', 'nisarg' ) . '<span class="screen-reader-text"> '. __( ' Read More', 'nisarg' ).'</span></a></p>' );
				?>

				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nisarg' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->

	<footer class="entry-footer">
		<div style="text-align:center">
			<?php
				$post_id = get_the_ID();	
				$custom_fields = get_post_custom_keys($post_id);
				if ((!in_array ('ReprintURL', $custom_fields)) and (!in_array ('ReprintTitle', $custom_fields))) :
			?>
			<link href="<?php echo get_stylesheet_directory_uri()?>/reward/reward.css" rel="stylesheet" type="text/css" />
			<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri()?>/reward/reward.js" rel="stylesheet"></script>
            <div class="reward-container">
	            <div class="reward-btn noselect">
                    <div class="popup">
                        <img class="qrcode-left" src="/wp-content/uploads/2018/09/weixin.png" alt="微信扫一扫打赏">
                        <img class="qrcode-right" src="/wp-content/uploads/2018/09/zhifubao.jpg" alt="支付宝扫一扫打赏">
                        <div class="reward-tips">觉得文章对你有用的话鼓励一下我吧</div>
                    </div>
                <span>打赏</span>
                </div>
            </div>
			<?php endif; ?>
		</div>
        <?php nisarg_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
