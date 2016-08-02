// 企业招聘的职位信息，左边盒子tab切换效果

$(function(){
	$('.tab_tit a').click(function(){
		//获得索引
		var cur = $(this).index();
		//更改class
		$(this).addClass('selected').siblings('a').removeClass('selected');
		//相对应的显示，其余的隐藏
		$('.show_box div.hid').eq(cur).show().siblings('div.hid').hide();
	})
})