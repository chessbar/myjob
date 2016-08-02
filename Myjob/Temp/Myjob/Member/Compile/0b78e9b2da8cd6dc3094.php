<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>后盾招聘注册-教学项目</title>
	<link rel="stylesheet" href="http://localhost/myjob/./Myjob/Myjob/Member/Tpl/Public/CSS/reg.css" />
	<!-- 载入公共头部 -->
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
	
	<!-- 注册大盒子开始 -->
	<div class="reg_box">
		<div class="reg_box_tit">
			<strong>您要注册成为哪种会员？</strong>
		</div>
		<div class="ent">
			<img src="http://localhost/myjob/./Myjob/Myjob/Member/Tpl/Public/images/39.png" alt="" class="reg_logo" />
			<div class="reg_logo_box">
					注册企业会员
			</div>
			<ul>
				<li>发布招聘信息</li>
				<li>搜索人才 </li>
				<li>下载简历 </li>
				<li>邀请面试</li>
				<li>...... </li>
				
			</ul>
				<div class="btn">
					<a href="<?php echo U('Reg/reg/', array('type'=>2));?>" class="but">免费注册</a>
				</div>
		</div>
		<div class="ent ent2">
			<img src="http://localhost/myjob/./Myjob/Myjob/Member/Tpl/Public/images/40.png" alt="" class="reg_logo" />
			<div class="reg_logo_box">
					注册个人会员
			</div>
			<ul>
				<li>创建简历</li>
				<li>搜索职位 </li>
				<li>在线申请职位  </li>
				<li>职位收藏夹</li>
				<li>...... </li>
				
			</ul>
				<div class="btn">
					<a href="<?php echo U('Reg/reg/', array('type'=>1));?>" class="but">免费注册</a>
				</div>
		</div>
	</div>
	<!-- 注册大盒子结束 -->
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