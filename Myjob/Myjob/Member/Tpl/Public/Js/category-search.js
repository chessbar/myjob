/**
 * [description]
 * @return {[type]} [description]
 */
$(document).ready(function(){
    //弹出窗口关闭按钮移入移出效果-------------------
	//关闭按钮移入效果
	$('.close').mouseover(function(){
		$(this).addClass('span_bg');
	})

	//关闭按钮移出效果
	$('.close').mouseout(function(){
		$(this).removeClass('span_bg');
	})

	// 点击关闭按钮隐藏盒子效果
	$('.close').click(function(){
		$(".show_bank").add('.bank').add('.BG').fadeOut(500);
		$(".bg_bank").add('.bank_login').add('.BG').fadeOut(500);
		$(".success_bg").add('.success_box').add('.BG').fadeOut(500);
		$(".login_bg").add('.quickLogin_box').add('.BG').fadeOut(500);
		$(".loginCom_bg").add('.loginCom_box').add('.BG').fadeOut(500);
	})	
	

	/**
	 * 点击申请完成关闭动作
	 * @return {[type]} [description]
	 */
	$('.close_success').click(function() {
		//出发关闭按钮动作
		$('.close').click();
	});

	/**
	 * @author [马震宇] houdunwangmzy@163.com
	 * 点击申请职位显示弹窗，发送异步检测当前用户是否有资格进行申请职位
	 * @return {[type]} [description]
	 */
	$('.apply').click(function(){
		//判断是否登陆，uid与username从模板赋值
		if(!uid || !username){
			//如果没有登陆，就不用发异步，只弹出登陆窗体
			show_div($('.login_bg'),$('.quickLogin_box'),10);
			return false;
		}
		//如果rid为2，为企业会员，不让收藏，必须是个人会员
		if(rid == 2){
			show_div($('.people_apply_bg'),$('.people_apply_box'),10);
			return false;
		}
	
		//从当前行里面获得职位名称
		var posname = $(this).attr('posname');
		//从当前行获得公司职位主键id
		var cpid = $(this).attr('cpid');
		//从当前行获得公司用户uid
		var company_uid = $(this).attr('uid');
		//组合职位信息
		var html ='<li>';
		html += '<label class="need_apply" for="">';
		html += '<input class="position_input" type="checkbox" value="' + cpid + '" name="position_cpid" checked="checked">';
		html += '<span class="company_name_span">' + posname + '</span>';
		html += '</label>';
		html += '</li>';

		//公司用户uid，放到隐藏域中
		$('input[name=company_uid]').val(company_uid);
		//把组合好的职位信息放入到弹出的窗体中
		$('.want_invite ul').html(html);
		/**
		 * 异步发送检测当前用户是否可以申请职位
		 * (1)是否有发布简历(2)简历是否审核通过(3)简历是否过期，否则不可申请职位(4)简历是否公开
		 */
		$.ajax({
			url 	: CONTROL + '&m=ajax_check_resume',
			dataType: 'json',
			success : function(data){
				//等于1检测成功
				if(data == 1){
					//填写资料弹出框
					show_div($('.loginCom_bg'),$('.loginCom_box'),90);
				//否则检测失败
				}else{
					//显示由于用户简历不完整，提示错误信息
					show_div($('.people_applyerror_bg'),$('.people_applyerror_box'));
					return false;
				}
				
			}
			
		})


	})
	
	/**
	 * @author [马震宇] houdunwangmzy@163.com
	 * [申请职位异步提交发送异步]
	 * @return {[type]} [description]
	 */
	$('form[name=apply_form_submit]').submit(function(){
		//检测用户是否选中简历，首先定义一个标识变量
		var ff = false;
		$('input[name=resume1_reid]').each(function(){
			//如果有一个选中就把ff改为true
			if($(this).attr('checked')){
				ff = true;
			}
		})
		//如果一直为false证明没有简历被选中
		if(!ff){
			alert('请选择简历');
			return false;
		}
		//获得信息
		var data = $(this).serialize();
		//异步发送
		$.ajax({
			url 	: CONTROL + '&m=ajax_add_apply',
			type 	: 'post',
			dataType: 'json',
			data 	: data,
			success : function(data){
				//等于1添加成功
				if(data == 1){
					//先关闭填写资料弹出框
					$(".loginCom_bg").add('.loginCom_box').add('.BG').fadeOut(200);
					//成功以后弹出窗
					show_div($('.apply_success_bg'),$('.apply_success_box'),10);
				}else if(data == 2){
					//先关闭填写资料弹出框
					$(".loginCom_bg").add('.loginCom_box').add('.BG').fadeOut(200);
					//等于2提示重复，不能添加
					show_div($('.people_applyerror_bg'),$('.people_applyerror_box'));
				}
				
			},
			error 	: function(){
				alert('error');
			}
		})
		
	})

	
	/**
	 * [点击城市发送异步]
	 * @return {[type]} [description]
	 */
	//点击顶级城市
	$('select[name=city_one]').change(function(){
		//获得获得一级城市id
		var cityId = {cityId: $(this).val()};
		$.ajax({
			url : CONTROL + '&m=ajax_city',
			data : cityId,
			type : 'post',
			dataType : 'json',
			success:function(data){
				//如果顶级城市选择“请选择”
				if(cityId.cityId == 0){
					var html = "<option value='0'>请选择</option>";
				}else{
					var html = "<option value='0'>不限</option>";
					$(data).each(function(i){
						html += "<option value=" + data[i].cityid + ">" + data[i].cityname + "</option>";
					})
				}

				$('select[name=city_second]').find('option').remove().end().append(html);
				
			}
		});
	})

	/**
	 * [点击选择职位类别进行异步操作]
	 * @return {[type]} [description]
	 */
	//点击1级职位类别触发ajax异步
	$('select[name=pos_one]').change(function(){
		//获得1级职位类别id
		var posid = {posid: $(this).val()};
		//发送ajax
		$.ajax({
			//发送地址
			url : CONTROL + '&m=ajax_pos',
			//发送1级职位类别id
			data : posid,
			//post方式传输
			type : 'post',
			//json数据
			dataType : 'json',
			success:function(data){
				//如果顶级职位类别选择“请选择”
				if(posid.posid == 0){
					//二级职位类别也为“请选择”
					var html = "<option value='0'>请选择</option>";
				}else{
					//否则循环调取2级职位类别
					var html = "<option value='0'>不限</option>";
					$(data).each(function(i){
						html += "<option value=" + data[i].posid + ">" + data[i].posname + "</option>";
					})
				}
				//把2级城市清空，然后把组合好html的插入
				$('select[name=pos_second]').find('option').remove().end().append(html);
				
			}
		});
	})



	// 申请职位弹窗登陆按钮鼠标移入效果
	// 鼠标移入的时候改变背景图效果
	$('td.subm input.sub').mouseover(function(){
		$(this).addClass('sub_bg').removeClass('sub');
	})

	// 鼠标移出的时候效果
	$('td.subm input.sub').mouseout(function(){
		$(this).addClass('sub').removeClass('sub_bg');
	})
	

	// 申请职位申请按钮效果
	$('input.apply_sub').mouseover(function(){
		$(this).addClass('apply_sub_bg').removeClass('apply_sub');
	})

	// 鼠标移出的时候效果
	$('input.apply_sub').mouseout(function(){
		$(this).addClass('apply_sub').removeClass('apply_sub_bg');
	})

})


/**
 * [show_div 显示窗口与固定位置函数]
 * @param  {[type]} bgObj [黑色半透明背景]
 * @param  {[type]} obj   [黑色半透明背景上面的盒子]
 * @return {[type]}       [description]
 */
function show_div(bgObj, obj, num=0){
	//插入遮罩
	$('body').append($('<div class="BG" style=""></div>'));
	$('.BG').height($(document).height());
	//窗口宽与高
	var WW = $(window).width();
	var WH = $(window).height();

	//弹出窗口的left与top
	var left = (WW - bgObj.width()) / 2;
	var top = (WH - bgObj.height()) / 2 - num;

	//设置弹出窗口的位置
	bgObj.css({left : left, top : top + $(window).scrollTop() }).fadeIn(200);
	obj.css({left : left + 5, top : top + 5 + $(window).scrollTop() }).fadeIn(200);
}

