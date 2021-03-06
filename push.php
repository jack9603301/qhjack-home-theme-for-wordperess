<?php

if(!function_exists('BaiduSubmit')){
    function BaiduSubmit($post_ID) {
        $WEB_TOKEN  = get_option('baidu_submit_token');  //这里请换成你的网站的百度主动推送的token值
        $WEB_DOMAIN = home_url();
        //已成功推送的文章不再推送
        if(get_post_meta($post_ID,'BaiduSubmit',true) == "OK") {
        	return;
        } else {
        	$url = get_permalink($post_ID);
        	$api = 'http://data.zz.baidu.com/urls?site='.$WEB_DOMAIN.'&token='.$WEB_TOKEN;
        	$request = new WP_Http();
        	$result = $request->request( $api , array( 
				'method' => 'POST', 
				'body' => $url , 
				'headers' => 'Content-Type: text/plain'
            ));
			
			if($result instanceof WP_Error) {
                if(!add_post_meta($post_ID, 'BeraSubmit', "WP_Error Error Code:".$result->get_error_code()."\nMessage Code:".$result->get_error_message()."\n", true)) {
                    update_post_meta($post_ID, 'BeraSubmit', "WP_Error Error Code:".$result->get_error_code()."\nMessage Code:".$result->get_error_message()."\n");
                }
                return;
			} else {
                if(!$result['response'] || $result['response']['code'] != 200) {
                    if(!add_post_meta($post_ID, 'BaiduSubmit', "Response Error Code:".$result['response']['code']."\nMessage Code:".$result['response']['message']."\n", true)) {
                        update_post_meta($post_ID, 'BaiduSubmit', "Response Error Code:".$result['response']['code']."\nMessage Code:".$result['response']['message']."\n");
                    }
                    return;
                }
            }
			
        	$result = json_decode($result['body'],true);
        	//如果推送成功则在文章新增自定义栏目Baidusubmit，值为1
        	if (array_key_exists('success',$result)) {
            	add_post_meta($post_ID, 'BaiduSubmit', "OK", true);
        	} else if (array_key_exists('error',$result)) {
				$error_code = $result['error'];
				$error_message = $result['message'];
        		add_post_meta($post_ID, 'BaiduSubmit', "Error Code:".$error_code."\nMessage Code:".$error_message."\n", true);
        	}
        }
    }
}
if(!function_exists('BeraSubmit')) {
	function BeraSubmit($post_ID) {
		$WEB_APPID= get_option('bera_submit_appid');
		$WEB_TOKEN= get_option('bera_submit_token');
        //已成功推送的文章不再推送
        if(get_post_meta($post_ID,"BeraSubmitType",true) == "batch") {
			//历史接口
			$Type = "batch";
		} else if(get_post_meta($post_ID,"BeraSubmitType",true) == "realtime") {
			$Type = "batch";
		} else {
			$Type = "realtime";
		}
		if($Type) {
			$url = get_permalink($post_ID);
       		$api = "http://data.zz.baidu.com/urls?appid=".$WEB_APPID."&token=".$WEB_TOKEN."&type=".$Type;
			$request = new WP_Http();
       		$result = $request->request( $api , array( 
				'method' => 'POST', 
				'body' => $url , 
				'headers' => 'Content-Type: text/plain'
			));
			if($result instanceof WP_Error) {
                if(!add_post_meta($post_ID, 'BeraSubmit', "WP_Error Error Code:".$result->get_error_code()."\nMessage Code:".$result->get_error_message()."\n", true)) {
                    update_post_meta($post_ID, 'BeraSubmit', "WP_Error Error Code:".$result->get_error_code()."\nMessage Code:".$result->get_error_message()."\n");
                }
                return;
			} else {
                if(!$result['response'] || $result['response']['code'] != 200) {
                    if(!add_post_meta($post_ID, 'BeraSubmit', "Response Error Code:".$result['response']['code']."\nMessage Code:".$result['response']['message']."\n", true)) {
                        update_post_meta($post_ID, 'BeraSubmit', "Response Error Code:".$result['response']['code']."\nMessage Code:".$result['response']['message']."\n");
                    }
                    return;
                }
            }
			$result = json_decode($result['body'],true);
			if($Type == "realtime") {
				if (array_key_exists('success_realtime',$result)) {
       		 		if(!add_post_meta($post_ID, 'BeraSubmit', "OK", true)) {
						update_post_meta($post_ID, 'BeraSubmit', "OK");
					}
       			} else if (array_key_exists('error',$result)) {
					$error_code = $result['error'];
					$error_message = $result['message'];
       				if(!add_post_meta($post_ID, 'BeraSubmit', "Error Code:".$error_code."\nMessage Code:".$error_message."\n", true)) {
						update_post_meta($post_ID, 'BeraSubmit', "Error Code:".$error_code."\nMessage Code:".$error_message."\n");
					}
       			}
				if(!add_post_meta($post_ID, 'BeraSubmitType', $Type, true)) {
					update_post_meta($post_ID,'BeraSubmitType',$Type);
				}
			} else if($Type == "batch") {
				if (array_key_exists('success_batch',$result)) {
       		 		if(!add_post_meta($post_ID, 'BeraSubmit', "OK", true)) {
						update_post_meta($post_ID, 'BeraSubmit', "OK");
					}
       			} else if (array_key_exists('error',$result)) {
					$error_code = $result['error'];
					$error_message = $result['message'];
       				if(!add_post_meta($post_ID, 'BeraSubmit', "Error Code:".$error_code."\nMessage Code:".$error_message."\n", true)) {
						update_post_meta($post_ID, 'BeraSubmit', "Error Code:".$error_code."\nMessage Code:".$error_message."\n");
					}
       			}
				if(!add_post_meta($post_ID, 'BeraSubmitType', $Type, true)) {
					update_post_meta($post_ID, 'BeraSubmitType', $Type);
				}
			}
		}
	}
}

?>
