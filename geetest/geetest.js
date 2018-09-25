jQuery("#comment-geetest").ready(function() {
	if(jQuery("#comment-geetest").length > 0) {
	    var handlerEmbed = function (captchaObj) {
            captchaObj.appendTo("#comment-geetest");
            captchaObj.onReady(function () {
                jQuery(".wc_comm_submit ").attr('disabled',"true");
            });
		    captchaObj.onSuccess(function() {
			    jQuery(".wc_comm_submit ").removeAttr("disabled");
		    });
        };
        jQuery.ajax({
            url: "/wp-content/themes/home/geetest/web/StartCaptchaServlet.php?t=" + (new Date()).getTime(), // 加随机数防止缓存
            type: "get",
            dataType: "json",
            success: function (data) {
                // 使用initGeetest接口
                // 参数1：配置参数
                // 参数2：回调，回调的第一个参数验证码对象，之后可以使用它做appendTo之类的事件
                initGeetest({
                    gt: data.gt,
				    area: '.post-comments',
				    next_width: '272px',
				    width: '100%',
                    challenge: data.challenge,
                    new_captcha: data.new_captcha,
                    product: "custom",
                    offline: !data.success
                }, handlerEmbed);
            }
        });
    }
});

jQuery("#geetest").ready(function() {
	if(jQuery("#geetest").length > 0) {
		var handlerEmbed = function (captchaObj) {
            captchaObj.appendTo("#geetest");
            captchaObj.onReady(function () {
                jQuery("#wp-submit").attr('disabled',"true");
            });
		    captchaObj.onSuccess(function() {
			    jQuery("#wp-submit").removeAttr("disabled");
		    })
        };
	    jQuery.ajax({
            url: "/wp-content/themes/home/geetest/web/StartCaptchaServlet.php?t=" + (new Date()).getTime(), // 加随机数防止缓存
            type: "get",
            dataType: "json",
            success: function (data) {
                // 使用initGeetest接口
                // 参数1：配置参数
                // 参数2：回调，回调的第一个参数验证码对象，之后可以使用它做appendTo之类的事件
                initGeetest({
                    gt: data.gt,
				    area: '#loginform',
				    next_width: '272px',
				    width: '272px',
                    challenge: data.challenge,
                    new_captcha: data.new_captcha,
                    product: "custom",
                    offline: !data.success
                }, handlerEmbed);
            }
        });
	}
});