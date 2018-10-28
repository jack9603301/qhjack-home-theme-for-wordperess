<?php

function home_subscribe_no_author($key) {
	$redis_params = get_redis_params();
	$redis_ttl = $redis_params['subscribe_ttl'];
	
	$server = array(
    	'host'     => $redis_params['ip'],
    	'port'     => $redis_params['port'],
    	'database' => $redis_params['subscribe_db']
	);
	$redis = new Predis\Client($server);
	try {
		if($redis->exists($key)) {
			$subscribe_data_serialize = $redis->get($key);
			$subscribe_data = explode('|',$subscribe_data_serialize);
			$subscribe_data = array(
				'nickname' => $subscribe_data[0],
				'email' => $subscribe_data[1]
			);  //数据处理
			global $wpdb;
			$table = $wpdb->prefix.'subscribe';
			$value = array(
				'author_id' => 0,
				'author' => $subscribe_data['nickname'],
				'email' => $subscribe_data['email'],
				'unsubscribe_key' => $key
			);
			$wpdb->insert($table,$value);
			$redis->del($key);
			echo "恭喜".$subscribe_data['nickname']."，您的订阅已完成，感谢您的关注，此链接同时失效。";
		} else {
			echo "这个链接不是一个有效的订阅链接。";
		}
		
	} catch(Exception $e) {
		
	}
}

function home_subscribe_author($user_id) {
	global $wpdb;
	$table = $wpdb->prefix."subscribe";
	$user = get_user_by('id', $user_id);
	$email = $user->get('user_email');
	$nickname = $user->get('nickname');
	$key = md5($email . date("Y-m-d h:i:sa"));
	$value = array(
		'author_id' => $user_id,
		'author' => $nickname,
		'email' => $email,
		'unsubscribe_key' => $key
	);
	$wpdb->insert($table,$value); //添加订阅数据
	return true;
}

function home_unsubscribe_author($user_id) {
	global $wpdb;
	$table = $wpdb->prefix."subscribe";
	$subscribe = $wpdb->get_row("SELECT unsubscribe_key FROM $table WHERE author_id = $user_id");
	home_unsubscribe($subscribe->unsubscribe_key);
}

function home_check_subscribe_author($user_id) {
	global $wpdb;
	$table = $wpdb->prefix."subscribe";
	return $wpdb->query("SELECT * FROM $table WHERE author_id = $user_id") >= 1?true:false;
}

function home_unsubscribe($key) {
	global $wpdb;
	$table = $wpdb->prefix."subscribe";
	$where = array(
		'unsubscribe_key' => $key
	);
	$result = $wpdb->delete($table,$where);
	if($result >= 1 ) {
		echo "订阅已经被解除。";
	} else {
		echo "取消订阅的链接无效。";
	}
}

?>