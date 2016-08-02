<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>后盾招聘会员中心-我创建的简历-教学项目</title>
<link rel="stylesheet" type="text/css" href="http://localhost/myjob/Static/Css/style.css">
<link rel="stylesheet" type="text/css" href="http://localhost/myjob/Static/Css/common.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/myjob/./Myjob/Myjob/People/Tpl/Public/Css/member-common-left.css">
		<!-- 头部结束 -->
	<link rel="stylesheet" type="text/css" href="http://localhost/myjob/./Myjob/Myjob/People/Tpl/Public/Css/resume_manager.css">
<jquery/>
	<script type="text/javascript">
		/**
		 * [已发布的职位,点击职位名称动作，要选中下面所有的职位]
		 * @return {[type]} [description]
		 */
		$(function(){
			//标记变量，默认为1
			var flag = 1;
			$('.full_cpid').click(function(){
				//如果是1 就选中，
				if(flag){
					$('.cpid_input').attr('checked',true);
					flag = 0;
					return;
				}
				//否则取消选择
				$('.cpid_input').attr('checked',false);
				flag = 1;
			})
			//input按钮背景色改变效果
			$('table tr td .sub').mouseover(function(){
				$(this).addClass('sub_bg');
			})
				$('table tr td .sub').mouseout(function(){
				$(this).removeClass('sub_bg');
			})
		})
	</script>

</head>
<body>
<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!-- 载入公共头部 -->
	<!-- 最顶部灰色条开始 -->
	<div class="head_top">
		<div class="head_top_box">
			<!-- 左边盒子 -->
				<?php if(isset($_SESSION['uname']) && isset($_SESSION['uid'])){?>
				<div class="head_top_l">
					<span class="top_login">
						欢迎    
						<a href="" class="name" style="color:#339900"><?php echo $_SESSION['uname'];?></a>
					   登录！    
					   <a href="<?php echo U('Member/Index/index');?>" style="color:#0066CC">[会员中心]</a>
					   <a href="<?php echo U('Member/Login/out');?>" style="color:#0066CC">[退出]</a>
					</span>
				</div>
				<?php  }else{ ?>
				<div class="head_top_l">
					<span class="top_login">
					欢迎来到PHP招聘网！   
						<a href="<?php echo U('Member/Login/index');?>">[登录]</a>
						<a href="<?php echo U('Member/Reg/index');?>">[免费注册]</a>
					</span>
				</div>
				<?php }?>
			<!-- 左边盒子结束 -->
		</div>
	</div>
	<!-- 最顶部灰色条结束 -->
	<!-- 头部开始 -->
	<div class="head">
		<a href="<?php echo U('Index/Index/index');?>" class="logo"><img src="http://localhost/myjob/./Myjob/Myjob/People/Tpl/Public/images/logo_front.png" alt="" /></a>
	</div>
	<!-- 头部结束 -->
	
