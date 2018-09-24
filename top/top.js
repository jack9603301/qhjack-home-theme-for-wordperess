jQuery.fn.slideLeftHide = function( speed, callback ) {
    this.animate({
        width : "hide",
        paddingLeft : "hide",
        paddingRight : "hide",
        marginLeft : "hide",
        marginRight : "hide"
    }, speed, callback );
};
jQuery.fn.slideLeftShow = function( speed, callback ) {
    this.animate({
        width : "show",
        paddingLeft : "show",
        paddingRight : "show",
        marginLeft : "show",
        marginRight : "show"
    }, speed, callback );
};

jQuery.fn.scrollEnd = function(callback, timeout) {
    jQuery(this).scroll(function(){
        var $this = jQuery(this);
        if ($this.data('scrollTimeout')) {
            clearTimeout($this.data('scrollTimeout'));
        }
        $this.data('scrollTimeout', setTimeout(callback,timeout));
    });
	
};

jQuery(function($){
    //预加载图片
    (new Image()).src = '/wp-content/themes/home/top/go-top.png';
    //滚动标识
	var scrollTag = false;
    //渐隐时间
    var fadeOutTime = 1800;
    var goIcon = true;
    var feekbackIcon = true;
	var DelayTime = 2000;
	var HighTag = true;
	var ShakeOffTime = 300;
	//定时器ID
	var delayhighID = 0;
	
	function delayhigh() {
		if(!scrollTag) {
			HighTag = true;
			if("ontouchstart" in document){
                $('#go-top').fadeOut(fadeOutTime);
            }else{
                if($('#go-top .uc-2vm-pop').is(':hidden')){
                    $('#go-top').fadeOut(fadeOutTime);
                }
            }
			clearInterval(delayhighID);
		}
    }
	
	function scrollEndEvent() {
		clearInterval(delayhighID);
		delayhighID = setInterval(delayhigh, DelayTime);
		scrollTag = false;
	}
	
	function hoverEventIn() {
		clearInterval(delayhighID);
		if(HighTag) {
			HighTag = false;
			$('#go-top').stop(true).fadeIn();
		}
	}
	
	function hoverEventOut() {
		clearInterval(delayhighID);
		delayhighID = setInterval(delayhigh, DelayTime);
	}
	
	delayhighID = setInterval(delayhigh, DelayTime);
	
	$(window).scrollEnd(scrollEndEvent,ShakeOffTime);
	
	$('#go-top').hover(hoverEventIn,hoverEventOut);
	
    $(window).on('scroll',function(){
        if(!scrollTag) {
			scrollTag = true;
			clearInterval(delayhighID);
			if(HighTag) {
				HighTag = false;
				$('#go-top').stop(true).fadeIn();
				if("ontouchstart" in document){
					if(!goIcon){
                        $('.go-top .go').css('backgroundPosition', '0 -150px');
                        goIcon = !goIcon;
                    }
                    if(!feekbackIcon){
                        $('.go-top .feedback').css('backgroundPosition', '0 -100px');
                        feekbackIcon = !feekbackIcon;
                    }
					//在手机中，图标被点过之后即变成文字（因为css的hover原因，在手机上变成点击），
                    // 在这里把对应变量设置为false，以便在滚动的时候做判断，如果是false，那就恢复图标状态
					$('.go-top .go').on('touchstart', function (){
                        goIcon = false;
                    });
                    $('.go-top .feedback').on('touchstart', function (){
                        feekbackIcon = false;
                    });
					//点击回到顶部
                    $('#go-top .go').on('touchstart',function(e){
                        e.stopPropagation();
                        $('html,body').animate({'scrollTop':0},500);
                    });
				} else {
				    //鼠标经过查看二维码按钮时
                    $('#go-top .uc-2vm').hover(function(){
                        $('#go-top .uc-2vm-pop').stop().slideLeftShow();
                    },function(){
                        $('#go-top .uc-2vm-pop').stop().slideLeftHide();
                    });

                    //点击回到顶部
                    $('#go-top .go').on('click',function(e){
                        e.stopPropagation();
                        $('html,body').animate({'scrollTop':0},500);
                    });
				}
			}
		}
    });
});