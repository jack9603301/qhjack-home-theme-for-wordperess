<?php

function login() {
?>
<div id="geetest"></div>
<br />
<script type="text/javascript" rel="stylesheet" src="/wp-content/themes/home/geetest/static/gt.js"></script>
<script src="/wp-includes/js/jquery/jquery.js"></script>
<script type="text/javascript" rel="stylesheet" src="<?php echo get_stylesheet_directory_uri()?>/geetest/geetest.js" ></script>
<?php
	}
function register() {
?>
<p>
	<label><?php _e('网名') ?><br />
    <input type="text" name="nickname" id="nickname" class="input" size="25" tabindex="20" /></label>
</p>
<p>
	<label><?php _e('登录密码') ?><br />
    <input type="password" name="password" id="password" class="input" size="25" tabindex="20" /></label>
</p>
<p>
    <label><?php _e('请再次输入密码') ?><br />
    <input type="password" name="confirm_password" id="confirm_password" class="input" size="25" tabindex="20" /></label>
</p>
<div id="geetest-reg"></div>
<br />
<script type="text/javascript" rel="stylesheet" src="/wp-content/themes/home/geetest/static/gt.js"></script>
<script src="/wp-includes/js/jquery/jquery.js"></script>
<script type="text/javascript" rel="stylesheet" src="<?php echo get_stylesheet_directory_uri()?>/geetest/geetest.js" ></script>
<?php
}
function register_field_validate($sanitized_user_login, $user_email, $errors) {
	if (!isset($_POST[ 'nickname' ]) || empty($_POST[ 'nickname' ])) {
		return $errors->add( 'nickname_empty', '<strong>错误</strong>: 请输入您的网名。' );
	}
	if (!isset($_POST[ 'password' ]) || empty($_POST[ 'password' ])) {
		return $errors->add( 'password_empty', '<strong>错误</strong>: 请输入密码。' );
	}
	if (!isset($_POST[ 'confirm_password' ]) || empty($_POST[ 'password' ])) {
		return $errors->add( 'confirm_password_empty', '<strong>错误</strong>: 请再次输入密码。' );
	}
	if (trim($_POST[ 'confirm_password' ]) != trim($_POST[ 'password' ] )) {
		return $errors->add( 'password_mismatch', '<strong>错误</strong>: 输入的密码必须完全匹配。' );
	}
}

function update_register_fields( $user_id ) {
	$user_data = array(
		'ID' => $user_id,
		'user_pass' => $_POST['password'],
		'display_name' => $_POST['nickname']
	);
	wp_insert_user($user_data);
	update_user_meta( $user_id, 'nickname', $_POST['nickname'] );
	update_user_option( $user_id, 'default_password_nag', false);
}

function lostpassword() {
?>
<div id="geetest-lostpasswordform"></div>
<br />
<script type="text/javascript" rel="stylesheet" src="/wp-content/themes/home/geetest/static/gt.js"></script>
<script src="/wp-includes/js/jquery/jquery.js"></script>
<script type="text/javascript" rel="stylesheet" src="<?php echo get_stylesheet_directory_uri()?>/geetest/geetest.js" ></script>
<?php
}
?>
