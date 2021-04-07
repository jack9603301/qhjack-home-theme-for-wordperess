<?php

/**
 * Custom template tags for this theme.
 */

use home\phpqrcode\QRcode;

require get_theme_root().'/home/inc/template-tags.php';
require get_theme_root().'/home/inc/head-seo.php';
require get_theme_root().'/home/inc/sitemap.php';



require  get_theme_root().'/home/url.php';  //url.php
require get_theme_root().'/home/push.php';  //push.php
require get_theme_root().'/home/setting.php';  //setting.php
require get_theme_root().'/home/user_email.php';  //user_email
require get_theme_root().'/home/other.php';  //other
require get_theme_root().'/home/wp-login-ext.php'; //login-ext
require get_theme_root().'/home/widget/widget_user.php'; //widget_user
require get_theme_root().'/home/inc/subscribe.php'; //widget_user
require get_theme_root().'/home/user_profile.php'; //user_profile
require get_theme_root().'/home/mattermost.php';  //mattermost


//百度提交

add_action('publish_post', 'BaiduSubmit', 2,1);
add_action('publish_page', 'BaiduSubmit', 2,1);
add_action('publish_post','BeraSubmit',2,1);
add_action('publish_page','BeraSubmit',2,1);

//URL重写

add_filter('wp_link_pages_link','home_wp_link_pages_link',10,2);

add_filter('search_rewrite_rules', 'home_search_rewrite_rules',1);

add_action('template_redirect', 'redirect_search' ,1);

add_filter('redirect_canonical','home_pages_redirect_filter',1,2);

add_filter('post_rewrite_rules', 'home_post_rewrite_rules',1);

add_filter('page_rewrite_rules','home_page_rewrite_rules',1);

add_filter('author_rewrite_rules','home_author_rewrite_rules',1);

add_filter('category_rewrite_rules','home_category_rewrite_rules',1);

add_filter('author_link','home_author_link',2, 3);

add_filter( 'rewrite_rules_array','home_custom_rewrite_rules',1);

add_filter('page_link','home_page_link',2,3);

add_filter('attachment_link','home_attachment_link',2,2);

add_filter('user_trailingslashit','home_pages_link_trailingslash',2,2);

add_filter('post_link','home_post_link',2,3);

add_filter('post_type_link','home_post_type_link',2,4);

add_filter('term_link','home_term_link',2,3);

add_filter('wp_link_pages','home_wp_link_pages_filter',2,2);

add_filter('query_vars', 'home_query_vars');

add_action("template_include", 'home_custom_emplate');

add_filter('slashpress_command_qhjack', 'qh_slashpress_command_qhjack',10,2);

add_action('slashpress_help_qhjack', 'qh_slashpress_help_qhjack',100,2);

add_action('do_feed', 'disable_fedd', 1);
add_action('do_feed_rdf', 'disable_fedd', 1);
add_action('do_feed_rss', 'disable_fedd', 1);
add_action('do_feed_rss2', 'disable_fedd', 1);
add_action('do_feed_atom', 'disable_fedd', 1);
add_action('wp_head','disable_feed_url',1);

//user_email.php

add_filter('retrieve_password_message', 'reset_password_message', null, 2);
if((!defined('DISABLE_MATTERMOST') or !DISABLE_MATTERMOST) and defined('MATTERMOST_PUSH_URL')) {
    add_action( 'publish_post', 'qh_publish_post_report_email' );
    add_action( 'publish_post', 'qh_publish_post_mattermost' );
    add_action('wp_set_comment_status', 'qh_comment_mattermost_notify', 20, 2);
    add_action('comment_post', 'qh_comment_mattermost_notify', 20, 2);
    if(defined('TEST_DEBUG') and TEST_DEBUG) {
        fwrite(STDOUT,"Mattermost push is enabled\n");
    }
} else {
    if(defined('TEST_DEBUG') and TEST_DEBUG) {
        fwrite(STDOUT,"Mattermost push is disabled\n");
    }
}
add_filter('wp_new_user_notification_email','qh_new_user_notification_email',2,3);
add_filter('wp_new_user_notification_email_admin','qh_new_user_notification_email_admin',2,3);
add_filter('email_change_email','qh_password_change_email',2,3);
add_filter( 'wp_mail_content_type', 'qh_html_content_type' );
add_action('wp_set_comment_status', 'qh_comment_mail_notify_approve', 20, 2);
add_action('wp_set_comment_status', 'qh_comment_mail_notify_unapprove', 20, 2);
add_action('comment_post', 'qh_comment_mail_notify_approve', 20, 2);
add_action('comment_post', 'qh_comment_mail_notify_unapprove', 20, 2);

