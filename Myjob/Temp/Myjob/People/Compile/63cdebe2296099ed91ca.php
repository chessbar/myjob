<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>后盾招聘创建简历第一步-教学项目</title>
<link rel="stylesheet" type="text/css" href="http://localhost/myjob/Static/Css/style.css">
<link rel="stylesheet" type="text/css" href="http://localhost/myjob/Static/Css/common.css">
<link rel="stylesheet" type="text/css" href="http://localhost/myjob/./Myjob/Myjob/People/Tpl/Public/Css/member-common-left.css">
<link rel="stylesheet" type="text/css" href="http://localhost/myjob/./Myjob/Myjob/People/Tpl/Public/Css/private.css">
<script type='text/javascript' src='http://localhost/myjob/hdphp/hdphp/Extend/Org/Jquery/jquery-1.8.2.min.js'></script>
<link href='http://localhost/myjob/hdphp/hdphp/../hdjs/css/hdjs.css' rel='stylesheet' media='screen'>
<script src='http://localhost/myjob/hdphp/hdphp/../hdjs/js/hdjs.js'></script>
<script src='http://localhost/myjob/hdphp/hdphp/../hdjs/js/slide.js'></script>
<script src='http://localhost/myjob/hdphp/hdphp/../hdjs/org/cal/lhgcalendar.min.js'></script>
<script type='text/javascript'>
HOST = '<?php echo $GLOBALS['user']['HOST'];?>';
ROOT = '<?php echo $GLOBALS['user']['ROOT'];?>';
WEB = '<?php echo $GLOBALS['user']['WEB'];?>';
URL = '<?php echo $GLOBALS['user']['URL'];?>';
HDPHP = '<?php echo $GLOBALS['user']['HDPHP'];?>';
HDPHPDATA = '<?php echo $GLOBALS['user']['HDPHPDATA'];?>';
HDPHPTPL = '<?php echo $GLOBALS['user']['HDPHPTPL'];?>';
HDPHPEXTEND = '<?php echo $GLOBALS['user']['HDPHPEXTEND'];?>';
APP = '<?php echo $GLOBALS['user']['APP'];?>';
CONTROL = '<?php echo $GLOBALS['user']['CONTROL'];?>';
METH = '<?php echo $GLOBALS['user']['METH'];?>';
GROUP = '<?php echo $GLOBALS['user']['GROUP'];?>';
TPL = '<?php echo $GLOBALS['user']['TPL'];?>';
CONTROLTPL = '<?php echo $GLOBALS['user']['CONTROLTPL'];?>';
STATIC = '<?php echo $GLOBALS['user']['STATIC'];?>';
PUBLIC = '<?php echo $GLOBALS['user']['PUBLIC'];?>';
HISTORY = '<?php echo $GLOBALS['user']['HISTORY'];?>';
HTTPREFERER = '<?php echo $GLOBALS['user']['HTTPREFERER'];?>';
</script>
<script type="text/javascript">
		// input按钮鼠标移入改变背景图效果
		$(function(){
			// 当鼠标移入时
			$('td.subs input').mouseover(function(){
				$(this).addClass('input_bg');
			})
			// 当鼠标移出时
			$('td.subs input').mouseout(function(){
				$(this).removeClass('input_bg');
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
					<li><a href="<?php echo U('People/ResumeManager/index');?>">简历管理</a></li>
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
		<!-- 右边大盒子开始 -->	
		<div class="right_box">
			<div class="right_title">
				<h1>隐私设置</h1>
			</div>
		<form action="" method="post">
			<table cellpadding="0" border="0" cellspacing="0">
				<tr>
					<td class="set" colspan="2">
						<span>设置：</span>
					</td>
				</tr>
				<tr>
					<td class="open">
						<strong>简历公开状态</strong>
					</td>
				</tr>
				<tr>
					<td class="com_open">
						<label for="">
							<input type="radio" name="publicstate" value="1">
							完全公开
						</label>
						<span>(企业可以搜索到您的简历)</span>
						<span class="col">推荐选此项！</span>
					</td>
				</tr>
				<tr>
					<td class="semi_open">
						<label for="">
							<input type="radio" name="publicstate" value="0">
							半公开
						</label>
						<span>(企业搜不到到简历，但是您可以主动给职位投递简历)</span>
					</td>
				</tr>
	
					<tr>
						<td class="real_name">
							<strong>简历中显示照片</strong>
						</td>
					</tr>
					<tr>
						<td class="show_real">
							<label for="">
								<input type="radio" name="facepublic" value="1">
								  显示照片 <span class="col">推荐选此项！</span>
							</label>
						</td>
					</tr>
					<tr>
						<td class="show_real bot">
							<label for="">
								<input type="radio" name="facepublic" value="0">
							   不显示照片
							</label>
						</td>

				<tr>
					<td class="subs">
						<input type="hidden" name="reid" value="<?php echo $_GET['reid'];?>">
						<input type="submit" value="保存设置">
						<input type="button" value="预览简历" onclick="">
						<input type="button" value="返回简历管理" onclick="location.href=''">
					</td>
				</tr>
			</table>
		</form>
		</div>
		<!-- 右边大盒子结束 -->	
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