<?php

function qh_slashpress_command_qhjack($initial_response, $slash) {
    if (!$slash->known) {
        $text = trim($slash->data['text']);
        if($text == "site") {
            $slash->known = true;
            $slash->handled = true;
            return esc_url( home_url( '/' ) );
        }
    }
    return $initial_response;
}

function qh_slashpress_help_qhjack($slash,$help_terms) {
    $slash->addHelp('site', '`site` 网站地址');
}

function send_data($text) {
	$arr = [
        "text" => $text
	];
	
	$postdata = json_encode($arr);
	
	$options = [
        'http' => [
            'method' => 'POST',
            'header' => 'Content-type: application/json',
            'content' => $postdata,
            'timeout' => 10 // 超时时间（单位:s）
        ]
    ];
    
    $context = stream_context_create($options);
    
    file_get_contents(MATTERMOST_PUSH_URL, false, $context);
}

function qh_publish_post_mattermost($post_ID) {

    //修订版本不通知，以免滥用
	if( wp_is_post_revision($post_ID) ){
		return;
	}
	
	//获取wp数据操作类
	global $wpdb;
	$usersarray = $wpdb->get_results("SELECT author_id AS ID,author,email,unsubscribe_key FROM ".$wpdb->prefix."subscribe");
	// 获取博客名称
	$blogname = wp_specialchars_decode(get_option('blogname'), ENT_QUOTES);
	// 获取博客URL
	$blogurl = get_bloginfo("siteurl");
 
	//文章链接
	$post_link = get_permalink($post_ID);
	$post = get_post($post_ID);
	//文章标题$post -> post_title
	$post_title = strip_tags($post->post_title);
	//文章摘要
	$output = get_the_excerpt($post);
	if(empty($output)) {
		$post_content = strip_tags($post->post_content);
		$output = preg_replace('/^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,0}((?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,200}).*/s','\1',$post_content).'......';
	}
	
	$text = "@all [".$blogname."](".$blogurl.")有文章更新啦，文章信息如下：\n";
	$text .= "文章名字：[".$post_title."](".$post_link.")\n";
	$text .= "文章摘要：".$output;
	
	send_data($text);
    
}

function qh_comment_mattermost_notify($comment_id, $comment_status) {
    $approve = false;
    if ($comment_status == 'approve' || $comment_status == 1) {
		$approve = true;
	} else if ($comment_status == 'hold' || $comment_status == 0) {
		$approve = false;
	} else {
        return;
	}
	
	$comment = get_comment($comment_id);
	$blog_name = get_option("blogname");
	// 获取博客URL
	$blogurl = get_bloginfo("siteurl");
	if($comment->comment_parent != 0) {
        $parent_comment = get_comment($comment->comment_parent);
		$parent_comment_author = trim($parent_comment->comment_author);
        // 获取用户的称呼
		$nicename = trim($parent_comment->comment_author);
		// 日期
		$parent_data = trim($parent_comment->comment_date);
		// 文章
		$post = get_post($parent_comment->comment_post_ID);
		$post_title = $post->post_title;
		$post_link = get_permalink($parent_comment->comment_post_ID);
		$output = get_the_excerpt($post);
		if(empty($output)) {
			$post_content = strip_tags($post->post_content);
			$output = preg_replace('/^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,0}((?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,200}).*/s','\1',$post_content).'......';
		}
		// 评论内容
		$comment_parent_content = nl2br($parent_comment->comment_content);
		$comment_data = trim($comment->comment_date);
		$comment_author = trim($comment->comment_author);
		$comment_content = nl2br($comment->comment_content);
		$comment_link = get_comment_link($comment->comment_parent);
		
		if($approve) {
            $text = "@all [".$blog_name."](".$blogurl.")有了新的留言(已经批准)：\n";
        } else {
            $text = "@all [".$blog_name."](".$blogurl.")有新的留言等待审核：\n";
        }
		$text .= "文章名字：[".$post_title."](".$post_link.")\n";
		$text .= "文章摘要：".$output."\n";
		$text .= "父评论为：\n";
		$text .= "> ".$comment_parent_content."\n\n";
		$text .= $comment_author."于".$comment_data."发表的评论如下：\n";
		$text .= "> ".$comment_content."\n\n";
		
	} else {
        // 获取用户的称呼
		$nicename = trim($comment->comment_author);
		// 日期
		$data = trim($comment->comment_date);
		// 文章
		$post = get_post($comment->comment_post_ID);
		$post_title = $post->post_title;
		$post_link = get_permalink($comment->comment_post_ID);
		$output = get_the_excerpt($post);
		if(empty($output)) {
			$post_content = strip_tags($post->post_content);
			$output = preg_replace('/^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,0}((?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,200}).*/s','\1',$post_content).'......';
		}
		// 评论内容
		$comment_data = trim($comment->comment_date);
		$comment_content = nl2br($comment->comment_content);
		$comment_link = get_comment_link($comment->comment_ID);
		
		$text = "@all [".$blog_name."](".$blogurl.")有了新的留言(已经批准)：\n";
		$text .= "文章名字：[".$post_title."](".$post_link.")\n";
		$text .= "文章摘要：".$output."\n";
		$text .= $nicename."于".$comment_data."发表的评论如下：\n";
		$text .= "> ".$comment_content."\n\n";
        
	}
	
	send_data($text);
}

?>
