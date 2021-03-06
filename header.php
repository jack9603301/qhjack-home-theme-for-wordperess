<?php
/**
 * The header for our theme.
 *
 * Displays all of the head section.
 *
 * @package Nisarg
 */
?>
<!DOCTYPE html>
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 8) ]><!-->

<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta name="baidu-site-verification" content="0efb1755a363246590a88015e529538d"/>
<meta baidu-gxt-verify-token="1d7c9570322bb893274950012bece199" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?9723fc506440065b3770a7e7ad821574";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();
</script>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script src="//msite.baidu.com/sdk/c.js?appid=1593262731483703" async='async'></script>
<script src="https://www.qhjack.cn/swarmcloud-sw.js?auto=true"></script>
<?php if(is_single() || is_page()): ?>
<script type="application/ld+json">
	{
		"@context": "https://zhanzhang.baidu.com/contexts/cambrian.jsonld",
		"@id": "<?php echo get_the_permalink(); ?>",
		"appid": "1593262731483703",
		"title": "<?php echo wp_title('|',false,'right').get_option('blogname'); ?>",
<?php if(home_post_imgs_has()): ?>
		"images": ["<?php echo home_post_imgs(); ?>"],
<?php endif; ?>
		"description": "<?php echo home_excerpt(); ?>",
		"pubDate": "<?php echo get_the_time('Y-m-d\TH:i:s'); ?>",
		"isOriginal":"<?php echo home_Post_isOriginal(); ?>"
	}
</script>
<?php elseif(is_archive()): ?>
<script type="application/ld+json">
	{
		"@context": "https://zhanzhang.baidu.com/contexts/cambrian.jsonld",
		"@id": "<?php echo get_the_permalink(); ?>",
		"appid": "1593262731483703",
		"title": "<?php echo wp_title('|',false,'right').get_option('blogname'); ?>",
		"pubDate": "<?php echo get_the_time('Y-m-d\TH:i:s'); ?>",
<?php if(home_post_imgs_has()): ?>
		"images": ["<?php echo home_post_imgs(); ?>"]
<?php endif; ?>
	}
</script>
<?php else: ?>
<script type="application/ld+json">
	{
		"@context": "https://zhanzhang.baidu.com/contexts/cambrian.jsonld",
		"@id": "<?php echo site_url('/'); ?>",
		"appid": "1593262731483703",
		"title": "<?php echo __("home page",'home')." | ".get_bloginfo('name'); ?>",
		"pubDate": "<?php echo get_the_time('Y-m-d\TH:i:s'); ?>",
<?php if(home_post_imgs_has()): ?>
		"images": ["<?php echo home_post_imgs(); ?>"]
<?php endif; ?>
	}
</script>
<?php endif; ?>
<?php wp_head(); ?>
<script type="text/javascript">
	function IsPC() {
        var userAgentInfo = navigator.userAgent;
        var Agents = ["Android", "iPhone",
                      "SymbianOS", "Windows Phone",
                      "iPad", "iPod"];
        var flag = true;
        for (var v = 0; v < Agents.length; v++) {
            if (userAgentInfo.indexOf(Agents[v]) > 0) {
                flag = false;
                break;
            }
        }
        return flag;
    }
	jQuery(document).ready(function(){
		if(!IsPC()) {
		    var $menu_height = 0;
            jQuery(".menu-toggle").click(function() {
			    var $menu_toggle=jQuery(this).attr("aria-expanded");
			    if($menu_toggle) {
				    $menu_height = jQuery(".navbar-collapse").height();
				}
				var $window_height = jQuery(window).height();
				if($menu_height >= $window_height-60) {
				    jQuery(".navbar-collapse .nav-menu").css("overflow-y","scroll");
				    jQuery(".navbar-collapse .nav-menu").css("height",$window_height-60);
			    } else {
				    jQuery(".navbar-collapse .nav-menu").css("overflow-y","none");
				    jQuery(".navbar-collapse .nav-menu").css("height","");
			    }
		    });
			jQuery(".dropdown-toggle").click(function() {
			    var $li_toggle=jQuery(this).attr("aria-expanded");
				if($li_toggle) {
					$menu_height = jQuery(".navbar-collapse").height();
				} else {
					$menu_height = jQuery(".navbar-collapse").height();
				}
				var $window_height = jQuery(window).height();
				if($menu_height >= $window_height-60) {
				    jQuery(".navbar-collapse .nav-menu").css("overflow-y","scroll");
				    jQuery(".navbar-collapse .nav-menu").css("height",$window_height-60);
			    } else {
				    jQuery(".navbar-collapse .nav-menu").css("overflow-y","none");
				    jQuery(".navbar-collapse .nav-menu").css("height","");
			    }
			});

        }
    });
