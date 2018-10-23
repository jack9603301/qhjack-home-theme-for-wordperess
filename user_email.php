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
    $message .= '<p>&emsp;&emsp;'.$user_name.'恭喜您提出用户注册申请。</p>';
    $message .= '<p>&emsp;&emsp;您收到这份邮件是因为你发出了忘记密码申请，请<a href=\''.network_site_url("wp-login.php?action=rp&key=$key&login=" . rawurlencode($user_login), 'login').'\'>单击此处重置密码</a>。';
    $message .= '<p>&emsp;&emsp;您可以扫描以下二维码关注公众号和网站：</p>';
    $message .= '<p>扫描以下二维码，关注公众号：</p>';
    $message .= '<p><img src=\''.network_site_url("wp-content/uploads/2018/02/weixin.jpg","http").'\' /></p>';
    $message .= '<p>扫描以下二维码，快速访问网站：</p>';
    $message .= '<p><img src=\''.network_site_url("wp-content/uploads/2018/04/qhjack_qr.png","http").'\' /></p></div></body></html>';
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
        $message .= '<p>&emsp;&emsp;'.$user_name.'，恭喜您提出用户注册申请。</p>';
    }
    else {
        $message .= '<p>&emsp;&emsp;'.$user_login.'，恭喜您提出用户注册申请。</p>';
    }
    $message .= '<p>&emsp;&emsp;您收到这份邮件是因为你发出了用户注册申请，请确认您的注册信息：</p>';
    $message .= '<p>&emsp;&emsp;&emsp;&emsp;用户名：'.$user_login.'</p>';
    $message .= '<p>&emsp;&emsp;&emsp;&emsp;网名：'.$user_nickname.'</p>';
    $message .= '<p>&emsp;&emsp;请妥善保存好自己的账户信息，如果您忘记密码，可以通过登录窗口的密码找回功能找回密码。</p>';
    $message .= '<p>如果您要重新设置密码，请<a href=\''.network_site_url("wp-login.php?action=rp&key=$key&login=" . rawurlencode($user_login), 'login').'\'>单击此处重置密码</a>。';
    $message .= '<p>&emsp;&emsp;您可以扫描以下二维码关注公众号和网站：</p>';
    $message .= '<p>扫描以下二维码，关注公众号：</p>';
    $message .= '<p><img src=\''.network_site_url("wp-content/uploads/2018/09/weixin.jpg","https").'\' /></p>';
    $message .= '<p>扫描以下二维码，快速访问网站：</p>';
    $message .= '<p><img src=\''.network_site_url("wp-content/uploads/2018/09/qrcode.png","https").'\' /></p>';
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
    if(!empty($user_name)) {
        $message .= '<p>&emsp;&emsp;尊敬的博客管理员，有用户提出注册申请。</p>';
    }
    else {
        $message .= '<p>&emsp;&emsp;尊敬的博客管理员，有用户提出注册申请。</p>';
    }
    $message .= '<p>&emsp;&emsp;您收到这份邮件是因为你博客的新用户发出了注册申请，以下是用户的注册信息：</p>';
    $message .= '<p>&emsp;&emsp;&emsp;&emsp;用户名：'.$user_login.'</p>';
    $message .= '<p>&emsp;&emsp;&emsp;&emsp;网名：'.$user_nickname.'</p>';
    $message .= '<p>&emsp;&emsp;请妥善保存好账户信息，以防泄密。</p>';
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
        $message .= '<p>&emsp;&emsp;'.$user_name.'，您进行了密码修改。</p>';
    }
    else {
        $message .= '<p>&emsp;&emsp;'.$user_login.'，您进行了密码修改。</p>';
    }
    $message .= '<p>&emsp;&emsp;您收到这份邮件是因为你进行了密码修改，以下是您的注册信息：</p>';
    $message .= '<p>&emsp;&emsp;&emsp;&emsp;用户名：'.$user_login.'</p>';
    $message .= '<p>&emsp;&emsp;&emsp;&emsp;网名：'.$user_nickname.'</p>';
    $message .= '<p>&emsp;&emsp;如果并非您本人进行的操作，请联系博客管理员了解情况，并及时修改您的密码。</p>';
	$message .= '<p>&emsp;&emsp;请妥善保存好账户信息，如果您忘记密码，可以通过登录窗口的密码找回功能找回密码。</p>';
	$message .= '<p>如果您要重新设置密码，请<a href=\''.network_site_url("wp-login.php?action=rp&key=$key&login=" . rawurlencode($user_login), 'login').'\'>单击此处重置密码</a>。';
    $message .= '<p>&emsp;&emsp;您可以扫描以下二维码关注公众号和网站：</p>';
    $message .= '<p>扫描以下二维码，关注公众号：</p>';
    $message .= '<p><img src=\''.network_site_url("wp-content/uploads/2018/09/weixin.jpg","https").'\' /></p>';
    $message .= '<p>扫描以下二维码，快速访问网站：</p>';
    $message .= '<p><img src=\''.network_site_url("wp-content/uploads/2018/09/qrcode.png","https").'\' /></p>';
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

