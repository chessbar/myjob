<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>后盾招聘登陆-教学项目</title>
	<!-- 载入公共头部 -->
<link rel="stylesheet" type="text/css" href="http://localhost/myjob/Static/Css/style.css">
<link rel="stylesheet" type="text/css" href="http://localhost/myjob/Static/Css/common.css">
	<link rel="stylesheet" href="http://localhost/myjob/./Myjob/Myjob/Member/Tpl/Public/Css/login.css" />
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
		<a href="<?php echo U('Index/Index/index');?>" class="logo"><img src="http://localhost/myjob/./Myjob/Myjob/Member/Tpl/Public/images/logo_front.png" alt="" /></a>
	</div>
	<!-- 头部结束 -->
	

	<!-- 登录大盒子 -->
	<div class="logo_bg">
		<div class="logo_box">
			<div class="logo_boxin">
				<form action="" method="post" id="login_form">
					<div class="tit">会员登录</div>
					<div class="logo_name">
						用户名：
						<input type="text" maxlength="30" name="uname"/>
					</div>
					<div class="logo_pwd">
						密&nbsp;&nbsp;&nbsp;&nbsp;码：
						<input type="password" maxlength="20" name="pwd"/>
						<input type="hidden" class=""name="deal" value="1"/>
					</div>
					<div class="logo_auto">
						<input type="checkbox" name="auto" value="1" checked="checked"/>
						 			  一周内自动登录
					</div>
					<!-- <div class="get_show">
						您所访问的页面需要登录后才能访问！
					</div> -->
					<div class="logo_sub">
						<input type="submit" value="登录" />
						<a href="">忘记密码？</a>
					</div>
				</form>
				<!-- 横线 -->
				<p class="border"></p>
				<!-- 横线结束 -->
				<ul class="reg_box">
					<li>
						还没有账号？<a href="<?php echo U('Member/Reg/index');?>">免费注册</a>
						
					</li>
				</ul>
			</div>
			
		</div>
	</div>
	<!-- 登录大盒子结束 -->
	<!-- 页脚开始 -->
	<div class="footer">
		<!-- 欢迎加入php群开始 -->
		<div class="wec">
			 欢迎加入PHP交流群 
			 410004417
			  网站备案：<a href="" class="yue">京ICP备*******号-* </a>
			
			  <a href="">
			  	<img src="http://localhost/myjob/./Myjob/Myjob/Member/Tpl/Public/images/pic.gif" alt="" />
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