</script>

<body <?php body_class(); ?>>

<script type="text/javascript" src="//cpro.baidustatic.com/cpro/ui/cm.js" async="async" defer="defer" ></script>

<link rel='stylesheet' href='/wp-content/themes/home/nprogress.css'/>
<script src="/wp-content/themes/home/nprogress.js"></script>
<script type="text/javascript" rel="stylesheet" src="<?php echo get_stylesheet_directory_uri()?>/js/msg.js"></script>
<script type="text/javascript" language="JavaScript">
	document.body.style.display = 'block';

	_cancelwaitwpadminbar = false;

	jQuery.fn.wait = function (func,cancelsatusfunction, times, interval) {
    	var _times = times || -1, //100次
    	_interval = interval || 20, //20毫秒每次
    	_self = this,
    	_selector = this.selector, //选择器
    	_iIntervalID; //定时器id
    	if( this.length ){ //如果已经获取到了，就直接执行函数
        	func && func.call(this);
    	} else {
        	_iIntervalID = setInterval(function() {
				if(cancelsatusfunction && cancelsatusfunction.call(func,times,interval)) { //检测是否应终止检测程序
					clearInterval(_iIntervalID);
				}
            	if(!_times) { //是0就退出
                	clearInterval(_iIntervalID);
            	}
            	_times <= 0 || _times--; //如果是正数就 --

            	_self = jQuery(_selector); //再次选择
            	if( _self.length ) { //判断是否取到
                	func && func.call(_self);
                	clearInterval(_iIntervalID);
            	}
        	}, _interval);
    	}
    	return this;
	}

	jQuery("#wpadminbar").wait(function() {
		jQuery("#wpadminbar").css("top","2px");
		_cancelwaitwpadminbar = true;
    msg.loading("起航天空正在载入，请稍候！");
	},function(func, times, interval) {
		if(_cancelwaitwpadminbar) {
			return true;
		} else {
			return false;
		}
	})

	NProgress.start();

    //: 判断网页是否加载完成
	document.onreadystatechange = function() {
    	if (document.readyState == "complete") {
			  NProgress.done();
			  jQuery("#wpadminbar").css("top","0px");
			  _cancelwaitwpadminbar = true;
        msg.close()
        msg.success("起航天空载入完成！")
    	}
	}
</script>
<!-- Loader animation stop -->

<div id="page" class="hfeed site">
<header id="masthead"  role="banner">
	<nav id="site-navigation" class="main-navigation navbar-fixed-top navbar-left" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="container" id="navigation_menu">
			<div class="navbar-header">
				<?php if ( has_nav_menu( 'primary' ) ) { ?>
					<button type="button" class="menu-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				<?php } ?>
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' )?></a>
			</div><!-- .navbar-header -->
			<?php if ( has_nav_menu( 'primary' ) ) {
				wp_nav_menu( array(
					'theme_location'    => 'primary',
					'container'         => 'div',
					'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
					'menu_class'        => 'primary-menu',
				) ); } ?>
		</div><!--#container-->
	</nav>
	<div id="cc_spacer"></div><!-- used to clear fixed navigation by the themes js -->
	<div class="adv_frame">
        <div class="adv">
            <div class="_w89c7dbjvik"></div>
        </div>
    </div>
    <script type="text/javascript">
        (window.slotbydup = window.slotbydup || []).push({
            id: "u6358207",
            container: "_w89c7dbjvik",
            async: true
        });
    </script>
</header>
<script type="text/javascript" rel="stylesheet" src="<?php echo get_stylesheet_directory_uri()?>/emoji/emoji.js" async='async'></script>
<script type="text/javascript" rel="stylesheet" src="/wp-content/themes/home/geetest/static/gt.js" async='async'></script>
<script type="text/javascript" rel="stylesheet" src="<?php echo get_stylesheet_directory_uri()?>/geetest/geetest.js" async='async'></script>
<div id="content" class="site-content">
