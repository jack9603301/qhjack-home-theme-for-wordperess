<?php

function reset_password_message( $message, $key ) {
    if ( strpos($_POST['user_login'], '@') ) {
        $user_data = get_user_by('email', trim($_POST['user_login']));
    } else {
        $login = trim($_POST['user_login']);
        $user_data = get_user_by('login', $login);
    }
    $user_name = $user_data->user_name;
    $message = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head><body><div>';
    $message .= '<p style="text-indent:2em">'.$user_name.'恭喜您提出用户注册申请。</p>';
    $message .= '<p style="text-indent:2em">您收到这份邮件是因为你发出了忘记密码申请，请<a href=\''.network_site_url("wp-login.php?action=rp&key=$key&login=" . rawurlencode($user_login), 'login').'\'>单击此处重置密码</a>。';
    $message .= '<p style="text-indent:2em">您可以扫描以下二维码关注公众号和网站：</p>';
    $message .= '<p style="text-indent:2em">扫描以下二维码，关注公众号：</p>';
    $message .= '<p style="text-indent:2em"><img src=\''.network_site_url("wp-content/uploads/2018/02/weixin.jpg","http").'\' /></p>';
    $message .= '<p style="text-indent:2em">扫描以下二维码，快速访问网站：</p>';
    $message .= '<p style="text-indent:2em"><img src=\''.network_site_url("wp-content/uploads/2018/09/qrcode.png","https").'\' /></p>';
	$message .= '<span style="line-height: 1.5; color: rgb(153, 153, 153);">来自：</span>';
	$message .= '<a href="'.$blogurl.'" style="line-height: 1.5;">'.$blogname.'</a></p>';
	$message .= '<div style="font-size: 12px; border-top-color: rgb(204, 204, 204); border-top-width: 1px; border-top-style: solid; height: 35px; width: 500px; color: rgb(102, 102, 102); line-height: 35px; background-color: rgb(245, 245, 245);">';
	$message .= '该邮件为系统发送邮件，请勿直接回复！如有打扰，请向博主留言反映。灰常感谢您的阅读！</div></div></body></html>';
    return $message;
}

function qh_new_user_notification_email($wp_new_user_notification_email,$user,$blogname) {
	$user_login = stripslashes($user->user_login);
    $user_name = stripslashes($user->user_name);
    $user_email = stripslashes($user->user_email);
	$user_nickname = stripslashes($user->nickname);
	//获取Key和博客名称
    $key = get_password_reset_key( $user );
	//自定义新用户欢迎邮件
    $message = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head><body><div>';
    if(!empty($user_name)) {
        $message .= '<p style="text-indent:2em">'.$user_name.'，恭喜您提出用户注册申请。</p>';
    }
    else {
        $message .= '<p style="text-indent:2em">'.$user_login.'，恭喜您提出用户注册申请。</p>';
    }
    $message .= '<p style="text-indent:2em">您收到这份邮件是因为你发出了用户注册申请，请确认您的注册信息：</p>';
    $message .= '<p style="text-indent:4em">用户名：'.$user_login.'</p>';
    $message .= '<p style="text-indent:4em">网名：'.$user_nickname.'</p>';
    $message .= '<p style="text-indent:2em">请妥善保存好自己的账户信息，如果您忘记密码，可以通过登录窗口的密码找回功能找回密码。</p>';
    $message .= '<p style="text-indent:2em">如果您要重新设置密码，请<a href=\''.network_site_url("wp-login.php?action=rp&key=$key&login=" . rawurlencode($user_login), 'login').'\'>单击此处重置密码</a>。';
    $message .= '<p style="text-indent:2em">您可以扫描以下二维码关注公众号和网站：</p>';
    $message .= '<p style="text-indent:2em">扫描以下二维码，关注公众号：</p>';
    $message .= '<p style="text-indent:2em"><img src=\''.network_site_url("wp-content/uploads/2018/09/weixin.jpg","https").'\' /></p>';
    $message .= '<p style="text-indent:2em">扫描以下二维码，快速访问网站：</p>';
    $message .= '<p style="text-indent:2em"><img src=\''.network_site_url("wp-content/uploads/2018/09/qrcode.png","https").'\' /></p>';
	$message .= '<span style="line-height: 1.5; color: rgb(153, 153, 153);">来自：</span>';
	$message .= '<a href="'.$blogurl.'" style="line-height: 1.5;">'.$blogname.'</a></p>';
	$message .= '<div style="font-size: 12px; border-top-color: rgb(204, 204, 204); border-top-width: 1px; border-top-style: solid; height: 35px; width: 500px; color: rgb(102, 102, 102); line-height: 35px; background-color: rgb(245, 245, 245);">';
	$message .= '该邮件为系统发送邮件，请勿直接回复！如有打扰，请向博主留言反映。灰常感谢您的阅读！</div></div></body></html>';
	
	$wp_new_user_notification_email['to'] = $user_email;
	$wp_new_user_notification_email['subject'] = '['. $blogname.'] 注册用户确认邮件';
	$wp_new_user_notification_email['message'] = $message;
	return $wp_new_user_notification_email;
}

