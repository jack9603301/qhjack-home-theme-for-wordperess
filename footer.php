<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Nisarg
 */

?>
	</div><!-- #content -->
    <link href="<?php echo get_stylesheet_directory_uri()?>/top/top.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" rel="stylesheet" src="<?php echo get_stylesheet_directory_uri()?>/top/top.js" ></script>
    <div class="go-top dn" id="go-top">
<?php
	    if(!isMobile()):
?>
	    <a href="javascript:;" class="uc-2vm"></a>
	    <div class="uc-2vm-pop dn">
		   <h2 class="title-2wm">
			    <div class="qrcode-scan-tip">扫码二维码快速访问本页</div>
		    </h2>
		    <div class="logo-2wm-box">
			    <img src="http://qr.liantu.com/api.php?w=238&text=<?php echo home_url(add_query_arg(array(),$wp->request)); ?>" alt="<?php echo wp_get_document_title(); ?>"  width="238" height="238" alt="扫码在手机上查看" title="扫码在手机上查看">
				<img src="/wp-content/uploads/2018/09/logo.png" class="logoqrcodeimg">
		    </div>
	    </div>
<?php endif; ?>
	    <a href="http://yingkebao.top/web/formview/5a55fdc7e7aea961dab301d8" target="_blank" class="feedback"></a>
	    <a href="javascript:;" class="go"></a>
    </div>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="row site-info">
			ICP许可证：
			<strong>
				<a target="_blank" href="http://www.miitbeian.gov.cn/publish/query/indexFirst.action"	>
				<?php
					echo get_option( 'zh_cn_l10n_icp_num' );
				?>
			</a>
			</strong>
			| 公网备案许可证号：
			<strong>
		 		<a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=44060502000700" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;">
		 			<img src="<?php echo get_theme_root_uri(); ?>/home/images/RecordIcon.png" style="float:left;"/>
		 			<div style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#939393;">粤公网安备 44060502000700号</div>
		 		</a>
			</strong>
			| 站长统计：
			<script type="text/javascript">
				var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
				document.write(unescape("%3Cspan id='cnzz_stat_icon_1272311276'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s13.cnzz.com/z_stat.php%3Fid%3D1272311276%26show%3Dpic2' type='text/javascript'%3E%3C/script%3E"));
			</script>
			<br />
			版权授权协议：
			<strong>
				<a href="https://creativecommons.org/licenses/by-nc-sa/3.0/cn/" title="著名-非商业使用-相同形式共享">BY-NC-SA</a>
			</strong>
			| 网站安全：
			<a target="_blank" href="http://webscan.360.cn/index/checkwebsite/url/www.qhjack.cn">
				<img border="0" src="http://webscan.360.cn/status/pai/hash/16936cc7181e9f338e3f8c3a5cd47cb9"/>
			</a>
			<br />
			<?php echo 'Copyright &copy; '.date( 'Y' ).' 起航天空 版权所有'; ?>
			<br />
			
			<script>
				(function(){
					var bp = document.createElement('script');
					var curProtocol = window.location.protocol.split(':')[0];
					if (curProtocol === 'https') {
						bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
					} else {
						bp.src = 'http://push.zhanzhang.baidu.com/push.js';
					}
					var s = document.getElementsByTagName("script")[0];
					s.parentNode.insertBefore(bp, s);
				})();
		</script>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>