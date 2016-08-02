
$(function(){
	
	// 返回顶部盒子效果
		var back_timer = '';//定时器
	$(window).scroll(function(){
		// 定义滚动条的距离
		var top = $(window).scrollTop();
		// 三元表达式判断显示隐藏
		(top>10)?$('.backtop_box').fadeIn(500):$('.backtop_box').fadeOut(500);
	})

	// 点击返回顶部图标返回顶部
	$('.backtop_box a.backtop').click(function(){
		// 设立定时器
		back_timer = setInterval(function(){
			// 返回顶部所减距离
			$(window).scrollTop($(window).scrollTop()-10);
			// 判断滚动条距离顶部距离《＝0 时清楚定时器
			if($(window).scrollTop()<=0){
				clearInterval(back_timer);
			}
		},1);
	})


})