function qh_new_user_notification_email_admin($wp_new_user_notification_email,$user,$blogname) {
	$user_login = stripslashes($user->user_login);
    $user_name = stripslashes($user->user_name);
    $user_email = stripslashes($user->user_email);
	$user_nickname = stripslashes($user->nickname);
	//获取Key和博客名称
    $key = get_password_reset_key( $user );
	//管理员接受的用户注册申请通知邮件
    $message = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head><body><div>';
    $message .= '<p>尊敬的博客管理员，有用户提出注册申请。</p>';
    $message .= '<p style="text-indent:2em">您收到这份邮件是因为你博客的新用户发出了注册申请，以下是用户的注册信息：</p>';
    $message .= '<p style="text-indent:4em">用户名：'.$user_login.'</p>';
    $message .= '<p style="text-indent:4em">网名：'.$user_nickname.'</p>';
    $message .= '<p style="text-indent:2em">请妥善保存好账户信息，以防泄密。</p>';
	$message .= '<span style="line-height: 1.5; color: rgb(153, 153, 153);">来自：</span>';
	$message .= '<a href="'.$blogurl.'" style="line-height: 1.5;">'.$blogname.'</a></p>';
	$message .= '<div style="font-size: 12px; border-top-color: rgb(204, 204, 204); border-top-width: 1px; border-top-style: solid; height: 35px; width: 500px; color: rgb(102, 102, 102); line-height: 35px; background-color: rgb(245, 245, 245);">';
	$message .= '该邮件为系统发送邮件，请勿直接回复！如有打扰，请向博主留言反映。灰常感谢您的阅读！</div></div></body></html>';
	
	$wp_new_user_notification_email['to'] = $user_email;
	$wp_new_user_notification_email['subject'] = '['. $blogname.'] 新用户注册通知邮件';
	$wp_new_user_notification_email['message'] = $message;
	return $wp_new_user_notification_email;
}

