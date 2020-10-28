let keyPrefix = 'qhjack:';
jQuery(function ($) {
	
	//注意jsVar变量来自functions.php里的wp_localize_script本地化
	//如果不在home页面
	if(jsVar.is_not_home==1){
		//如果用户在页面停留5秒，则浏览量+1
		setTimeout(function (){
			let post_ID = jsVar.id;
			let key = keyPrefix+'is_read_ids';
			let is_read_ids = localStorage.getItem(key);
			let is_read_arr = [];
			if(is_read_ids){
				is_read_arr = is_read_ids.split(',');
			}
			//如果已经浏览过了，则不带添加浏览量
			if($.inArray(post_ID, is_read_arr)>-1){
				return false;
			}
			
			//浏览量+1
			$.ajax({
				type:'post',
				url:'/wp-json/postViews/postViews',
				data:{
					post_ID:post_ID,
				},
				dataType:'json',
				success:function (response){
					is_read_arr.push(post_ID);
					is_read_ids = is_read_arr.join(',');
					localStorage.setItem(key, is_read_ids);
					$('#main article .entry-header .entry-meta .entry-date .page-views').html(response.count+' 已阅读');
				}
			});
		}, 2000);
	}
	
	//点赞
	let key = keyPrefix+'is_thumbs_up_ids';
	$('.thumbs-up').on('click', function (){
		var $this = $(this);
		if($this.data('isclick')==1){
			return false;
		}
		$this.data('isclick',1);
		
		let is_thumbs_up_ids = localStorage.getItem(key);
		let is_thumbs_up_arr = [];
		if(is_thumbs_up_ids){
			is_thumbs_up_arr = is_thumbs_up_ids.split(',');
		}
		let post_ID = $(this).data('post-id').toString();
		
		//默认操作为点赞
		let action = 'thumbsUp';
		//如果已经点赞过了，则操作为取消点赞
		if($.inArray(post_ID, is_thumbs_up_arr)>-1){
			action = 'cancelThumbsUp';
		}
		// 请求url格式：protocol://host:post/wp-json/namespace/route，
		// 但protocol://host:post部分可不写，jq自动会用当前域名端口
		$.ajax({
			type:'post',
			url:'/wp-json/like/'+action,
			data:{
				post_ID:post_ID,
				action:action,
			},
			dataType:'json',
			// jsonp:'callback',
			success:function (response){
				if(action=='thumbsUp'){
					is_thumbs_up_arr.push(post_ID);
					is_thumbs_up_ids = is_thumbs_up_arr.join(',');
					localStorage.setItem(key, is_thumbs_up_ids);
					$this.html(response.count+' 点赞');
					$this.removeClass('fa-thumbs-o-up').addClass('fa-thumbs-up');
				}else{
					//取消点赞
					let tmpArr = new Array();
					for(let i=0;i<is_thumbs_up_arr.length;i++){
						if(is_thumbs_up_arr[i]!==post_ID){
							tmpArr.push(is_thumbs_up_arr[i]);
						}
					}
					is_thumbs_up_ids = tmpArr.join(',');
					localStorage.setItem(key, is_thumbs_up_ids);
					$this.html(response.count+' 点赞');
					$this.removeClass('fa-thumbs-up').addClass('fa-thumbs-o-up');
				}
				$this.data('isclick',0);
			},
			error:function (error){
				console.log(error);
			}
		});
	});
	
	//添加赞效果（由于是本地存储赞数据），所以要用js添加效果
	let is_thumbs_up_ids = localStorage.getItem(key);
	let is_thumbs_up_arr = [];
	if(is_thumbs_up_ids){
		is_thumbs_up_arr = is_thumbs_up_ids.split(',');
		$('#main article .thumbs-up').each(function (){
			//不转成字符串无法与localStorage内存的id比较（因为localStorage存的都是字符串）
			let post_ID = $(this).data('post-id').toString();
			if($.inArray(post_ID, is_thumbs_up_arr)>-1){
				$(this).addClass('fa-thumbs-up').removeClass('fa-thumbs-o-up');
			}
		});
	}
});