<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><?php if($_SESSION['rid']==2){?>
<!-- 如果为2证明是企业用户 -->
	<div class="nav_box">
		<!-- tab切换盒子头部 -->
		<div class="tab_top">
			<ul>
				<li><a href="" class="hover">中心首页</a></li>
				<li><a href="">职位管理</a></li>
				<li><a href="">招聘管理</a></li>
				<li><a href="">公司资料</a></li>
				<li><a href="">账户管理</a></li>
			</ul>
		</div>
		<!-- tab切换盒子头部结束 -->
			<!-- tab切换盒子底部 -->
	<div class="tab_bottom"></div>
	<!-- tab切换盒子底部结束-->
	</div>
<?php }?>
<?php if($_SESSION['rid']==1){?>
<!-- 如果为1证明是个人用户 -->
<div class="nav_box">
	<!-- tab切换盒子头部 -->
	<div class="tab_top">
		<ul class="tab_top_ul">
			<li id="member_index"><a href="">中心首页</a></li>
			<li id="make"><a href="">简历管理</a></li>
			<li id="apply_job"><a href="">求职管理</a></li>
			<li id="user_manager"><a href="">账户管理</a></li>
		</ul>
	</div>
	<!-- tab切换盒子头部结束 -->
		<!-- tab切换盒子底部 -->
	<div class="tab_bottom"></div>
	<!-- tab切换盒子底部结束-->
</div>
<?php }?>
		<!-- 导航栏结束 -->
	<!-- 内容大盒子开始 -->
	<div class="content">
		<!-- 左边盒子 -->

		<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?>
	<!-- 左边盒子 -->	

		<div class="left_box">
		<?php if($_SESSION['rid']==2){?>
			<!-- //否则为企业用户 -->
			<div class="menu_box">
				<div class="title">
					<p>职位管理</p>
					<b></b>
				</div>
				<ul class="menu_content">
					<li><a href="">发布职位</a></li>
					<li><a href="">已发布职位</a></li>
				</ul>
			</div>

			<div class="menu_box">
				<div class="title">
					<p>招聘管理</p>
					<b></b>
				</div>
				<ul class="menu_content">
					<li><a href="">搜索人才</a></li>
					<li><a href="">我收到的职位申请</a></li>
				</ul>
			</div>

			<div class="menu_box">
				<div class="title">
					<p>公司信息</p>
					<b></b>
				</div>
				<ul class="menu_content">
					<li><a href="">基本信息</a></li>
					<li><a href="">营业执照</a></li>
					<li><a href="">企业Logo</a></li>
				</ul>
			</div>
       <?php }?>
       <?php if($_SESSION['rid']==1){?>
       <!-- 如果为1证明是个人用户 -->
			<div class="menu_box">
				<div class="title">
					<p>简历管理</p>
					<b></b>
				</div>
				<ul class="menu_content">
					<li><a href="<?php echo U('People/Resume/make1');?>">创建新简历</a></li>
					<li><a href="<?php echo U('People/Resume/manager');?>">简历管理</a></li>
				</ul>
			</div>

			<div class="menu_box">
				<div class="title">
					<p>求职管理</p>
					<b></b>
				</div>
				<ul class="menu_content">
					<li><a href="">搜索职位</a></li>
					<li><a href="">申请过的职位</a></li>
				</ul>
			</div>
		<?php }?>
			<!-- 公共个人资料部分 -->
			<div class="menu_box">
				<div class="title">
					<p>账户管理</p>
					<b></b>
				</div>
				<ul class="menu_content">
					<li><a href="<?php echo U('Member/Account/baseinfo');?>">个人资料</a></li>
					<li><a href="<?php echo U('Member/Account/pwd');?>">密码修改</a></li>
					<li><a href="<?php echo U('Member/Login/out');?>">安全退出</a></li>
				</ul>
			</div>
		</div>
		<!-- 左边盒子结束 -->		

		<!-- 左边盒子结束 -->
		<!-- 右边盒子开始 -->
		<div class="right_box">
			<div class="title_box">
				<h1>我创建的简历</h1>
			</div>
			<div class="tab_box">
				<a href="" class="select">所有简历</a>
				<a href="">审核通过的</a>
				<a href="">审核中的</a>
				<a href="">审核未通过的</a>
			</div>
			<!-- 简历名称盒子 -->
			<form action="" method="post">
				<table>
					<tr class="title">
						<td class="h_26 w_90">
							<label>
								<input type="checkbox" class="full_cpid">
								简历名称
							</label>
						</td>
						<td class="w_50">审核状态</td>
						<td class="w_50">刷新时间</td>
						<td class="w_50">到期时间</td>
						<td class="w_50">完整指数</td>
						<td class="w_50">浏览</td>
						<td class="w_50">操作</td>
					</tr>
					<tr class="tr_height">
							<td>没有您要找的简历</td>
					</tr>
					<tr class="us_list">
						<td>
							<a href="" class="sub">创建一份简历</a>
						</td>
					</tr>

					<tr>
						<td class="h_26">
							<label>
								<input type="checkbox" class="cpid_input" name="reid[]" value="<?php echo $v['reid'];?>">
								<a href="" style="color:#3978D5" target="_blank">php简历</a>
								<!-- 分数小于80不能点击 -->
								<!-- <a href="javascript:" style="color:#666666">php简历</a> -->
							</label>
						</td>
						<td class="w_50">审核通过</td>
						<td class="w_50">2011-1-1</td>
						<td class="w_50">2011-1-1</td>
						<td class="w_120">
							<div style="border:1px #006600 solid; width:60px; height:8px;float:left;margin-left:5px;">
								<div style="width:22%;background-color:#99CC00;height:8px;"></div>
							</div>
							<span class="progress">22%</span>
							
						</td>
						<td class="w_50">20次</td>
						<td class="w_50 td_blue">
							<a href="">修改</a>
							<a href="">隐私</a>
							<a href="">删除</a>  
						</td>
					</tr>

					<tr class="us_list">
		 				<td colspan="10">
		 					<input type="button" value="创建一份简历" class="sub" onclick="location.href='<?php echo U('People/Resume/make1');?>'">
		 					<input type="submit" class="sub" value="一键提升排名" name="up">
		 					<input type="submit" class="sub" value="删除简历" name="delete">
		 				</td>
					</tr>
				</table>
			</form>

		</div>
		<!-- 右边盒子结束 -->
	</div>
	<!-- 内容大盒子结束 -->
	<!-- 页脚开始 -->
	<div class="footer">
		<!-- 欢迎加入php群开始 -->
		<div class="wec">
			 欢迎加入PHP交流群 
			 410004417
			  网站备案：<a href="" class="yue">京ICP备*******号-* </a>
			
			  <a href="">
			  	<img src="http://localhost/myjob/./Myjob/Myjob/People/Tpl/Public/images/pic.gif" alt="" />
			  </a>
		</div>
		<!-- 欢迎加入php群结束 -->
		<!-- 温馨提示开始 -->
		<div class="rem">
			温馨提示：招聘单位无权收取任何费用，请求职者加强自我保护意，按照相关劳动法规保护自身权益，警惕虚假招聘，避免上当受骗
			<br />
			Copyright @ 2011-2015  houdunwang.com  All Right Reserved   本网站部分内容只转载原作的部分内容，若有异议，请与本站负责人联系，我们将予以改正！ 
		</div>
		<!-- 温馨提示结束 -->
	</div>
	<!-- 页脚结束 -->
</body>
</html>
