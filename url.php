<?php

function home_search_rewrite_rules($search_rewrite) {
	$search_rewrite = array();
	$search_rewrite["search/([^/]+)?$"] = 'index.php?s=$matches[1]&ep_integrate';
	$search_rewrite["search/([^/]+)/page/([1-9]\d*)?$"] = 'index.php?s=$matches[1]&paged=$matches[2]&ep_integrate';
	return $search_rewrite;
}

function redirect_search() {
	if (is_search() && !empty($_GET['s'])) {
		wp_redirect(home_url("/search/").urlencode(get_query_var('s')));
		exit();
	}
}

function home_pages_redirect_filter($redirect_url, $requested_url) {
	global $wp_query;
	if( is_author() && $wp_query->get( 'paged' ) > 1 ){
		return false;
	} else {
        if (isset($wp_query->query_vars['tpl'])) {
            if($wp_query->get( 'paged' ) > 1 ) {
                return false;
            } else {
                return false;
            }
            return false;
        }
    }
}

function home_pages_link_trailingslash($url, $type) {
	if('single' === $type) {
		return untrailingslashit($url);
	} elseif('single_paged' === $type && preg_match('/(\d{1,})/', $url, $matches) && $matches) {
		return "?page=".$matches[1];
	}
	return untrailingslashit($url);
}

function home_wp_link_pages_filter($output, $args) {
	$output = preg_replace('/(http|https):\/\/([^\s]+)\.html\/(\?page=\d{1,})/', '$1://$2.html$3', $output);
	return $output;
}

function home_post_rewrite_rules($post_rewrite) {
	$post_rewrite = array();
	$post_rewrite["blog/([1-9]\d*).html?$"] = 'index.php?p=$matches[1]&post_type=post';
	return $post_rewrite;
}

function home_page_rewrite_rules($page_rewrite) {
	$page_rewrite = array();
	$page_rewrite["([^/]+).html"] = 'index.php?pagename=$matches[1]';
	return $page_rewrite;
}

function home_category_rewrite_rules($category_rewrite) {
	$category_rewrite = array();
	$category_rewrite["category/([^\s]+)/page/([1-9]\d*)?$"] = 'index.php?category_name=$matches[1]&paged=$matches[2]&taxonomy=category';
	$category_rewrite["category/([^\s]+)?$"] = 'index.php?category_name=$matches[1]&taxonomy=category';
	return $category_rewrite;
}


function home_author_link($link,$author_id,$author_nicename) {
	$link = home_url('/author/').$author_nicename.".html";
	return $link;
}

function home_page_link($link,$page_id,$sample) {
	$page_info = get_page($page_id);
	if($page_info) {
		if($page_info->post_name != "") {
			$link = home_url('/').$page_info->post_name.".html";
		} else {
			$link = home_url('/')."?page_id=".$page_info->ID;
		}
		return $link;
	} else {
		return $link;
	}
}

function home_attachment_link($link,$id) {
	$post =get_post($id);
	if($post->post_type == 'attachment') {
		$link = $post->guid;
	}
	return $link;
}

function home_post_link($link, $post, $leavename=false ) {
	return $link;
}

function home_post_type_link($link, $post, $leavename, $sample ) {
	return $link;
}

function home_term_link( $link, $term, $taxonomy ) {
	return $link;
}

function home_author_rewrite_rules($author_rules) {
	$author_rules = array();
	$author_rules["author/([^/]+).html?$"] = 'index.php?author_name=$matches[1]';
	return $author_rules;
}

function home_custom_rewrite_rules($rules) {
    $newrules = array();
    $newrules["reprint/author/([^\s]+).html?$"] = 'index.php?tpl=reprint_author&original_author=$matches[1]';
    return $newrules + $rules;
}

function disable_fedd() {
	wp_die('本博客不提供Feed服务');
}

function disable_feed_url() {
	remove_action('wp_head','feed_links_extra', 3);
	remove_action('wp_head','feed_links', 2);
}

function home_query_vars($Vars) {
	$Vars[] = "key";
	$Vars[] = "action";
	$Vars[] = "original_author";
	$Vars[] = "tpl";
	return $Vars;
}

function home_custom_emplate($template){
    global $wp_query;
    if (!isset($wp_query->query_vars['tpl'])) {
    	return $template;
    }

    $reditectPage =  $wp_query->query_vars['tpl']; 
    if ($reditectPage == "reprint_author"){
        $wp_query->is_page = true;
        $wp_query->is_single = false;
        $wp_query->is_home = false;
        $wp_query->comments = false;
        $newtemplate = locate_template( array( 'reprint_author.php' ) );
        if ( $newtemplate != '' ) {
            $template = $newtemplate;
        }
        return $template;
    }
    return $template;
}

function home_wp_link_pages_link($output,$i) {
    $output = preg_replace('/(http|https):\/\/([^\/]+)\/reprint/author\/([^\s\/]+)\.html\/page\/(\d{1,})', '$1://$2/reprint/author/$3.html?paged=$4', $output);
    $output = preg_replace('/(http|https):\/\/([^\/]+)\/author\/([^\/]+)\.html\/page\/(\d{1,})/', '$1://$2/author/$3.html?paged=$4', $output);
    $output = preg_replace('/(http|https):\/\/([^\s]+)\.html(\?)([^\s]+)(\?)([^\s]+)/', '$1://$2.html$3$4&$6', $output);
    return $output;
}


?>
