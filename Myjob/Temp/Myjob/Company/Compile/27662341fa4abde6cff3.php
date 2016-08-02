<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>后盾招聘登陆-教学项目</title>
	<!-- 载入公共头部 -->
<link rel="stylesheet" type="text/css" href="http://localhost/myjob/Static/Css/style.css">
<link rel="stylesheet" type="text/css" href="http://localhost/myjob/Static/Css/common.css">
<link rel="stylesheet" type="text/css" href="http://localhost/myjob/./Myjob/Myjob/Company/Tpl/Public/Css/member-common-left.css">
<link rel="stylesheet" type="text/css" href="http://localhost/myjob/./Myjob/Myjob/Company/Tpl/Public/Css/charter.css">
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
	<script src="http://localhost/myjob/Static/Js/ajax_city.js"></script>
	<script type="text/javascript" src="http://localhost/myjob/./Myjob/Myjob/Company/Tpl/Public/Js/backTop.js"></script>
</head>
<body>
	<!-- 最顶部灰色条开始 -->
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
		<a href="<?php echo U('Index/Index/index');?>" class="logo"><img src="http://localhost/myjob/./Myjob/Myjob/Company/Tpl/Public/images/logo_front.png" alt="" /></a>
	</div>
	<!-- 头部结束 -->
	
	<!-- 内容大盒子开始 -->	
	<div class="content">
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
					<li><a href="<?php echo U('Company/ComPosition/send_pos');?>">发布职位</a></li>
					<li><a href="<?php echo U('Company/ComPosition/check_pos');?>">已发布职位</a></li>
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
					<li><a href="<?php echo U('Company/ComInfo/baseinfo');?>">基本信息</a></li>
					<li><a href="<?php echo U('Company/ComInfo/license');?>">营业执照</a></li>
					<li><a href="<?php echo U('Company/ComInfo/logo');?>">企业Logo</a></li>
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
	
		<!-- 右边盒子开始 -->
		<div class="right_box">
			<div class="title_box">
				<h1>营业执照</h1>
			</div>
			<form action="" method="post" enctype="multipart/form-data">
				<table cellspacing="0" border="0" cellpadding="4">
					<tr>
						<td class="link_lan" colspan="2">
							营业执照只作为网站核实贵公司真实性的材料，不在任何页面显示，我们不会以任何形式公布您的执照信息！
							<br>
							 通过网站核实后的营业执照不能删除，如需要删除请与网站客服人员联系！
							 <span class="click_sp">[为什么要上传营业执照?]</span>
						</td>
						<td></td>
					</tr>
					<tr class="hid_tr">
						<td class="txt">为什么要上传营业执照：</td>
						<td>
							<p>① 通过认证后您将获得更多权限；</p>
							<p>③ 通过认证后可增加信息的可信度，成为已认证企业；</p>
							<p>注：上传营业执照仅供我们审核，绝不会用任何形式对外公开。</p>
						</td>
					</tr>
				<?php if(empty($data['licensepic'])){?>
					<tr>
						<td class="state">您的营业执照认证状态：</td>
						<td class="wam">未上传营业执照，请上传！</td>
					</tr>
				
					<tr>
						<td class="num">营业执照注册号：</td>
						<td class="inp">
							<input type="text" name="license">
						</td>
					</tr>
					<tr>
						<td class="pic">上传执照图片：</td>
						<td class="pic_inp">
							<input type="file" name="upload">(图片大小不超过 1024 KB,允许格式：jpg/gif/bmp/png)           
						</td>
					</tr>
					<tr>
						<td></td>
						<td class="sub">
							<input type="submit" value="上传">
						</td>
					</tr>
					<?php  }else{ ?>
					<tr>
						<td class="state">您的营业执照认证状态：</td>
						<?php if($data['state'] == 0||$data['state'] == 1){?>
						<td class="wam">认证中,请耐心等待</td>
						<?php }?>
						<?php if($data['state'] == 2){?>
						<td class="wam" style="color:green">认证通过</td>
						<?php }?>
						<?php if($data['state'] == 3){?>
						<td class="wam">认证失败</td>
						<?php }?>
					</tr>
					<tr>
						<td class="num">营业执照注册号：</td>
						<td class="inp">
							<input type="text" value="<?php echo $data['license'];?>" name="license">
						</td>
					</tr>
					<tr>
						<td class="pic">上传执照图片：</td>
						<td class="pic_inp">
							<input type="file" name="upload">(图片大小不超过 1024 KB,允许格式：jpg/gif/bmp/png)
						</td>
					</tr>
					<tr>
						<td></td>
						<td class="sub">
							<input type="submit" value="上传">
						</td>
					</tr>
					<tr>
						<td class="txt_tit">营业执照图片：</td>
						<td class="txt_pic" valign="top">
							<div>
								<a href="">
									<img src="http://localhost/myjob/<?php echo $data['licensepic'];?>" alt="" width="200" height="100">
								</a>
							</div>
						</td>
					</tr>
					<?php }?>
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
			  	<img src="http://localhost/myjob/./Myjob/Myjob/Company/Tpl/Public/images/pic.gif" alt="" />
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
	<!-- 返回顶部开始 -->
<div class="backtop_box">
	<a href="javascript:vido(0)" class="backtop"></a>
</div>
<!-- 返回顶部结束 -->