//other

add_filter('get_the_archive_title','home_get_the_archive_title',1);

add_action( 'login_form', 'login');
add_action( 'register_form', 'register');
add_action( 'register_post', 'register_field_validate', 10, 3 );
add_action( 'user_register', 'update_register_fields' );
add_action( 'lostpassword_form', 'lostpassword');

add_filter('wp_nav_menu_items','add_search_to_wp_menu',10,2);

add_filter('the_excerpt','home_the_excerpt');

add_filter('post_class','home_origin_class_addin',2,3);

add_filter('manage_posts_columns','home_post_columns');

add_action('manage_posts_custom_column','home_post_column_value',10, 2);

add_filter('manage_pages_columns','home_page_columns');

add_action('manage_pages_custom_column','home_page_column_value',10, 2);

add_action('admin_head','add_admin_css',2);

add_action( 'widgets_init', 'home_widget_init' );

add_filter( 'manage_edit-post_sortable_columns', 'add_post_page_sortable_columns' );

add_filter( 'manage_edit-page_sortable_columns', 'add_post_page_sortable_columns' );

add_action('after_setup_theme', 'home_theme_setup');

// Load Google Font

add_action( 'wp_enqueue_scripts', 'home_google_fonts' );

// Load Copy Script

add_action( 'wp_enqueue_scripts', 'home_copy_script' );

// Auto Loader pRedis

add_action( 'show_user_profile', 'extra_user_profile_fields' );
add_action( 'edit_user_profile', 'extra_user_profile_fields' );
add_action( 'personal_options_update', 'save_extra_user_profile_fields' );
add_action( 'edit_user_profile_update', 'save_extra_user_profile_fields' );

add_action('restrict_manage_posts','posts_CopyrightType_type_filter',10);

add_action('restrict_manage_posts','posts_Author_type_filter',10);

add_filter( 'parse_query', 'post_filter_request_query' , 10);

// Load Setting

add_action( 'admin_init', 'global_setting' );

// Load REST Init

add_action('rest_api_init', 'RestInit');

// Enable asynchronous JS/CSS loading

add_filter('clean_url', 'asynchronous_loading');

function asynchronous_loading($url) {
    $async_js_list = [
        get_stylesheet_directory_uri() . '/js/custom.js',
        '/wp-content/themes/home/copy/copy.js'
    ];
    if(strpos($url, '.js')) {
        foreach ($async_js_list as $async_js) {
            if(strpos($url, $async_js)) {
                return "$url' async='async";
            }
        }
    }
    return $url;
    
}

// Unset Update

function filter_plugin_updates( $value ) {
	unset( $value->response['wx-custom-share-pro/wx-custom-share-pro.php'] );
	unset( $value->response['redis-cache/redis-cache.php'] );
    unset( $value->response['wp-editormd/wp-editormd.php'] );
    return $value;
}

add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );

// function

function RestInit() {
	//register_rest_route参数顺序：namespace、route、args、(bool)$override
	register_rest_route('postViews', 'postViews',[
		'methods' => 'POST',
		'callback' => 'setPostViews',
	]);
	//register_rest_route参数顺序：namespace、route、args、(bool)$override
	register_rest_route('like', 'thumbsUp',[
		'methods' => 'POST',
		'callback' => 'incrThumbsUpCount',
	]);
	register_rest_route('like', 'cancelThumbsUp',[
		'methods' => 'POST',
		'callback' => 'decrThumbsUpCount',
	]);
}

// Load Scrpt
add_action( 'wp_enqueue_scripts', 'loadScript');

