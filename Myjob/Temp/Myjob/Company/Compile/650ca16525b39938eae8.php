<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>后盾招聘登陆-教学项目</title>
	<!-- 载入公共头部 -->
<link rel="stylesheet" type="text/css" href="http://localhost/myjob/Static/Css/style.css">
<link rel="stylesheet" type="text/css" href="http://localhost/myjob/Static/Css/common.css">
<link rel="stylesheet" type="text/css" href="http://localhost/myjob/./Myjob/Myjob/Company/Tpl/Public/Css/member-common-left.css">
<link rel="stylesheet" type="text/css" href="http://localhost/myjob/./Myjob/Myjob/Company/Tpl/Public/Css/basics.css">
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
				<h1>企业基本信息</h1>
			</div>
		 	<form action="" method="post">
		 		<table class="edit_table">
		 			<tr>
		 				<td class="name">
		 					<span>*</span>
		 					公司名称：
		 				</td>
		 				<td>
		 					<input class="user_input" type="text" value="<?php echo $data['companyname'];?>" name="companyname">
		 				</td>
		 			</tr>
		 			<tr>
		 				<td class="name">
		 					<span>*</span>
		 					企业性质：
		 				</td>
		 				<td>
		 						<select name="nature">
		 							<option value="0">请选择</option>
		 							<option value="1" <?php if($data['nature'] == '民营'){?> selected="selected"<?php }?>>民营</option>
		 							<option value="2" <?php if($data['nature'] == '国企'){?> selected="selected"<?php }?>>国企</option>
		 							<option value="3" <?php if($data['nature'] == '合资'){?> selected="selected"<?php }?>>合资</option>
		 							<option value="4" <?php if($data['nature'] == '外商独资'){?> selected="selected"<?php }?>>外商独资</option>
		 							<option value="5" <?php if($data['nature'] == '股份制'){?> selected="selected"<?php }?>>股份制</option>
		 							<option value="6" <?php if($data['nature'] == '上市公司'){?> selected="selected"<?php }?>>上市公司</option>
		 							<option value="7" <?php if($data['nature'] == '国家机关'){?> selected="selected"<?php }?>>国家机关</option>
		 							<option value="8" <?php if($data['nature'] == '事业单位'){?> selected="selected"<?php }?>>事业单位</option>
		 							<option value="9" <?php if($data['nature'] == '其他'){?> selected="selected"<?php }?>>其他</option>
		 						</select>	
		 				</td>
		 			</tr>
					
		 			<tr>
		 				<td class="name">
		 					<span>*</span>
		 					所在地区：
		 				</td>
		 				<td class="area">
		 					<select class="sel" name="city_one">
		 						<option value="0">请选择</option>
		 						<?php if(is_array($topCity)):?><?php  foreach($topCity as $v){ ?>
		 							<option value="<?php echo $v['cityid'];?>" <?php if($data['first_cityid'] == $v['cityid']){?> selected="selected"<?php }?>><?php echo $v['cityname'];?></option>
		 						<?php }?><?php endif;?>
		 					</select>
		 					<select class="sel" name="city_second">
		 						<?php if(is_array($sonCity)):?><?php  foreach($sonCity as $v){ ?>
		 						<option value="<?php echo $v['cityid'];?>" <?php if($data['second_cityid'] == $v['cityid']){?> selected="selected"<?php }?>><?php echo $v['cityname'];?></option>
		 						<?php }?><?php endif;?>
		 					</select>	
		 				</td>
		 			</tr>
		 			<tr>
		 				<td class="name">
		 					<span>*</span>
		 					公司规模：
		 				</td>
		 				<td>
	 						<select name="scale">
	 							<option value="0">请选择</option>
	 							<option value="1" <?php if($data['scale'] == '20人以下'){?> selected="selected"<?php }?>>20人以下</option>
	 							<option value="2" <?php if($data['scale'] == '20-99人'){?> selected="selected"<?php }?>>20-99人</option>
	 							<option value="3" <?php if($data['scale'] == '100-499人'){?> selected="selected"<?php }?>>100-499人</option>
	 							<option value="4" <?php if($data['scale'] == '500-999人'){?> selected="selected"<?php }?>>500-999人</option>
	 							<option value="5" <?php if($data['scale'] == '1000-9999人'){?> selected="selected"<?php }?>>1000-9999人</option>
	 							<option value="6" <?php if($data['scale'] == '10000人以上'){?> selected="selected"<?php }?>>10000人以上</option>
	 						</select>
		 				</td>
		 			</tr>
		 			<tr>
		 				<td class="name">
		 					注册资金：
		 				</td>
		 				<td class="area">
		 					<input class="user_input w_80" type="text" value="<?php echo $data['registermoney'];?>" name="registermoney">
		 					万
		 					<select name="moneytype" class="sel">
	 							<option value="1" <?php if($data['moneytype'] == '人民币'){?> selected="selected"<?php }?>>人民币</option>
	 							<option value="2" <?php if($data['moneytype'] == '美元'){?> selected="selected"<?php }?>>美元</option>
	 							<option value="3" <?php if($data['moneytype'] == '欧元'){?> selected="selected"<?php }?>>欧元</option>
	 							<option value="4" <?php if($data['moneytype'] == '英镑'){?> selected="selected"<?php }?>>英镑</option>
	 						</select>
		 				</td>
		 			</tr>
		 			<tr>
		 				<td class="name">
		 					<span>*</span>
		 					联系人：
		 				</td>
		 				<td>
		 					<input class="user_input w_200" type="text" value="<?php echo $data['companypeople'];?>" name="companypeople">
		 				</td>
		 			</tr>
		 			<tr>
		 				<td class="name">
		 					<span>*</span>
		 					联系电话：
		 				</td>
		 				<td>
		 					<input class="user_input w_200" type="text" value="<?php echo $data['companynumber'];?>" name="companynumber">
		 				</td>
		 			</tr>
		 			<tr>
		 				<td class="name">
		 					<span>*</span>
		 					联系邮箱：
		 				</td>
		 				<td>
		 					<input class="user_input w_200" type="text" value="<?php echo $data['companymail'];?>" name="companymail">
		 				</td>
		 			</tr>
		 			<tr>
		 				<td class="name">
		 					公司网址：
		 				</td>
		 				<td>
		 					<input class="user_input w_200" type="text" value="<?php echo $data['companyurl'];?>" name="companyurl">
		 				</td>
		 			</tr>
		 			<tr>
		 				<td class="name">
		 					通讯地址：
		 				</td>
		 				<td>
		 					<input class="user_input w_447" type="text" value="<?php echo $data['companyaddress'];?>" name="companyaddress">
		 				</td>
		 			</tr>
		 			<tr>
		 				<td class="name" valign="top" align="right">
		 					<span>*</span>
		 					公司简介：
		 				</td>
		 				<td class="area"><textarea name="companyintro"><?php echo $data['companyintro'];?></textarea>		
		 					<br>
		 				</td>
		 			</tr>
		 			<tr>
		 				<td></td>
		 				<td>
		 					<input type="submit" class="sub" value="保存">
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