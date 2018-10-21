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

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script src="//msite.baidu.com/sdk/c.js?appid=1593262731483703"></script>
<?php if(is_single() || is_page()): ?>
<script type="application/ld+json">
	{
		"@context": "https://zhanzhang.baidu.com/contexts/cambrian.jsonld",
		"@id": "<?php echo get_the_permalink(); ?>",
		"appid": "1593262731483703",
		"title": "<?php echo wp_title('|',false,'right')."起航天空"; ?>",
		"images": ["<?php echo home_post_imgs(); ?>"],
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
		"title": "<?php echo wp_title('|',false,'right')."起航天空"; ?>",
		"images": ["<?php echo home_post_imgs(); ?>"]
	}
</script>
<?php else: ?>
<script type="application/ld+json">
	{
		"@context": "https://zhanzhang.baidu.com/contexts/cambrian.jsonld",
		"@id": "<?php echo get_the_permalink(); ?>",
		"appid": "1593262731483703",
		"title": "<?php echo "首页 | ".get_bloginfo('name'); ?>",
		"images": ["<?php echo home_post_imgs(); ?>"]
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
	<div class="site-header">
		<div class="site-branding">
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</a>
		</div><!--.site-branding-->
	</div><!--.site-header-->
</header>
<script type="text/javascript" rel="stylesheet" src="<?php echo get_stylesheet_directory_uri()?>/emoji/emoji.js" ></script>
<script type="text/javascript" rel="stylesheet" src="/wp-content/themes/home/geetest/static/gt.js"></script>
<script type="text/javascript" rel="stylesheet" src="<?php echo get_stylesheet_directory_uri()?>/geetest/geetest.js" ></script>
<div id="content" class="site-content">