function loadScript() {
	wp_enqueue_script( 'custom', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery'), '1.0', true);
	wp_localize_script('custom', 'jsVar', ['id'=>get_the_ID(),'is_not_home'=>(int)(is_single() || is_page())]);
}

auto_loader_predis();

function auto_loader_predis() {
	if(!class_exists('Predis\Client')) {
		require_once __DIR__ . '/predis/autoload.php';
	}
}

function home_google_fonts() {
	wp_register_style( 'nisarggooglefonts', '/wp-content/themes/home/google_font/css/google_font.css', array(), null );
}

function home_copy_script() {
	wp_enqueue_script('copy','/wp-content/themes/home/copy/copy.js',array('jquery'),null,true);
	
}

function home_theme_setup(){
    load_theme_textdomain('home', get_template_directory() . '/languages');
}

/**
 * Get Redis instance
 * @return Redis
 */
function getRedisInstance(){
	$redis_params = get_redis_params();
	$server = [
	    'scheme' => 'tcp',
	    'host' => $redis_params['servers'],
	    'port' => 6379
    ];
	$option = [
		#'cluster' => 'redis',
		'parameters' => [
			'password' => $redis_params['password'],
		]
	];
	$redis = new Predis\Client($server,$option);
	return $redis;
}

/**
 * 设置浏览数，并返回设置后的浏览数，调用方式：在header.php文件的html标签之前中使用：
 * $GLOBALS['pageView'] = setPostViews(get_the_ID());
 * 然后在content.php页面你要显示的位置打印 $GLOBALS['pageView'] 变量。
 *
 * @param $postID
 *
 * @return int|mixed
 */
	function setPostViews() {
	$postID = $_POST['post_ID'] ?? 0;
	if($postID===0){
		return ['code'=>-1,'msg'=>'缺少post_ID'];
	}
		
	$redis = getRedisInstance();
	$ip_key = 'post_views_ip_count_'.$postID.'_'.$_SERVER['REMOTE_ADDR'];
	$ipCount = $redis->get($ip_key);
		//1分钟内同一个ip对同一篇文章浏览量超过15次，则有可能是机器人，也有
		//可能一个公司外网ip只有一个，但公司内有15个人浏览，不过这种可能性比较少。
	if($ipCount!==false && $ipCount>15){
		return ['code'=>-2,'msg'=>'浏览太频繁，ip已被禁止添加浏览量'];
	}
		
	$count_key = 'post_views_count';
	$redis_key = $count_key.'_'.$postID;
	$count = $redis->get($redis_key);
	$redis_count_not_exists = false;
	if($count===null){
		$count = get_post_meta($postID, $count_key, true);
		$redis_count_not_exists = true;
	}
	
	//如果为空字符串，则表示没有这条记录，添加一条，同时初始数字为1，因为浏览了肯定就是1，而不可能是0
	if($count===''){
		$count = 1;
		add_post_meta($postID, $count_key, $count);
	}else{
		//如果不为空，理论上肯定是数字，直接自加1就行，但为了安全，还是强转成数字
		$count = (int)$count;
		$count++;
		update_post_meta($postID, $count_key, $count);
	}
	
	if($redis_count_not_exists){
		//有效期一个月
		$redis->setex($redis_key, 2592000,$count );
	}else{
		$redis->incr($redis_key);
	}
	
	//控制同一个ip在一定时间内对同一篇文章点赞次数，防止被攻击
	if($ipCount===false){
		$redis->set($ip_key,1,60);
	}else{
		$redis->incr($ip_key);
	}
	return ['code'=>0, 'count'=>$count, 'msg'=>'浏览量+1成功'];
}

/**
 * 获取浏览器数，列表页(即首页)专用（实际上要在content-excerpt.php里调用），详情页请使用
 * setPostViews，因为详情页本来就要设置，设置的时侯已经可以直接返回浏览量，就没必要再去获取一次了。
 *
 * @param $postID
 *
 * @return int
 */
function getPostViews($postID){
	$count_key = 'post_views_count';
	$redis_key = $count_key.'_'.$postID;
	$redis = getRedisInstance();
	$count = $redis->get($redis_key);
	if($count===false){
		//$count为false表示未设置redis缓存，这种情况非常少，所以一般不会进来这里
		$count = get_post_meta($postID, $count_key, true);
	}
	return (int)$count;
}

/**
 * 设置点赞数
 *
 * @return bool|int|mixed|string
 */
function incrThumbsUpCount() {
	$postID = $_POST['post_ID'] ?? 0;
	if($postID===0){
		return ['code'=>-1,'msg'=>'缺少post_ID'];
	}
		
	$redis = getRedisInstance();
	$ip_key = 'thumbsup_ip_count_'.$postID.'_'.$_SERVER['REMOTE_ADDR'];
	$ipCount = $redis->get($ip_key);
	//1分钟内同一个ip对同一篇文章点赞数超过10次，则有可能是机器人，也有
	//可能一个公司外网ip只有一个，但公司内有10个人点，不过这种可能性比较少。
	if($ipCount!==false && $ipCount>10){
		return ['code'=>-2,'msg'=>'对不起，系统检查到点赞太频繁,疑似机器人，您的ip已被禁止点赞'];
	}
	$count_key = 'thumbsup_count';
	$redis_key = $count_key.'_'.$postID;
	$count = $redis->get($redis_key);
	$redis_count_not_exists = false;
	if($count===null){
		$count = get_post_meta($postID, $count_key, true);
		$redis_count_not_exists = true;
	}
	
	//如果为空字符串，则表示没有这条记录，添加一条，同时初始数字为1，因为浏览了肯定就是1，而不可能是0
	if($count===''){
		$count = 1;
		add_post_meta($postID, $count_key, $count);
	}else{
		//如果不为空，理论上肯定是数字，直接自加1就行，但为了安全，还是强转成数字
		$count = (int)$count;
		$count++;
		update_post_meta($postID, $count_key, $count);
	}
	
	if($redis_count_not_exists){
		//有效期一个月
		$redis->setex($redis_key, 2592000,$count );
	}else{
		$redis->incr($redis_key);
	}
	
	//控制同一个ip在一定时间内对同一篇文章点赞次数，防止被攻击
	if($ipCount===false){
		$redis->setex($ip_key,60,1);
	}else{
		$redis->incr($ip_key);
	}
	return ['code'=>0, 'count'=>$count, 'msg'=>'点赞成功'];
}

/**
 * 取消点赞（我一直都讨厌那种我不小心点了选但无法取消的，因为我真有可能不小心点到了，但其实不想赞的）
 * @return array
 */
function decrThumbsUpCount(){
	$postID = $_POST['post_ID'] ?? 0;
	if($postID===0){
		return ['code'=>-1,'msg'=>'缺少post_ID'];
	}
	
	$redis = getRedisInstance();
	$ip_key = 'thumbsup_ip_count_'.$postID.'_'.$_SERVER['REMOTE_ADDR'];
	$ipCount = $redis->get($ip_key);
	//1分钟内同一个ip对同一篇文章点赞数超过10次，则有可能是机器人，也有
	//可能一个公司外网ip只有一个，但公司内有10个人点，不过这种可能性比较少。
	if($ipCount!==false && $ipCount>10){
		return ['code'=>-2,'msg'=>'对不起，系统检查到取消点赞太频繁,疑似机器人，您的ip已被禁止点赞'];
	}
		
	$count_key = 'thumbsup_count';
	$redis_key = $count_key.'_'.$postID;
	$count = $redis->get($redis_key);
	$redis_count_not_exists = false;
	if($count===null){
		$count = get_post_meta($postID, $count_key, true);
		$redis_count_not_exists = true;
	}
		
	//如果为空字符串，则表示没有这条记录，添加一条，同时初始数字为1，因为浏览了肯定就是1，而不可能是0
	if($count===''){
		return ['code'=>-3, 'msg'=>'该文章点击数为零，无需取消点赞'];
	}else{
		//如果不为空，理论上肯定是数字，直接自减1就行，但为了安全，还是强转成数字
		$count = (int)$count;
		$count--;
		update_post_meta($postID, $count_key, $count);
	}
		
	if($redis_count_not_exists){
		//有效期一个月
		$redis->setex($redis_key, 2592000,$count );
	}else{
		$redis->decr($redis_key);
	}
	
	//控制同一个ip在一定时间内对同一篇文章点赞次数，防止被攻击
	if($ipCount===false){
		$redis->set($ip_key,1,60);
	}else{
		$redis->incr($ip_key);
	}
	return ['code'=>0, 'count'=>$count, 'msg'=>'取消点赞成功'];
}

/**
 * 获取文章点赞数
 * @param $postID
 *
 * @return int
 */
function getThumbsUpCount($postID){
	$count_key = 'thumbsup_count';
	$redis_key = $count_key.'_'.$postID;
	$redis = getRedisInstance();
	$count = $redis->get($redis_key);
	if($count===false){
		//$count为false表示未设置redis缓存，这种情况非常少，所以一般不会进来这里
		$count = get_post_meta($postID, $count_key, true);
	}
	return (int)$count;
}

function isMobile() { 
    // 如果有HTTP_X_WAP_PROFILE则一定是移动设备
    if (isset($_SERVER['HTTP_X_WAP_PROFILE'])) {
        return true;
    } 
    // 脑残法，判断手机发送的客户端标志,兼容性有待提高。其中'MicroMessenger'是电脑微信
    if (isset($_SERVER["HTTP_USER_AGENT"])) {
        $clientkeywords = array('nokia','sony','ericsson','mot','samsung','htc','sgh','lg','sharp','sie-','philips','panasonic','alcatel','lenovo','iphone','ipod','blackberry','meizu','android','netfront','symbian','ucweb','windowsce','palm','operamini','operamobi','openwave','nexusone','cldc','midp','wap','mobile','MicroMessenger'); 
    // 从HTTP_USER_AGENT中查找手机浏览器的关键字
    if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT']))) {
        return true;
    }
	return false;
  } 
  // 协议法，因为有可能不准确，放到最后判断
  if (isset ($_SERVER['HTTP_ACCEPT'])) { 
    // 如果只支持wml并且不支持html那一定是移动设备
    // 如果支持wml和html但是wml在html之前则是移动设备
    if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html')))) {
      return true;
    } 
  } 
  return false;
}