function qh_password_change_email($pass_change_email, $user, $userdata) {
	$user_login = stripslashes($user->user_login);
    $user_name = stripslashes($user->user_name);
    $user_email = stripslashes($user->user_email);
	$user_nickname = stripslashes($user->nickname);
	//获取Key和博客名称
    $key = get_password_reset_key( $user );

    if ( empty($user_pass) ) {
        $user_pass = '<strong>空</strong>';
    }
	//自定义修改密码通知邮件
    $message = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head><body><div>';
    if(!empty($user_name)) {
        $message .= '<p style="text-indent:2em">'.$user_name.'，您进行了密码修改。</p>';
    }
    else {
        $message .= '<p style="text-indent:2em">'.$user_login.'，您进行了密码修改。</p>';
    }
    $message .= '<p style="text-indent:2em">您收到这份邮件是因为你进行了密码修改，以下是您的注册信息：</p>';
    $message .= '<p style="text-indent:4em">用户名：'.$user_login.'</p>';
    $message .= '<p style="text-indent:4em">网名：'.$user_nickname.'</p>';
    $message .= '<p style="text-indent:2em">如果并非您本人进行的操作，请联系博客管理员了解情况，并及时修改您的密码。</p>';
	$message .= '<p style="text-indent:2em">请妥善保存好账户信息，如果您忘记密码，可以通过登录窗口的密码找回功能找回密码。</p>';
	$message .= '<p style="text-indent:2em">如果您要重新设置密码，请<a href=\''.network_site_url("wp-login.php?action=rp&key=$key&login=" . rawurlencode($user_login), 'login').'\'>单击此处重置密码</a>。';
    $message .= '<p style="text-indent:2em">您可以扫描以下二维码关注公众号和网站：</p>';
    $message .= '<p style="text-indent:2em">扫描以下二维码，关注公众号：</p>';
    $message .= '<p style="text-indent:2em"><img src=\''.network_site_url("wp-content/uploads/2018/09/weixin.jpg","https").'\' /></p>';
    $message .= '<p style="text-indent:2em">扫描以下二维码，快速访问网站：</p>';
    $message .= '<p style="text-indent:2em"><img src=\''.network_site_url("wp-content/uploads/2018/09/qrcode.png","https").'\' /></p>';
	$message .= '<span style="line-height: 1.5; color: rgb(153, 153, 153);">来自：</span>';
	$message .= '<a href="'.$blogurl.'" style="line-height: 1.5;">'.$blogname.'</a></p>';
	$message .= '<div style="font-size: 12px; border-top-color: rgb(204, 204, 204); border-top-width: 1px; border-top-style: solid; height: 35px; width: 500px; color: rgb(102, 102, 102); line-height: 35px; background-color: rgb(245, 245, 245);">';
	$message .= '该邮件为系统发送邮件，请勿直接回复！如有打扰，请向博主留言反映。灰常感谢您的阅读！</div></div></body></html>';
	
	$wp_new_user_notification_email['to'] = $user_email;
	$wp_new_user_notification_email['subject'] = '['. $blogname.'] 关键操作通知邮件';
	$wp_new_user_notification_email['message'] = $message;
	return $wp_new_user_notification_email;
}

function qh_html_content_type($content_type) {
	$content_type = 'text/html';
    return $content_type;
}