function qh_submit_box(  ){
	echo '<div id="fo_side-sortables" class="meta-box-sortables ui-sortable">';
	echo '<div id="fo_submit_box" class="postbox ">';
	echo '<div class="handlediv" title="点击以切换"><br /></div>';
	echo '<h3 class="hndle"><span>邮件通知</span></h3>';
	echo '<div class="inside"><div class="submitbox">';
	echo '  <div style="padding: 10px 10px 0;text-align: left;"><label class="selectit" title="慎用此功能，重要文章才勾选嘛，以免引起读者反感哈"><input type="checkbox" unchecked name="emaill_report_user" value="true" title="勾选此项，将邮件通知博客所有评论者"/>邮件通知博客所有评论者</label></div>';
	echo '  <div style="padding: 10px 10px 0;text-align: left;"><label class="selectit" title="慎用此功能，重要文章才勾选嘛，以免引起读者反感哈"><input type="checkbox" unchecked name="emaill_report_all_user" value="true" title="勾选此项，将邮件通知博客所有评论者"/>邮件通知博客所有注册用户</label></div>';
	echo '</div></div>';
	echo '</div>';
	echo '</div>';
}


function qh_emaill_report_users($post_ID) {
	//如果未勾选，不进行任何操作
	if($_POST['emaill_report_user'] != 'true'){
		return;
	}
 
	//修订版本不通知，以免滥用
	if( wp_is_post_revision($post_ID) ){
		return;
	}
 
	//获取wp数据操作类
	global $wpdb;
	// 读数据库，获取所有用户的email
	$wp_user_emails = $wpdb->get_results("SELECT DISTINCT comment_author, comment_author_email FROM $wpdb->comments WHERE TRIM(comment_author_email) IS NOT NULL AND TRIM(comment_author_email) != ''");
 
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
 
	foreach ( $wp_user_emails as $wp_user_email )
	{
		// 邮件内容
		$message = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head><body>';
		$message .= '<div style="MARGIN-RIGHT: auto; MARGIN-LEFT: auto;">';
		$message .= '<strong style="line-height: 1.5; font-family:Microsoft YaHei;">亲爱的'.$wp_user_email->comment_author.'：</strong>';
		$message .= '<p style="FONT-SIZE: 14px; PADDING-TOP: 6px">您曾经来访过的博客《'.$blogname.'》有文章更新了。</p>';
		$message .= '<p style="FONT-SIZE: 14px; PADDING-TOP: 6px">文章标题：<a title="'.$post_title.'" href="'.$post_link.'" target="_top">'.$post_title.'</a>';
		$message .= '<br />文章摘要：'.$output.'</p>';
		$message .= '<p style="FONT-SIZE: 14px; PADDING-TOP: 6px">您可以点击';
		$message .= '<a title="'.$post_title.'" href="'.$post_link.'" target="_top">'.$post_title.'</a>详细查看</p>';
		$message .= '<p>您可以扫描以下二维码关注公众号和网站：</p>';
        $message .= '<p>扫描以下二维码，关注公众号：</p>';
        $message .= '<p><img src=\''.network_site_url("wp-content/uploads/2018/09/weixin.jpg","https").'\' /></p>';
        $message .= '<p>扫描以下二维码，快速访问网站：</p>';
        $message .= '<p><img src=\''.network_site_url("wp-content/uploads/2018/09/qrcode.png","https").'\' /></p>';
		$message .= '<p style="font-size: 14px; padding-top: 6px; text-align: left;">';
		$message .= '<span style="line-height: 1.5; color: rgb(153, 153, 153);">来自：</span>';
		$message .= '<a href="'.$blogurl.'" style="line-height: 1.5;">'.$blogname.'</a></p>';
		$message .= '<div style="font-size: 12px; border-top-color: rgb(204, 204, 204); border-top-width: 1px; border-top-style: solid; height: 35px; width: 500px; color: rgb(102, 102, 102); line-height: 35px; background-color: rgb(245, 245, 245);">';
		$message .= '该邮件为系统发送邮件，请勿直接回复！如有打扰，请向博主留言反映。灰常感谢您的阅读！</div></div></body></html>';
 
 	    wp_mail($wp_user_email->comment_author_email, $subject, $message);
	}
}