//优先获取文章中的三张图，否则依次获取自定义图片/特色缩略图/文章首图 last update 2017/11/23
function home_post_imgs(){
    global $post;
    $content = $post->post_content;
    preg_match_all('/<img .*?src=[\"|\'](.+?)[\"|\'].*?>/', $content, $strResult, PREG_PATTERN_ORDER);  
    $n = count($strResult[1]);  
    if($n >= 3){
        $src = $strResult[1][0].'","'.$strResult[1][1].'","'.$strResult[1][2];
    }else{
        if( has_post_thumbnail() ){   //如果有特色缩略图，则输出缩略图地址
            $thumbnail_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full');
            $src = $thumbnail_src [0];
        } else {    //文章中获取
            if($n > 0){ // 提取首图
                $src = $strResult[1][0];
            } else {
				$src = "";
			}
        }
    }
    return $src;
}

function home_post_imgs_has() {
	global $post;
    $content = $post->post_content;
    preg_match_all('/<img .*?src=[\"|\'](.+?)[\"|\'].*?>/', $content, $strResult, PREG_PATTERN_ORDER);  
    $n = count($strResult[1]);  
    if($n >= 3){
        return true;
    }else{
        if( has_post_thumbnail() ){   //如果有特色缩略图，则输出缩略图地址
            return true;
        } else {    //文章中获取
            if($n > 0){ // 提取首图
                return true;
            } else {
				return false;
			}
        }
    }
}