function qh_publish_post_report_email($post_ID) {
	
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
	
	// 邮件标题
	$subject = '《'.$blogname.'》有文章更新了,速来围观。';
 
	foreach ( $usersarray as $user )
	{
		// 获取用户的称呼
		$nicename = get_usermeta($user->ID,'nickname');
		// 邮件内容
		$message = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head><body>';
		$message .= '<div style="MARGIN-RIGHT: auto; MARGIN-LEFT: auto;">';
		$message .= '<strong style="line-height: 1.5; font-family:Microsoft YaHei;">亲爱的'.$nicename.'：</strong>';
		$message .= '<p style="FONT-SIZE: 14px; PADDING-TOP: 6px;text-indent:2em">您曾经来访过的博客《'.$blogname.'》有文章更新了。</p>';
		$message .= '<p style="FONT-SIZE: 14px; PADDING-TOP: 6px;text-indent:2em">文章标题：<a title="'.$post_title.'" href="'.$post_link.'" target="_top">'.$post_title.'</a>';
		$message .= '<br />文章摘要：'.$output.'</p>';
		$message .= '<p style="FONT-SIZE: 14px; PADDING-TOP: 6px;text-indent:2em">您可以点击';
		$message .= '<a title="'.$post_title.'" href="'.$post_link.'" target="_top">'.$post_title.'</a>详细查看</p>';
		$message .= '<p style="text-indent:2em">您可以扫描以下二维码关注公众号和网站：</p>';
        $message .= '<p style="text-indent:2em">扫描以下二维码，关注公众号：</p>';
        $message .= '<p style="text-indent:2em"><img src=\''.network_site_url("wp-content/uploads/2018/09/weixin.jpg","https").'\' /></p>';
        $message .= '<p style="text-indent:2em">扫描以下二维码，快速访问网站：</p>';
        $message .= '<p style="text-indent:2em"><img src=\''.network_site_url("wp-content/uploads/2018/09/qrcode.png","https").'\' /></p>';
		$message .= '<p style="font-size: 14px; padding-top: 6px; text-align: left;text-indent:2em">';
		$message .= '<span style="line-height: 1.5; color: rgb(153, 153, 153);">来自：</span>';
		$message .= '<a href="'.$blogurl.'" style="line-height: 1.5">'.$blogname.'</a></p>';
		$message .= '<div style="font-size: 12px; border-top-color: rgb(204, 204, 204); border-top-width: 1px; border-top-style: solid; height: 35px; color: rgb(102, 102, 102); line-height: 35px; background-color: rgb(245, 245, 245);">';
		$message .= '该邮件为系统发送邮件，请勿直接回复！如有打扰，请向博主留言反映，或点击<a href=\''.$blogurl.'/subscribe.html?action=unsubscribe&key='.$user->unsubscribe_key.'\' title="取消订阅">此链接</a>取消订阅。灰常感谢您的阅读！</div></div></body></html>';
 
 	    wp_mail($user->email, $subject, $message);
	}
}

