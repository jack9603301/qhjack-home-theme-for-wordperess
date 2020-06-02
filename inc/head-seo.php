<?php 
/**
* 路人酱独家手法优化标题
*/
add_filter('wp_title', 'lingfeng_wp_title', 10, 2);
function lingfeng_wp_title($title, $sep) {
    global $paged, $page;

    //如果是feed页，返回默认标题内容
    if ( is_feed() ) { 
        return $title;
    }

    // 标题中追加站点标题
    $title .= get_bloginfo( 'name' );

    // 网站首页追加站点副标题
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        $title = "$title $sep $site_description";

    // 标题中显示第几页
    if ( $paged >= 2 || $page >= 2 )
        $title = "$title $sep " . sprintf( '第%s页', max( $paged, $page ) );

    //去除空格，-的字符实体
    $search = array('&#8211;', ' ');
    $replace = array(' | ', ' ');
    $title = str_replace($search, $replace, $title);

    return $title;  
	}
// FIN
add_action ( 'wp_head', 'wp_keywords' ); // 添加关键字
add_action ( 'wp_head', 'wp_description' ); // 添加页面描述
	
	
	/**
 +----------------------------------------------------------
 * 站点关键字(www.shouce.ren)
 +----------------------------------------------------------
 * @return string
 +----------------------------------------------------------
 */
function wp_keywords() {
	global $s, $post;
	$keywords = '';
	if (is_single ()) {  //如果是文章页，关键词则是：标签+分类ID
		if (get_the_tags ( $post->ID )) {
			foreach ( get_the_tags ( $post->ID ) as $tag )
				$keywords .= $tag->name . ', ';
		}
		foreach ( get_the_category ( $post->ID ) as $category )
			$keywords .= $category->cat_name . ', ';
		$keywords = substr_replace ( $keywords, '', - 2 );
	} elseif (is_home ()) {
		$keywords = ot_get_option( 'home_keywords',"起航天空" ); //主页关键词设置
        #$keywords = "起航天空,起航,天空,课程,生活分享,分享,安全";
	} elseif (is_tag ()) {  //标签页关键词设置
		$keywords = single_tag_title ( '', false );
	} elseif (is_category ()) {//分类页关键词设置
		$keywords = single_cat_title ( '', false );
	} elseif (is_search ()) {//搜索页关键词设置
		$keywords = esc_html ( $s, 1 );
	} else {//默认页关键词设置
		$keywords = trim ( wp_title ( '', false ) );
	}
	if ($keywords) {  //输出关键词
		echo "<meta name=\"keywords\" content=\"$keywords\" />\n";
	}
}
 
 
/**
 +----------------------------------------------------------
 * 站点描述
 +----------------------------------------------------------
 * @return string
 +----------------------------------------------------------
 */
function wp_description() {
	global $s, $post;
	$description = '';
	$blog_name = get_bloginfo ( 'name' );
	if (is_singular ()) {  //文章页如果存在描述字段，则显示描述，否则截取文章内容
		if (! empty ( $post->post_excerpt )) {
			$text = $post->post_excerpt;
		} else {
			$text = $post->post_content;
		}
		$description = trim ( str_replace ( array (
				"\r\n",
				"\r",
				"\n",
				"　",
				" " 
		), " ", str_replace ( "\"", "'", strip_tags ( $text ) ) ) );
		if (! ($description))
			$description = $blog_name . "-" . trim ( wp_title ( '', false ) );
	} elseif (is_home ()) {//首页显示描述设置
		$description = ot_get_option('home_description','分享技术和生活的一切'); // 首頁要自己加
        #$description = "分享技术和生活的一切";
	} elseif (is_tag ()) {//标签页显示描述设置
		$description = $blog_name . "有关 '" . single_tag_title ( '', false ) . "' 的文章";
	} elseif (is_category ()) {//分类页显示描述设置
		$description = $blog_name . "有关 '" . single_cat_title ( '', false ) . "' 的文章";
	} elseif (is_archive ()) {//文档页显示描述设置
		$description = $blog_name . "在: '" . trim ( wp_title ( '', false ) ) . "' 的文章";
	} elseif (is_search ()) {//搜索页显示描述设置
		$description = $blog_name . ": '" . esc_html ( $s, 1 ) . "' 的搜索結果";
	} else {//默认其他页显示描述设置
		$description = $blog_name . "有关 '" . trim ( wp_title ( '', false ) ) . "' 的文章";
	}
	//输出描述
	$description = mb_substr ( $description, 0, 220, 'utf-8' ) . '..';
	echo "<meta name=\"description\" itemprop=\"description\" content=\"$description\" />\n";
}
?>