function home_excerpt($len=220){
    if ( is_single() || is_page() ){
        global $post;
        if ($post->post_excerpt) {
            $excerpt  = $post->post_excerpt;
        } else {
            if(preg_match('/<p>(.*)<\/p>/iU',trim(strip_tags($post->post_content,"<p>")),$result)){
                $post_content = $result['1'];
            } else {
                $post_content_r = explode("\n",trim(strip_tags($post->post_content)));
                $post_content = $post_content_r['0'];
            }
            $excerpt = preg_replace('#^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,0}'.'((?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$len.'}).*#s','$1',$post_content);
        }
        return str_replace(array("\r\n", "\r", "\n"), "", $excerpt);
    }
}

function home_Post_isOriginal() {
	if ( is_single() || is_page() ){
		global $post;
		if($post->ID) {
			$custom_fields = get_post_custom_keys($post_id);
			$CopyrightType = get_field('CopyrightType',$post_id);
			if($CopyrightType == "Original") {
                return 1;
			} else if($CopyrightType == "Reprint") {
                return 0;
			} else {
                return 1;
			}
		}
	}
}

function add_search_to_wp_menu ( $items, $args ) {
	if(isMobile()) {
		if( 'primary' === $args -> theme_location ) {
            $menu .= '<li id="menu-search-head" class="menu-item menu-item-type-post_type menu-search-head"><div class="menu-search">';
            $menu .= get_search_form(false);
            $menu .= '</div></li>';
		    $menu .= $items;
	    }
		return $menu;
	} else {
		$items .= '<li id="menu-search-head" class="menu-item menu-item-type-post_type menu-search-head"><div class="menu-search">';
		$items .= get_search_form(false);
		$items .= '</div></li>';
		return $items;
	}
}