function qh_comment_mail_notify_approve($comment_id, $comment_status) {
	if ($comment_status !== 'approve' && $comment_status !== 1) {
		return;
	}
	$comment = get_comment($comment_id);
	$blog_name = get_option("blogname");
	// 获取博客URL
	$blogurl = get_bloginfo("siteurl");
	if($comment->comment_parent != '0') {
		$parent_comment = get_comment($comment->comment_parent);
		$to = trim($parent_comment->comment_author_email);
		$subject = '您在[' . $blog_name . ']的留言有了新的回复';
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
		// 邮件内容
		$message = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head><body>';
		$message .= '<div style="MARGIN-RIGHT: auto; MARGIN-LEFT: auto;">';
		$message .= '<strong style="line-height: 1.5; font-family:Microsoft YaHei;">亲爱的'.$nicename.'：</strong>';
		$message .= '<p style="FONT-SIZE: 14px; PADDING-TOP: 6px;text-indent:2em">您曾经来访过的博客《'.$blog_name.'》于'.$parent_data.'发表的评论有新回复。</p>';
		$message .= '<p style="FONT-SIZE: 14px; PADDING-TOP: 6px;text-indent:2em">文章标题：<a title="'.$post_title.'" href="'.$post_link.'" target="_top">'.$post_title.'</a>';
		$message .= '<br />文章摘要：'.$output.'</p>';
		$message .= '<p style="FONT-SIZE: 14px; PADDING-TOP: 6px;text-indent:2em">您发表的评论如下：</p>';
		$message .= '<p style="border-bottom:#ddd 1px solid;border-left:#ddd 1px solid;padding-bottom:20px;background-color:#eee;margin:15px 0px;padding-left:20px;padding-right:20px;border-top:#ddd 1px solid;border-right:#ddd 1px solid;padding-top:20px">' . $comment_parent_content . '</p>';
		$message .= '<p style="text-indent:2em">' . $comment_author . ' 于' . $comment_data . ' 给您的回复如下: </p>';
		$message .= '<p style="border-bottom:#ddd 1px solid;border-left:#ddd 1px solid;padding-bottom:20px;background-color:#eee;margin:15px 0px;padding-left:20px;padding-right:20px;border-top:#ddd 1px solid;border-right:#ddd 1px solid;padding-top:20px">' . $comment_content . '</p>';
		$message .= '<p style="text-indent:2em">您可以点击 <a style="color:#00bbff;text-decoration:none" href="' . htmlspecialchars($comment_link). '" target="_blank">查看回复的完整內容</a></p>';
		$message .= '<p style="text-indent:2em">您可以扫描以下二维码关注公众号和网站：</p>';
        $message .= '<p style="text-indent:2em">扫描以下二维码，关注公众号：</p>';
        $message .= '<p style="text-indent:2em"><img src=\''.network_site_url("wp-content/uploads/2018/09/weixin.jpg","https").'\' /></p>';
        $message .= '<p style="text-indent:2em">扫描以下二维码，快速访问网站：</p>';
        $message .= '<p style="text-indent:2em"><img src=\''.network_site_url("wp-content/uploads/2018/09/qrcode.png","https").'\' /></p>';
		$message .= '<p style="font-size: 14px; padding-top: 6px; text-align: left;text-indent:2em">';
		$message .= '<span style="line-height: 1.5; color: rgb(153, 153, 153);">来自：</span>';
		$message .= '<a href="'.$blogurl.'" style="line-height: 1.5;text-indent:25px">'.$blog_name.'</a></p>';
		$message .= '<div style="font-size: 12px; border-top-color: rgb(204, 204, 204); border-top-width: 1px; border-top-style: solid; height: 35px; width: 500px; color: rgb(102, 102, 102); line-height: 35px; background-color: rgb(245, 245, 245);">';
		$message .= '该邮件为系统发送邮件，请勿直接回复！如有打扰，请向博主留言反映。灰常感谢您的阅读！</div></div></body></html>';
		wp_mail($to, $subject, $message);
	} else {
		$to = trim($comment->comment_author_email);
		$subject = '您在[' . $blog_name . ']进行了评论';
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
		// 邮件内容
		$message = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head><body>';
		$message .= '<div style="MARGIN-RIGHT: auto; MARGIN-LEFT: auto;">';
		$message .= '<strong style="line-height: 1.5; font-family:Microsoft YaHei;">亲爱的'.$nicename.'：</strong>';
		$message .= '<p style="FONT-SIZE: 14px; PADDING-TOP: 6px;text-indent:2em">您曾经来访过的博客《'.$blog_name.'》于'.$data.'进行了评论。</p>';
		$message .= '<p style="FONT-SIZE: 14px; PADDING-TOP: 6px;text-indent:2em">文章标题：<a title="'.$post_title.'" href="'.$post_link.'" target="_top">'.$post_title.'</a>';
		$message .= '<br />文章摘要：'.$output.'</p>';
		$message .= '<p style="FONT-SIZE: 14px; PADDING-TOP: 6px;text-indent:2em">您于'.$comment_data.'发表的评论如下：</p>';
		$message .= '<p style="border-bottom:#ddd 1px solid;border-left:#ddd 1px solid;padding-bottom:20px;background-color:#eee;margin:15px 0px;padding-left:20px;padding-right:20px;border-top:#ddd 1px solid;border-right:#ddd 1px solid;padding-top:20px;text-indent:25px">' . $comment_content . '</p>';
		$message .= '<p style="text-indent:2em">您可以点击 <a style="color:#00bbff;text-decoration:none" href="' . htmlspecialchars($comment_link). '" target="_blank">查看回复的完整內容</a></p>';
		$message .= '<p style="text-indent:2em">您可以扫描以下二维码关注公众号和网站：</p>';
        $message .= '<p style="text-indent:2em">扫描以下二维码，关注公众号：</p>';
        $message .= '<p style="text-indent:2em"><img src=\''.network_site_url("wp-content/uploads/2018/09/weixin.jpg","https").'\' /></p>';
        $message .= '<p style="text-indent:2em">扫描以下二维码，快速访问网站：</p>';
        $message .= '<p style="text-indent:2em"><img src=\''.network_site_url("wp-content/uploads/2018/09/qrcode.png","https").'\' /></p>';
		$message .= '<p style="font-size: 14px; padding-top: 6px; text-align: left;text-indent:2em">';
		$message .= '<span style="line-height: 1.5; color: rgb(153, 153, 153);">来自：</span>';
		$message .= '<a href="'.$blogurl.'" style="line-height: 1.5;">'.$blog_name.'</a></p>';
		$message .= '<div style="font-size: 12px; border-top-color: rgb(204, 204, 204); border-top-width: 1px; border-top-style: solid; height: 35px; width: 500px; color: rgb(102, 102, 102); line-height: 35px; background-color: rgb(245, 245, 245);">';
		$message .= '该邮件为系统发送邮件，请勿直接回复！如有打扰，请向博主留言反映。灰常感谢您的阅读！</div></div></body></html>';
		wp_mail($to, $subject, $message);
	}
}