function qh_publish_post_report_email($post_ID) {
	
	//如果未勾选，不进行任何操作
	if($_POST['emaill_report_all_user'] != 'true'){
		return;
	}
	
	//修订版本不通知，以免滥用
	if( wp_is_post_revision($post_ID) ){
		return;
	}
	
	//获取wp数据操作类
	global $wpdb;
	$usersarray = $wpdb->get_results("SELECT DISTINCT ID,user_nicename,user_email FROM $wpdb->users WHERE TRIM(user_email) IS NOT NULL AND TRIM(user_email) != ''");
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
		$message .= '<p style="FONT-SIZE: 14px; PADDING-TOP: 6px">您曾经来访过的博客《'.$blogname.'》有新文章发表了。</p>';
		$message .= '<p style="FONT-SIZE: 14px; PADDING-TOP: 6px">文章标题：<a title="'.$post_title.'" href="'.$post_link.'" target="_top">'.$post_title.'</a>';
		$message .= '<br />文章摘要：'.$output.'</p>';
		$message .= '<p style="FONT-SIZE: 14px; PADDING-TOP: 6px">您可以点击';
		$message .= '<a title="'.$post_title.'" href="'.$post_link.'" target="_top">'.$post_title.'</a>详细查看</p>';
		$message .= '<p>您可以扫描以下二维码关注公众号和网站：</p>';
        $message .= '<p>扫描以下二维码，关注公众号：</p>';
        $message .= '<p><img src=\''.network_site_url("wp-content/uploads/2018/09/weixin.jpg","https").'\' /></p>';
        $message .= '<p>扫描以下二维码，快速访问网站：</p>';
        $message .= '<p><img src=\''.network_site_url("wp-content/uploads/2018/09/qrcode.png","https").'\' /></p>';
		$message .= '<p style="font-size: 14px; padding-top: 6px; text-align: left;">';
		$message .= '<span style="line-height: 1.5; color: rgb(153, 153, 153);">来自：</span>';
		$message .= '<a href="'.$blogurl.'" style="line-height: 1.5;">'.$blogname.'</a></p>';
		$message .= '<div style="font-size: 12px; border-top-color: rgb(204, 204, 204); border-top-width: 1px; border-top-style: solid; height: 35px; width: 500px; color: rgb(102, 102, 102); line-height: 35px; background-color: rgb(245, 245, 245);">';
		$message .= '该邮件为系统发送邮件，请勿直接回复！如有打扰，请向博主留言反映。灰常感谢您的阅读！</div></div></body></html>';
 
 	    wp_mail($user->user_email, $subject, $message);
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
		$message .= '<p style="FONT-SIZE: 14px; PADDING-TOP: 6px">您曾经来访过的博客《'.$blog_name.'》于'.$parent_data.'发表的评论有新回复。</p>';
		$message .= '<p style="FONT-SIZE: 14px; PADDING-TOP: 6px">文章标题：<a title="'.$post_title.'" href="'.$post_link.'" target="_top">'.$post_title.'</a>';
		$message .= '<br />文章摘要：'.$output.'</p>';
		$message .= '<p style="FONT-SIZE: 14px; PADDING-TOP: 6px">您发表的评论如下：</p>';
		$message .= '<p style="border-bottom:#ddd 1px solid;border-left:#ddd 1px solid;padding-bottom:20px;background-color:#eee;margin:15px 0px;padding-left:20px;padding-right:20px;border-top:#ddd 1px solid;border-right:#ddd 1px solid;padding-top:20px">' . $comment_parent_content . '</p>';
		$message .= '<p>' . $comment_author . ' 于' . $comment_data . ' 给您的回复如下: </p>';
		$message .= '<p style="border-bottom:#ddd 1px solid;border-left:#ddd 1px solid;padding-bottom:20px;background-color:#eee;margin:15px 0px;padding-left:20px;padding-right:20px;border-top:#ddd 1px solid;border-right:#ddd 1px solid;padding-top:20px">' . $comment_content . '</p>';
		$message .= '<p>您可以点击 <a style="color:#00bbff;text-decoration:none" href="' . htmlspecialchars($comment_link). '" target="_blank">查看回复的完整內容</a></p>';
		$message .= '<p>您可以扫描以下二维码关注公众号和网站：</p>';
        $message .= '<p>扫描以下二维码，关注公众号：</p>';
        $message .= '<p><img src=\''.network_site_url("wp-content/uploads/2018/09/weixin.jpg","https").'\' /></p>';
        $message .= '<p>扫描以下二维码，快速访问网站：</p>';
        $message .= '<p><img src=\''.network_site_url("wp-content/uploads/2018/09/qrcode.png","https").'\' /></p>';
		$message .= '<p style="font-size: 14px; padding-top: 6px; text-align: left;">';
		$message .= '<span style="line-height: 1.5; color: rgb(153, 153, 153);">来自：</span>';
		$message .= '<a href="'.$blogurl.'" style="line-height: 1.5;">'.$blog_name.'</a></p>';
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
		$message .= '<p style="FONT-SIZE: 14px; PADDING-TOP: 6px">您曾经来访过的博客《'.$blog_name.'》于'.$data.'进行了评论。</p>';
		$message .= '<p style="FONT-SIZE: 14px; PADDING-TOP: 6px">文章标题：<a title="'.$post_title.'" href="'.$post_link.'" target="_top">'.$post_title.'</a>';
		$message .= '<br />文章摘要：'.$output.'</p>';
		$message .= '<p style="FONT-SIZE: 14px; PADDING-TOP: 6px">您于'.$comment_data.'发表的评论如下：</p>';
		$message .= '<p style="border-bottom:#ddd 1px solid;border-left:#ddd 1px solid;padding-bottom:20px;background-color:#eee;margin:15px 0px;padding-left:20px;padding-right:20px;border-top:#ddd 1px solid;border-right:#ddd 1px solid;padding-top:20px">' . $comment_content . '</p>';
		$message .= '<p>您可以点击 <a style="color:#00bbff;text-decoration:none" href="' . htmlspecialchars($comment_link). '" target="_blank">查看回复的完整內容</a></p>';
		$message .= '<p>您可以扫描以下二维码关注公众号和网站：</p>';
        $message .= '<p>扫描以下二维码，关注公众号：</p>';
        $message .= '<p><img src=\''.network_site_url("wp-content/uploads/2018/09/weixin.jpg","https").'\' /></p>';
        $message .= '<p>扫描以下二维码，快速访问网站：</p>';
        $message .= '<p><img src=\''.network_site_url("wp-content/uploads/2018/09/qrcode.png","https").'\' /></p>';
		$message .= '<p style="font-size: 14px; padding-top: 6px; text-align: left;">';
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
		$message .= '<p style="FONT-SIZE: 14px; PADDING-TOP: 6px">博客《'.$blog_name.'》由'.$comment_parent_author.'于'.$parent_data.'发表的评论有新回复。</p>';
		$message .= '<p style="FONT-SIZE: 14px; PADDING-TOP: 6px">文章标题：<a title="'.$post_title.'" href="'.$post_link.'" target="_top">'.$post_title.'</a>';
		$message .= '<br />文章摘要：'.$output.'</p>';
		$message .= '<p style="FONT-SIZE: 14px; PADDING-TOP: 6px">'.$comment_parent_author.'发表的评论如下：</p>';
		$message .= '<p style="border-bottom:#ddd 1px solid;border-left:#ddd 1px solid;padding-bottom:20px;background-color:#eee;margin:15px 0px;padding-left:20px;padding-right:20px;border-top:#ddd 1px solid;border-right:#ddd 1px solid;padding-top:20px">' . $comment_parent_content . '</p>';
		$message .= '<p>' . $comment_author . ' 于' . $comment_data . ' 给'.$comment_parent_author.'的回复如下: </p>';
		$message .= '<p style="border-bottom:#ddd 1px solid;border-left:#ddd 1px solid;padding-bottom:20px;background-color:#eee;margin:15px 0px;padding-left:20px;padding-right:20px;border-top:#ddd 1px solid;border-right:#ddd 1px solid;padding-top:20px">' . $comment_content . '</p>';
		$message .= '<p>您可以点击 <a style="color:#00bbff;text-decoration:none" href="' . htmlspecialchars($comment_link). '" target="_blank">查看回复的完整內容</a></p>';
		$message .= '<p>您可以扫描以下二维码关注公众号和网站：</p>';
        $message .= '<p>扫描以下二维码，关注公众号：</p>';
        $message .= '<p><img src=\''.network_site_url("wp-content/uploads/2018/09/weixin.jpg","https").'\' /></p>';
        $message .= '<p>扫描以下二维码，快速访问网站：</p>';
        $message .= '<p><img src=\''.network_site_url("wp-content/uploads/2018/09/qrcode.png","https").'\' /></p>';
		$message .= '<p style="font-size: 14px; padding-top: 6px; text-align: left;">';
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
		$message .= '<strong style="line-height: 1.5; font-family:Microsoft YaHei;">亲爱的管理员：</strong>';
		$message .= '<p style="FONT-SIZE: 14px; PADDING-TOP: 6px">博客《'.$blog_name.'》由'.$comment_author.'于'.$data.'进行了评论。</p>';
		$message .= '<p style="FONT-SIZE: 14px; PADDING-TOP: 6px">文章标题：<a title="'.$post_title.'" href="'.$post_link.'" target="_top">'.$post_title.'</a>';
		$message .= '<br />文章摘要：'.$output.'</p>';
		$message .= '<p style="FONT-SIZE: 14px; PADDING-TOP: 6px">'.$comment_author.'于'.$comment_data.'发表的评论如下：</p>';
		$message .= '<p style="border-bottom:#ddd 1px solid;border-left:#ddd 1px solid;padding-bottom:20px;background-color:#eee;margin:15px 0px;padding-left:20px;padding-right:20px;border-top:#ddd 1px solid;border-right:#ddd 1px solid;padding-top:20px">' . $comment_content . '</p>';
		$message .= '<p>您可以点击 <a style="color:#00bbff;text-decoration:none" href="' . htmlspecialchars($comment_link). '" target="_blank">查看回复的完整內容</a></p>';
		$message .= '<p>您可以扫描以下二维码关注公众号和网站：</p>';
        $message .= '<p>扫描以下二维码，关注公众号：</p>';
        $message .= '<p><img src=\''.network_site_url("wp-content/uploads/2018/09/weixin.jpg","https").'\' /></p>';
        $message .= '<p>扫描以下二维码，快速访问网站：</p>';
        $message .= '<p><img src=\''.network_site_url("wp-content/uploads/2018/09/qrcode.png","https").'\' /></p>';
		$message .= '<p style="font-size: 14px; padding-top: 6px; text-align: left;">';
		$message .= '<span style="line-height: 1.5; color: rgb(153, 153, 153);">来自：</span>';
		$message .= '<a href="'.$blogurl.'" style="line-height: 1.5;">'.$blog_name.'</a></p>';
		$message .= '<div style="font-size: 12px; border-top-color: rgb(204, 204, 204); border-top-width: 1px; border-top-style: solid; height: 35px; width: 500px; color: rgb(102, 102, 102); line-height: 35px; background-color: rgb(245, 245, 245);">';
		$message .= '该邮件为系统发送邮件，请勿直接回复！如有打扰，请向博主留言反映。灰常感谢您的阅读！</div></div></body></html>';
		wp_mail($to, $subject, $message);
	}
}

?>