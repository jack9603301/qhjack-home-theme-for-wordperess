<?php

/**
 * Custom template tags for this theme.
 */

use home\phpqrcode\QRcode;

require get_theme_root().'/home/inc/template-tags.php';


require  get_theme_root().'/home/url.php';  //url.php
require get_theme_root().'/home/push.php';  //push.php
require get_theme_root().'/home/user_email.php';  //user_email
require get_theme_root().'/home/other.php';  //other
require get_theme_root().'/home/wp-login-ext.php'; //login-ext
require get_theme_root().'/home/widget/widget_user.php'; //widget_user

//百度提交

add_action('publish_post', 'BaiduSubmit', 2,1);
add_action('publish_page', 'BaiduSubmit', 2,1);
add_action('publish_post','BeraSubmit',2,1);
add_action('publish_page','BeraSubmit',2,1);

//URL重写

add_filter('search_rewrite_rules', 'home_search_rewrite_rules',1);

add_action('template_redirect', 'redirect_search' ,1);

add_filter('redirect_canonical','home_pages_redirect_filter',1,2);

add_filter('post_rewrite_rules', 'home_post_rewrite_rules',1);

add_filter('page_rewrite_rules','home_page_rewrite_rules',1);

add_filter('author_rewrite_rules','home_author_rewrite_rules',1);

add_filter('category_rewrite_rules','home_category_rewrite_rules',1);

add_filter('author_link','home_author_link',2, 3);

add_filter('page_link','home_page_link',2,3);

add_filter('attachment_link','home_attachment_link',2,2);

add_filter('user_trailingslashit','home_pages_link_trailingslash',2,2);

add_filter('post_link','home_post_link',2,3);

add_filter('post_type_link','home_post_type_link',2,4);

add_filter('term_link','home_term_link',2,3);

add_filter('wp_link_pages','home_wp_link_pages_filter',2,2);

add_action('do_feed', 'disable_fedd', 1);
add_action('do_feed_rdf', 'disable_fedd', 1);
add_action('do_feed_rss', 'disable_fedd', 1);
add_action('do_feed_rss2', 'disable_fedd', 1);
add_action('do_feed_atom', 'disable_fedd', 1);
add_action('wp_head','disable_feed_url',1);

//user_email.php

add_filter('retrieve_password_message', 'reset_password_message', null, 2);
add_action( 'submitpost_box', 'qh_submit_box');
add_action( 'publish_post', 'qh_emaill_report_users' );
add_action( 'publish_post', 'qh_publish_post_report_email' );
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

function home_theme_setup(){
    load_theme_textdomain('home', get_template_directory() . '/languages');
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
				$src = "/wp-content/uploads/2018/09/logo.png";
			}
        }
    }
    return $src;
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
			if(in_array('CopyrightType',$custom_fields)) {
				$custom = get_post_custom($post_id);
				$CopyrightType = $custom['CopyrightType'][0];
				if($CopyrightType == "Original") {
					return 1;
				} else if($CopyrightType == "Reprint") {
					return 0;
				} else {
					return 1;
				}
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
	if(in_array('CopyrightType',$custom_fields)) {
	    $custom = get_post_custom($post_id);
		$CopyrightType = $custom['CopyrightType'][0];
		if($CopyrightType == "Original") {
			if(is_single()) {
				array_push($classes,"origin");
			}
			else {
				array_push($classes,"origin-archive");
			}
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
	$newcolumns['original'] = __('Original article','home');
	$newcolumns['categories'] = $columns['categories'];
	$newcolumns['tags'] = $columns['tags'];
	$newcolumns['comments'] = $columns['comments'];
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
		$custom_fields = get_post_custom_keys($id);
		if(in_array('CopyrightType',$custom_fields)) {
			$custom = get_post_custom($id);
			$CopyrightType = $custom['CopyrightType'][0];
			if($CopyrightType == "Original") {
				echo __("Yes",'home');
			} else {
				echo __("No",'home');
			}
		}
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
	$filePath = WP_CONTENT_DIR.'/cache/tmp.png';
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

function output_filter($content) {
	$content = preg_replace('/(http|https):\/\/([^\/]+)\/author\/([^\/]+)\.html\/page\/(\d{1,})/', '$1://$2/author/$3.html?paged=$4', $content);
	$content = preg_replace('/(http|https):\/\/([^\s]+)\.html(\?)([^\s]+)(\?)([^\s]+)/', '$1://$2.html$3$4&$6', $content);
	return $content;
}

ini_set('pcre.backtrack_limit', 999999999);
ini_set('pcre.recursion_limit', 99999);
ob_start('output_filter');



?>