function qh_comment_mail_notify_unapprove($comment_id, $comment_status) {
	if ($comment_status !== 'hold' && $comment_status !== 0) {
		return;
	}
	$comment = get_comment($comment_id);
	$blog_name = get_option("blogname");
	// 获取博客URL
	$blogurl = get_bloginfo("siteurl");
	$to = get_option('admin_email');
	$subject = '[' . $blog_name . ']有新的回复等待审核';
	if($comment->comment_parent != '0') {
		$parent_comment = get_comment($comment->comment_parent);
		$parent_comment_author = trim($parent_comment->comment_author);
		$subject = $parent_comment_author.'在[' . $blog_name . ']的留言有了新的回复等待审核';
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
		$comment_parent_author = nl2br($parent_comment->comment_author);
		$comment_data = trim($comment->comment_date);
		$comment_content = nl2br($comment->comment_content);
		$comment_link = get_comment_link($comment->comment_parent);
		// 邮件内容
		$message = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head><body>';
		$message .= '<div style="MARGIN-RIGHT: auto; MARGIN-LEFT: auto;">';
		$message .= '<strong style="line-height: 1.5; font-family:Microsoft YaHei;">尊敬的管理员：</strong>';
		$message .= '<p style="FONT-SIZE: 14px; PADDING-TOP: 6px;text-indent:2em">博客《'.$blog_name.'》由'.$comment_parent_author.'于'.$parent_data.'发表的评论有新回复。</p>';
		$message .= '<p style="FONT-SIZE: 14px; PADDING-TOP: 6px;text-indent:2em">文章标题：<a title="'.$post_title.'" href="'.$post_link.'" target="_top">'.$post_title.'</a>';
		$message .= '<br />文章摘要：'.$output.'</p>';
		$message .= '<p style="FONT-SIZE: 14px; PADDING-TOP: 6px;text-indent:2em">'.$comment_parent_author.'发表的评论如下：</p>';
		$message .= '<p style="border-bottom:#ddd 1px solid;border-left:#ddd 1px solid;padding-bottom:20px;background-color:#eee;margin:15px 0px;padding-left:20px;padding-right:20px;border-top:#ddd 1px solid;border-right:#ddd 1px solid;padding-top:20px;text-indent:25px">' . $comment_parent_content . '</p>';
		$message .= '<p style="text-indent:2em">' . $comment_author . ' 于' . $comment_data . ' 给'.$comment_parent_author.'的回复如下: </p>';
		$message .= '<p style="border-bottom:#ddd 1px solid;border-left:#ddd 1px solid;padding-bottom:20px;background-color:#eee;margin:15px 0px;padding-left:20px;padding-right:20px;border-top:#ddd 1px solid;border-right:#ddd 1px solid;padding-top:20px;text-indent:25px">' . $comment_content . '</p>';
		$message .= '<p style="text-indent:2em">您可以点击 <a style="color:#00bbff;text-decoration:none" href="' . htmlspecialchars($comment_link). '" target="_blank">查看回复的完整內容</a></p>';
		$message .= '<p style="text-indent:2em">您可以扫描以下二维码关注公众号和网站：</p>';
        $message .= '<p style="text-indent:2em">扫描以下二维码，关注公众号：</p>';
        $message .= '<p style="text-indent:2em"><img src=\''.network_site_url("wp-content/uploads/2018/09/weixin.jpg","https").'\' /></p>';
        $message .= '<p style="text-indent:2em">扫描以下二维码，快速访问网站：</p>';
        $message .= '<p style="text-indent:2em"><img src=\''.network_site_url("wp-content/uploads/2018/09/qrcode.png","https").'\' /></p>';
		$message .= '<p style="font-size: 14px; padding-top: 6px; text-align: left;text-indent:2em">';
		$message .= '<span style="line-height: 1.5; color: rgb(153, 153, 153);">来自：</span>';
		$message .= '<a href="'.$blogurl.'" style="line-height: 1.5;">'.$blog_name.'</a></p>';
		$message .= '<div style="font-size: 12px; border-top-color: rgb(204, 204, 204); border-top-width: 1px; border-top-style: solid; height: 35px; width: 500px; color: rgb(102, 102, 102); line-height: 35px; background-color: rgb(245, 245, 245);">';
		$message .= '该邮件为系统发送邮件，请勿直接回复！如有打扰，请向博主留言反映。灰常感谢您的阅读！</div></div></body></html>';
		wp_mail($to, $subject, $message);
	} else {
		$comment_author = trim($comment->comment_author);
		$subject = $comment_author.'在[' . $blog_name . ']的留言等待审核';
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
		// 邮件内容
		$message = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head><body>';
		$message .= '<div style="MARGIN-RIGHT: auto; MARGIN-LEFT: auto;">';
		$message .= '<strong style="line-height: 1.5; font-family:Microsoft YaHei;">尊敬的管理员：</strong>';
		$message .= '<p style="FONT-SIZE: 14px; PADDING-TOP: 6px;text-indent:2em">博客《'.$blog_name.'》由'.$comment_author.'于'.$data.'进行了评论。</p>';
		$message .= '<p style="FONT-SIZE: 14px; PADDING-TOP: 6px;text-indent:2em">文章标题：<a title="'.$post_title.'" href="'.$post_link.'" target="_top">'.$post_title.'</a>';
		$message .= '<br />文章摘要：'.$output.'</p>';
		$message .= '<p style="FONT-SIZE: 14px; PADDING-TOP: 6px;text-indent:2em">'.$comment_author.'于'.$comment_data.'发表的评论如下：</p>';
		$message .= '<p style="border-bottom:#ddd 1px solid;border-left:#ddd 1px solid;padding-bottom:20px;background-color:#eee;margin:15px 0px;padding-left:20px;padding-right:20px;border-top:#ddd 1px solid;border-right:#ddd 1px solid;padding-top:20px">' . $comment_content . '</p>';
		$message .= '<p style="text-indent:2em">您可以点击 <a style="color:#00bbff;text-decoration:none" href="' . htmlspecialchars($comment_link). '" target="_blank">查看回复的完整內容</a></p>';
		$message .= '<p style="text-indent:2em">您可以扫描以下二维码关注公众号和网站：</p>';
        $message .= '<p style="text-indent:2em">扫描以下二维码，关注公众号：</p>';
        $message .= '<p style="text-indent:2em"><img src=\''.network_site_url("wp-content/uploads/2018/09/weixin.jpg","https").'\' /></p>';
        $message .= '<p style="text-indent:2em">扫描以下二维码，快速访问网站：</p>';
        $message .= '<p style="text-indent:2em"><img src=\''.network_site_url("wp-content/uploads/2018/09/qrcode.png","https").'\' /></p>';
		$message .= '<p style="font-size: 14px; padding-top: 6px; text-align: left;text-indent:2em">';
		$message .= '<span style="line-height: 1.5; color: rgb(153, 153, 153);">来自：</span>';
		$message .= '<a href="'.$blogurl.'" style="line-height: 1.5;">'.$blog_name.'</a></p>';
		$message .= '<div style="font-size: 12px; border-top-color: rgb(204, 204, 204); border-top-width: 1px; border-top-style: solid; height: 35px; width: 500px; color: rgb(102, 102, 102); line-height: 35px; background-color: rgb(245, 245, 245);">';
		$message .= '该邮件为系统发送邮件，请勿直接回复！如有打扰，请向博主留言反映。灰常感谢您的阅读！</div></div></body></html>';
		wp_mail($to, $subject, $message);
	}
}