function home_the_excerpt($post_excerpt) {
	if(has_excerpt())
	{
		$post_excerpt .= apply_filters( 'excerpt_more','');
		$post_excerpt = str_replace('...','',$post_excerpt);
	}
	
	return $post_excerpt;
}

function home_origin_class_addin($classes,$class,$post_id) {
	$custom_fields = get_post_custom_keys($post_id);
	if(get_field('CopyrightType',$post_id) == "Original") {
        if(is_single()) {
            array_push($classes,"origin");
        }
        else {
            array_push($classes,"origin-archive");
        }
	}
	return $classes;
}

function home_page_columns($columns) {
	$newcolumns['cb'] = $columns['cb'];
	$newcolumns['id'] = __('ID');
	$newcolumns['title'] = $columns['title'];
	$newcolumns['categories'] = $columns['categories'];
	$newcolumns['tags'] = $columns['tags'];
	$newcolumns['comments'] = $columns['comments'];
	$newcolumns['date'] = $columns['date'];
	$columns = $newcolumns;  //根据约定，修改第一参数
	return $columns;  //返回参数
}

function home_post_columns($columns) {
	$newcolumns['cb'] = $columns['cb'];
	$newcolumns['id'] = __('ID');
	$newcolumns['title'] = $columns['title'];
	$newcolumns['article_author'] = __('Article author','home');
	$newcolumns['original'] = __('Original article','home');
	$newcolumns['categories'] = $columns['categories'];
	$newcolumns['tags'] = $columns['tags'];
	$newcolumns['comments'] = $columns['comments'];
	$newcolumns['postviews'] = __('Post Views','home');
	$newcolumns['thumbs_up_Count'] = __('Thumbs Up Count','home');
	$newcolumns['date'] = $columns['date'];
	$columns = $newcolumns;  //根据约定，修改第一参数
	return $columns;  //返回参数
}

function add_post_page_sortable_columns($columns) {
	$columns['id'] = 'id';
	return $columns;
}

function home_post_column_value($column_name, $id) {
	global $wpdb;
    switch ($column_name) {
	case 'id':
		echo $id;
		break;
	case 'original':
		if(get_field('CopyrightType',$id) == "Original") {
            echo __("Yes",'home');
		} else {
            echo __("No",'home');
		}
		break;
	case 'article_author':
		$custom_fields = get_post_custom_keys($id);
		if(get_field('CopyrightType',$id) == "Original") {
            echo  get_the_author_meta('display_name',get_post($id)->post_author);
		} else {
            if(get_field('DisplayAuthor',$id)) {
                echo '<a href="' . get_field('ReprintURL',$id) . '" title="'.get_field('ReprintTitle',$id). '">'. get_field('Author',$id) .'</a>';
            } else {
                echo __("Not display",'home');
            }
		}
		break;
	case 'postviews':
		echo getPostViews($id);
		break;
	case 'thumbs_up_Count':
		echo getThumbsUpCount($id);
		break;
	default:
        break;
    }
}

function home_page_column_value($column_name, $id) {
	global $wpdb;
    switch ($column_name) {
    case 'id':
        echo $id;
        break;
    default:   
        break;   
    }
}

function add_admin_css() {
?>
<link rel='stylesheet' href="<?php echo get_stylesheet_directory_uri()?>/admin.css" type="text/css" />
<?php
}

function home_disable_plugin_updates($value) {
	unset($value->response['WP-Editor.md/wp-editormd.php']);
	return $value;
}

