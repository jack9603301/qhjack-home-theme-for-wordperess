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
    <script type="text/javascript" rel="stylesheet" src="<?php echo get_stylesheet_directory_uri(); ?>/top/top.js" ></script>
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
			    <img src="<?php echo GenerateQrcode(home_url(add_query_arg(array(),$wp->request))); ?>" alt="<?php echo wp_get_document_title(); ?>"  width="238" height="238" alt="扫码在手机上查看" title="扫码在手机上查看">
				<img src="/wp-content/uploads/2018/09/logo.png" class="logoqrcodeimg">
		    </div>
	    </div>
<?php endif; ?>
	    <a href="http://yingkebao.top/web/formview/5a55fdc7e7aea961dab301d8" target="_blank" class="feedback"></a>
	    <a href="javascript:;" class="go"></a>
    </div>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="row site-info">
                        <div>
                                <img width="100px" src="/wp-content/uploads/2018/12/youpai.png" title="又拍云" alt="又拍云" ></img>
                        <div />
						<br />
			版权授权协议：
			<strong>
				<a href="https://creativecommons.org/licenses/by-nc-sa/3.0/cn/" title="著名-非商业使用-相同形式共享">BY-NC-SA</a>
			</strong>
			| <a target="_blank" href="https://myssl.com/<?php echo $_SERVER['HTTP_HOST']; ?>">SSL认证</a>
			<br />
            感谢您的支持与信任！本博客已正常运行<a id="days"></a>
			<br />
            <?php printf(' 耗时 %.3f 秒 | 查询 %d 次 | 内存 %.2f MB',timer_stop( 0, 3 ),get_num_queries(),memory_get_peak_usage() / 1024 / 1024);?>
            <script>
                var start = '2018-01-23';//设置为你的建站时间
                start = new Date(start.replace(/-/g, "/"));

				show_date_time();

				function isLeapYear(year) {
					if((year%4==0 && year%100!=0)||(year%100==0 && year%400==0)) {
						return true;
					} else {
						return false;
					}
				}

				function show_date_time(){
					//周期性调用show_date_time()方法
					setTimeout("show_date_time()", 1000);

					var current = new Date();
					//总秒数
					var millisecond = Math.floor((current.getTime() - start.getTime())/1000);
	
					//总天数
					var allDay = Math.floor(millisecond/(24*60*60));

					//注意同getYear的区别
					var startYear = start.getFullYear();
					var currentYear = current.getFullYear();
	
					//闰年个数
					var leapYear = 0;
					for(var i=startYear;i<currentYear;i++){
						if(isLeapYear(i)){
							leapYear++;
						}
					}

					//年数
					var year = Math.floor((allDay - leapYear*366)/365 + leapYear);;
					//天数
        			var day;
        			if(allDay > 366){
	        			day = (allDay - leapYear*366)%365;
       				}else{
                		day = allDay;
        			}
					//取余数(秒)
					var remainder = millisecond%(24*60*60);
					//小时数
					var hour = Math.floor(remainder/(60*60));
					//分钟数
					var minute = Math.floor(remainder%(60*60)/60);
					//秒数
					var second = remainder - hour*60*60 - minute*60; 
					var span = (year>0 ? (year + "年"):"") + day + "天" + hour + "小时" + minute + "分" + second + "秒" ; 
					$("#days").each(function() {
						$this = $(this);
						$this.text(span);
					});
				}
            </script>
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
					var s = document.getE("script")[0];
					s.parentNode.insertBefore(bp, s);
				})();
		</script>
			<div id="cc-myssl-id" style="position: fixed;right: 0;bottom: 0;width: 65px;height: 65px;z-index: 99;">
    			<a target="_blank" href="https://myssl.com/www.qhjack.cn?from=mysslid"><img src="https://static.myssl.com/res/images/myssl-id.png" alt="" style="width:100%;height:100%"></a>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<!-- Start of Rocket.Chat Livechat Script -->
<script type="text/javascript">
(function(w, d, s, u) {
	w.RocketChat = function(c) { w.RocketChat._.push(c) }; w.RocketChat._ = []; w.RocketChat.url = u;
	var h = d.getElementsByTagName(s)[0], j = d.createElement(s);
	j.async = true; j.src = 'https://chat.qhjack.cn/livechat/rocketchat-livechat.min.js?_=201903270000';
	h.parentNode.insertBefore(j, h);
})(window, document, 'script', 'https://chat.qhjack.cn/livechat');
</script>
<!-- End of Rocket.Chat Livechat Script -->
<?php wp_footer(); ?>
</body>
</html>
