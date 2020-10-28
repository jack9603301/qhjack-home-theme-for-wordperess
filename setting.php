<?php

function global_setting() {
	add_settings_section(
		'home_web_setting', // ID
		'网站基本设置', // 显示在页面的标题
		'home_web_setting_callback', // 页面回掉
		'general' // 'general', 'reading', 'writing', 'discussion', 'media'
	);
	add_settings_field(
		'public_net_for_record_prefix', // ID
		'公网备案号前缀', // 显示在页面的标题即label
		'public_net_for_record_prefix_callback', // 回掉
		'general', // 'general', 'reading', 'writing', 'discussion', 'media'
		'home_web_setting', // section ID
		array( // The $args
			'public_net_for_record_prefix' // Should match Option ID
		)
	);
	add_settings_field(
		'public_net_for_record_num', // ID
		'公网备案号', // 显示在页面的标题即label
		'public_net_for_record_num_callback', // 回掉
		'general', // 'general', 'reading', 'writing', 'discussion', 'media'
		'home_web_setting', // section ID
		array( // The $args
			'public_net_for_record_num' // Should match Option ID
		)
	);
	add_settings_field(
		'baidu_submit_token', // ID
		'百度提交接口Token', // 显示在页面的标题即label
		'baidu_submit_token_callback', // 回掉
		'general', // 'general', 'reading', 'writing', 'discussion', 'media'
		'home_web_setting', // section ID
		array( // The $args
			'baidu_submit_token' // Should match Option ID
		)
	);
	add_settings_field(
		'bera_submit_appid', // ID
		'百度熊掌号提交接口APPID', // 显示在页面的标题即label
		'bera_submit_appid_callback', // 回掉
		'general', // 'general', 'reading', 'writing', 'discussion', 'media'
		'home_web_setting', // section ID
		array( // The $args
			'bera_submit_appid' // Should match Option ID
		)
	);
	add_settings_field(
		'bera_submit_token', // ID
		'百度熊掌号提交接口Token', // 显示在页面的标题即label
		'bera_submit_token_callback', // 回掉
		'general', // 'general', 'reading', 'writing', 'discussion', 'media'
		'home_web_setting', // section ID
		array( // The $args
			'bera_submit_token' // Should match Option ID
		)
	);
	register_setting('general','public_net_for_record_prefix', 'esc_attr');
	register_setting('general','public_net_for_record_num', 'esc_attr');
	register_setting('general','baidu_submit_token', 'esc_attr');
	register_setting('general','bera_submit_appid', 'esc_attr');
	register_setting('general','bera_submit_token', 'esc_attr');
}

function home_web_setting_callback() {
	
}

function public_net_for_record_num_callback($args) {
	$option = get_option($args[0]);
	echo '<input type="text" id="'. $args[0] .'" name="'. $args[0] .'" value="' . $option . '" /><br />请输入网站的公网备案号';
}

function public_net_for_record_prefix_callback($args) {
	$option = get_option($args[0]);
	echo '<input type="text" id="'. $args[0] .'" name="'. $args[0] .'" value="' . $option . '" /><br />请输入网站的公网备案号前缀';
}

function baidu_submit_token_callback($args) {
	$option = get_option($args[0]);
	echo '<input type="text" id="'. $args[0] .'" name="'. $args[0] .'" value="' . $option . '" /><br />请输入百度提交的API Token';
}

function bera_submit_appid_callback($args) {
	$option = get_option($args[0]);
	echo '<input type="text" id="'. $args[0] .'" name="'. $args[0] .'" value="' . $option . '" /><br />请输入百度熊掌号提交的API APPID';
}

function bera_submit_token_callback($args) {
	$option = get_option($args[0]);
	echo '<input type="text" id="'. $args[0] .'" name="'. $args[0] .'" value="' . $option . '" /><br />请输入百度熊掌号提交的API Token';
}

?>