function GenerateQrcode($data,$level=3,$size=3) {
	require_once(get_stylesheet_directory() . '/phpqrcode/phpqrcode.php');
	$file_cache_path = WP_CONTENT_DIR.'/cache/';
	$filePath = $file_cache_path.'tmp.png';
	if(!is_dir($file_cache_path)) {
		@mkdir($file_cache_path, 0775);
	}
	QRcode::png($data,$filePath,$level,$size);
	$imageString = base64_encode(file_get_contents($filePath));
	@unlink($filePath);
	$dataUrl = 'data:image/png;base64,'.$imageString;
	return $dataUrl;
}

function home_widget_init() {
    /*移除Wordpress自带的Meta小工具*/
    unregister_widget('WP_Widget_Meta');
    /*注册自己的Meta小工具*/
    register_widget('WP_Widget_User_Meta');
}

function get_redis_params() {
	
	//Load wp-config.php Settings
	
	if(defined('WP_REDIS_HOST')) {
		$redis_servers = WP_REDIS_HOST;
	}

	if(defined('WP_REDIS_PASSWORD')) {
		$redis_password = WP_REDIS_PASSWORD;
	}
	
	if(defined('SUBSCRIBE_REDIS_TTL')) {
		$redis_ttl = SUBSCRIBE_REDIS_TTL;
	}
	
	return array(
		'servers' => $redis_servers,
		'password' => $redis_password,
		'subscribe_ttl' => $redis_ttl,
	);
}


add_filter('use_block_editor_for_post', '__return_false');

function posts_CopyrightType_type_filter($post_type) {
	if('post' !== $post_type) {
		return;
	} else {
		$selected = '';
		$request_attr = 'CopyrightType';
		if ( isset($_GET[$request_attr]) ) {
    		$selected = $_GET[$request_attr];
  		}
		$meta_key = 'CopyrightType';
		global $wpdb;
   		$results = $wpdb->get_col( 
   			$wpdb->prepare( "
     			SELECT DISTINCT pm.meta_value FROM {$wpdb->postmeta} pm
     			LEFT JOIN {$wpdb->posts} p ON p.ID = pm.post_id
     			WHERE pm.meta_key = '%s'
     			AND p.post_status IN ('publish', 'draft')
     			ORDER BY pm.meta_value", 
     			$meta_key
   			)
  		);
		
		echo '<select id="CopyrightType" name="CopyrightType">';
   		echo '<option value="">' . __( 'Copyright Type', 'home' ) . ' </option>';
   		foreach($results as $location){
     		if($location == 'Original') {
				$select = ($location == $selected) ? ' selected="selected"':'';
     			echo '<option value="'.$location.'"'.$select.'>' .  __('Original','home') . ' </option>';
			} else if($location == 'Reprint') {
				echo $result->ID;
				$select = ($location == $selected) ? ' selected="selected"':'';
     			echo '<option value="'.$location.'"'.$select.'>' . __('Reprint','home') . ' </option>';
			}
   		}
   		echo '</select>';
	}
}