function qh_subscribe_send_mail($nickname,$email) {
	$redis_params = get_redis_params();
	$redis_ttl = $redis_params['subscribe_ttl'];
	
	$server = array(
    	'host'     => $redis_params['ip'],
    	'port'     => $redis_params['port'],
    	'database' => $redis_params['subscribe_db']
	);
	$redis = new Predis\Client($server);
	
	try {
		global $wpdb;
		$table = $wpdb->prefix."subscribe";
		if($wpdb->query("SELECT * FROM $table WHERE email = \'$email\'") == 0) {
			$key = md5($email . date("Y-m-d h:i:sa"));
			$redis->setex($key,$redis_ttl,$nickname . '|' . $email);
		
			$blogname = get_option('blogname');
			// 获取博客URL
			$blogurl = get_bloginfo("siteurl");
		
			$to = get_option('admin_email');
			$subject = '[' . $blogname . ']订阅确认申请';
		
			$message = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head><body>';
			$message .= '<div style="MARGIN-RIGHT: auto; MARGIN-LEFT: auto;">';
			$message .= '<strong style="line-height: 1.5; font-family:Microsoft YaHei;">尊敬的'.$nickname.'：</strong>';
			$message .= '<p style="FONT-SIZE: 14px; PADDING-TOP: 6px;text-indent:2em">收到此邮件是因为您作为博客《'.$blogname.'》的访客提出了订阅申请，非常感谢您对'.$blogname.'的支持。</p>';
			$message .= '<p style="FONT-SIZE: 14px; PADDING-TOP: 6px;text-indent:2em"><a href="'.$blogurl.'/subscribe.html?action=subscribe&key='.$key.'">点击这里</a>完成订阅。</p>';
			$message .= '<p style="text-indent:2em">您可以扫描以下二维码关注公众号和网站：</p>';
        	$message .= '<p style="text-indent:2em">扫描以下二维码，关注公众号：</p>';
        	$message .= '<p style="text-indent:2em"><img src=\''.network_site_url("wp-content/uploads/2018/09/weixin.jpg","https").'\' /></p>';
        	$message .= '<p style="text-indent:2em">扫描以下二维码，快速访问网站：</p>';
        	$message .= '<p style="text-indent:2em"><img src=\''.network_site_url("wp-content/uploads/2018/09/qrcode.png","https").'\' /></p>';
			$message .= '<p style="font-size: 14px; padding-top: 6px; text-align: left;text-indent:2em">';
			$message .= '<span style="line-height: 1.5; color: rgb(153, 153, 153);">来自：</span>';
			$message .= '<a href="'.$blogurl.'" style="line-height: 1.5;">'.$blogname.'</a></p>';
			$message .= '<div style="font-size: 12px; border-top-color: rgb(204, 204, 204); border-top-width: 1px; border-top-style: solid; height: 35px; width: 500px; color: rgb(102, 102, 102); line-height: 35px; background-color: rgb(245, 245, 245);">';
			$message .= '该邮件为系统发送邮件，请勿直接回复！如有打扰，请向博主留言反映。灰常感谢您的阅读！</div></div></body></html>';
			wp_mail($to, $subject, $message);
			echo "恭喜".$nickname."，您的订阅申请确认邮件已发送至".$email."，请登录您的邮箱，根据邮件要求完成订阅。";
		} else {
			echo "您已经订阅完成，请不要重复订阅";
		}
		
		
	} catch(Exception $e) {
		
	}
}

?>