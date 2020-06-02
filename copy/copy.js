function setClipboardText(event){
	event.preventDefault();//阻止元素发生默认的行为（例如，当点击提交按钮时阻止对表单的提交）。
	let node = document.createElement('div');
	//对documentfragment不熟，不知道怎么获取里面的内容，用了一个比较笨的方式
	node.appendChild(window.getSelection().getRangeAt(0).cloneContents());
	
	//html格式
	let htmlData = '<div>' + node.innerHTML + '</div>';
	
	//文本格式，getRangeAt(0)返回对基于零的数字索引与传递参数匹配的选择对象中的范围的引用。对于连续选择，参数应为零。
	let textData = window.getSelection().getRangeAt(0).toString();
	
	//如果复制的内容超过120的字符则添加版权信息
	if(textData.length >= 120){
		let url = window.location.href;
		let article_type = jQuery('.copyright .description').data('article-type');
		let copyright = '';
		if(article_type=='original'){
			copyright = '本文为博主原创文章，转载请附上博文链接！'
		}else{
			copyright = '本文为转载文章，版权归原作者都所有，转载请附上博文链接！'
		}
		//附加到复制内容后面的版权内容
		let appendText =
			'\n\n------------------------------------\n'
			+ '\n作者：起航天空\n'
			+ '来源：起航天空\n'
			+ '原文：' + url + '\n'
			+ copyright + '\n\n';
		//文本格式附加版权信息
		textData += appendText;
		//html格式附加版权信息
		htmlData = '<div>' + node.innerHTML + appendText.replace('\n', '<br>') + '</div>';
	}
	
	if(event.clipboardData){
		event.clipboardData.setData("text/html", htmlData);
		//setData(剪贴板格式, 数据) 给剪贴板赋予指定格式的数据。返回 true 表示操作成功。
		event.clipboardData.setData("text/plain",textData);
	}
	else if(window.clipboardData){ //window.clipboardData的作用是在页面上将需要的东西复制到剪贴板上，提供了对于预定义的剪贴板格式的访问，以便在编辑操作中使用。
		return window.clipboardData.setData("text", textData);
	}
}

//监听复制事件
document.addEventListener('copy',function(e){
	if(jQuery('.post-copyright').length == 1 && jQuery('#wpadminbar').length == 0) {
		setClipboardText(e);
	}
});