function posts_Author_type_filter($post_type) {
	if('post' !== $post_type) {
		return;
	} else {
		$selected = '';
		$CopyrightType = null;
		$results = null;
		$results2 = null;
		$request_attr = 'Author';
		$request_attr2 = 'CopyrightType';
		if ( isset($_GET[$request_attr]) ) {
    		$selected = $_GET[$request_attr];
  		}
		if ( isset($_GET[$request_attr2]) ) {
    		$CopyrightType = $_GET[$request_attr2];
		  }
		 
		  $matches = [];

		  if(preg_match('/^Original_(.*)$/',$selected,$matches)) {
			  $selected=$matches[1];
		  }

		$meta_key = 'Author';
		$meta_key2 = 'CopyrightType';
		global $wpdb;
		if($CopyrightType === "Reprint") {
			$results = $wpdb->get_col( 
   				$wpdb->prepare( "
     				SELECT DISTINCT pm.meta_value FROM {$wpdb->postmeta} pm
     				LEFT JOIN {$wpdb->posts} p ON p.ID = pm.post_id
     				WHERE pm.meta_key = '%s'
     				AND p.post_status IN ('publish', 'draft')
     				ORDER BY pm.meta_value", 
     				$meta_key
   				)
  			);
		} else if($CopyrightType === "Original") {
			$results2 = $wpdb->get_results( 
   				$wpdb->prepare( "
     				SELECT DISTINCT pm.ID,pm.display_name FROM {$wpdb->users} pm
     				LEFT JOIN {$wpdb->posts} p ON p.post_author = pm.ID
     				WHERE p.post_status IN ('publish', 'draft')
     				ORDER BY pm.display_name"
   				)
  			);
		} else {
			$results = $wpdb->get_col( 
   				$wpdb->prepare( "
     				SELECT DISTINCT pm.meta_value FROM {$wpdb->postmeta} pm
     				LEFT JOIN {$wpdb->posts} p ON p.ID = pm.post_id
     				WHERE pm.meta_key = '%s'
     				AND p.post_status IN ('publish', 'draft')
     				ORDER BY pm.meta_value", 
     				$meta_key
   				)
  			);
			$results2 = $wpdb->get_results( 
   				$wpdb->prepare( "
     				SELECT DISTINCT pm.ID,pm.display_name FROM {$wpdb->users} pm
     				LEFT JOIN {$wpdb->posts} p ON p.post_author = pm.ID
     				WHERE p.post_status IN ('publish', 'draft')
     				ORDER BY pm.display_name"
   				)
  			);
		}
   		

		
		echo '<select id="Author" name="Author">';
   		echo '<option value="">' . __( 'Aricale Author', 'home' ) . ' </option>';
		if($results != null) {
			foreach($results as $location){
     			$select = ($location == $selected) ? ' selected="selected"':'';
     			echo '<option value="'.$location.'"'.$select.'>' . $location . ' </option>';
   			}
		}
   		
		if($results2 != null) {
			foreach($results2 as $location){
     			$select = ($location->ID == $selected) ? ' selected="selected"':'';
     			echo '<option value="Original_'.$location->ID.'"'.$select.'>' . $location->display_name . ' </option>';
   			}
		}
   		echo '</select>';
	}
}

function post_filter_request_query($query){
    // 只修改后台文章列表页面的主查询
    if( !(is_admin() AND $query->is_main_query()) ){ 
      	return $query;
    }
	
    // 如果不是我们需要查询的文章类型，并且设置了自定义查询参数，返回原始查询
    if( ('post' != $query->query['post_type']) or ((!isset($_REQUEST['CopyrightType'])) and (!isset($_REQUEST['Author']))) ){
      	return $query;
    }
    // 如果自定义筛选条件是默认值，返回原始查询
    if((!$_GET['CopyrightType']) and (!$_GET['Author'])){
      	return $query;
    } else if((!$_GET['CopyrightType']) and ($_GET['Author'])) {
		
		$value = $_GET['Author'];
		
		$matches = [];
		
		if(preg_match('/^Original_(.*)$/',$value,$matches)) {
			$query->query_vars['author'] = $matches[1];
			$query->query_vars['meta_query'] =  array(
				array(
					'key' => 'CopyrightType',
					'value' => 'Original',
					'compare' => '=',
					'type' => 'CHAR'
				)
			);
		} else {
			// 修改查询参数
			$query->query_vars['meta_query'] =  array(
				array(
					'key' => 'Author',
					'value' => $_GET['Author'],
					'compare' => '=',
					'type' => 'CHAR'
				)
			);
		}
		
		
	} else if(($_GET['CopyrightType']) and (!$_GET['Author'])) {
		// 修改查询参数
    	$query->query_vars['meta_query'] =  array(
			array(
				'key' => 'CopyrightType',
				'value' => $_GET['CopyrightType'],
				'compare' => '=',
				'type' => 'CHAR'
			)
		);
	} else {
		$matches = [];
		if(preg_match('/^Original_(.*)$/',$value,$matches)) {
			// 修改查询参数
			$query->query_vars['author'] = $matches[1];
			$query->query_vars['meta_query'] =  array(
				array(
					'key' => 'CopyrightType',
					'value' => $_GET['CopyrightType'],
					'compare' => '=',
					'type' => 'CHAR'
				)
			);
		} else {
			// 修改查询参数
    		$query->query_vars['meta_query'] =  array(
				array(
					'key' => 'Author',
					'value' => $_GET['Author'],
					'compare' => '=',
					'type' => 'CHAR'
				),
				array(
					'key' => 'CopyrightType',
					'value' => $_GET['CopyrightType'],
					'compare' => '=',
					'type' => 'CHAR'
				)
			);
		}
		
	}
    // 返回修改后的查询
    return $query;
  }


?>

