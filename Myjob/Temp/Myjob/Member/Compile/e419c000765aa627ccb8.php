<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>后盾招聘注册-教学项目</title>
	<link rel="stylesheet" href="http://localhost/myjob/./Myjob/Myjob/Member/Tpl/Public/CSS/reg.css" />
<link rel="stylesheet" type="text/css" href="http://localhost/myjob/Static/Css/style.css">
<link rel="stylesheet" type="text/css" href="http://localhost/myjob/Static/Css/common.css">
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
	
	<!-- 会员注册开始 -->
	<div class="reg-box">
		<div class="box-bar">

			 
			 <?php if($_GET['type']==1){?>
			 <h2>个人会员注册</h2>
			 <p>切换至<a href="<?php echo U('Reg/reg',array('type'=>2));?>">企业会员</a>注册</p>
			 <?php  }else{ ?>
			 <h2>企业会员注册</h2>
			  <p>切换至<a href="<?php echo U('Reg/reg',array('type'=>1));?>">个人会员</a>注册
			 <?php }?>
		</div>
		<form action="" class="reg-form" method="POST">
			<label for="">用户名：<input type="text" name="uname" id="" /></label>
			<label for="">常用电子邮箱：<input type="text" name="uemail" id="" /></label>
			<label for="">设置登录密码：<input type="password" name="pwd" id="" /></label>
			<label for="">确认登录密码：<input type="password" name="pwdc" id="" /></label>
			<label for="">
				<span class="already">我已阅读并同意&nbsp<a href="">[注册协议]</a></span>
				<input type="checkbox" name="deal" id="form-check" checked="checked" value="1"/>
			</label>
			<label for=""><input type="submit" name="" class="but" value="立即注册"/></label>
			<input type="hidden" name="rid" value="<?php echo $_GET['type'];?>"/>
		</form>
		<div class="reg-right">
			<div class="right-box">
				<h2>已经有账号？</h2>
				<a href="<?php echo U('Member/Login/index');?>" class="but">立刻登录</a>
				<span>企业会员</span>
				<p>发布招聘信息，查看人才简历，搜索简历...</p>
				<span class="box-down-span">个人会员 </span>
				<p class="box-down-p">填写个人简历，在线申请职位，搜索职位... </p>
			</div>
		</div>
	</div>
	<!-- 会员注册结束 -->

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