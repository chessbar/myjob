<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>后盾招聘创建简历第一步-教学项目</title>
<link rel="stylesheet" type="text/css" href="http://localhost/myjob/Static/Css/style.css">
<link rel="stylesheet" type="text/css" href="http://localhost/myjob/Static/Css/common.css">
<link rel="stylesheet" type="text/css" href="http://localhost/myjob/./Myjob/Myjob/People/Tpl/Public/Css/member-common-left.css">
	<link rel="stylesheet" href="http://localhost/myjob/./Myjob/Myjob/People/Tpl/Public/Css/found.css" />
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
		<!-- 右边盒子开始 -->
		<div class="right_box">
			<div class="title_box">
				<h1>我的简历</h1>
			</div>
			<div class="one_box">
				<span class="one">第一步 - 创建基本信息</span>
				<span class="two">
				(带
				<strong>*</strong>
				的为必填)
				</span>
			</div>
			<!-- 简历填写内容开始 -->
			<div class="one_con">
				<form action="" method="post" id="make1_form">
					<table>
						<tr>
							<td class="one_con_left"><strong>*</strong>简历名称：</td>
							<td><input maxlength="80" value="" name="resumename">&nbsp;</td>
						</tr>
						<tr>
							<td class="one_con_left">简历有效时间：</td>
							<td><input maxlength="3" value="60" name="validtime">&nbsp;</td>
						</tr>
						<tr>
							<td class="one_con_left"><strong>*</strong>真实姓名：</td>
							<td><input maxlength="10" value="" name="realname"></td>
						</tr>
						<tr>
							<td class="one_con_left">性别：</td>
							<td>
								<input type="radio" checked="checked" name="sex" class="resume_radio" value="1">男
								<input type="radio" name="sex" class="resume_radio" value="2">女
							</td>
						</tr>
						<tr>
							<td class="one_con_left"><strong>*</strong>年龄：</td>
							<td><input maxlength="6" value="" name="age">&nbsp;</td>
						</tr>
						<tr>
							<td class="one_con_left">身高：</td>
							<td><input maxlength="6" name="height">&nbsp;</td>
						</tr>
						<tr>
							<td class="one_con_left">婚姻状况：</td>
							<td>
								<input type="radio" checked="checked" name="marrystate" class="resume_radio" value="1">未婚
								<input type="radio" name="marrystate" class="resume_radio" value="2">已婚
								<input type="radio" name="marrystate" class="resume_radio" value="3">保密
							</td>
						</tr>
						<tr>
							<td class="one_con_left"><strong>*</strong>工作经验：</td>
							<td>
								<select name="workyear" class="select_box">
									<option value="0">请选择工作经验</option>
									<option value="1">无经验</option>
									<option value="2">1年以下</option>
									<option value="3">1-3年</option>
									<option value="4">3-5年</option>
									<option value="5">5-10年</option>
									<option value="6">10年以上</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="one_con_left"><strong>*</strong>户口所在地：</td>
							<td>
								<input type="text" name="household" id="" />
							</td>
						</tr>
						<tr>
							<td class="one_con_left"><strong>*</strong>学历：</td>
							<td>
								<select name="edu" class="select_box">
									<option value="0">请选择学历</option>
									<option value="1">初中</option>
									<option value="2">高中</option>
									<option value="3">中技</option>
									<option value="4">中专</option>
									<option value="5">大专</option>
									<option value="6">本科</option>
									<option value="7">硕士</option>
									<option value="8">博士</option>
									<option value="9">博后</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="one_con_left"><strong>*</strong>手机号码：</td>
							<td><input maxlength="60" value="" name="phonenumber">&nbsp;</td>
						</tr>
						<tr>
							<td class="one_con_left"><strong>*</strong>电子邮箱：</td>
							<td>
								<input maxlength="60" value="" name="mail">
							</td>
						</tr>
						<tr>
							<td class="one_con_left"><strong>*</strong>通讯地址：</td>
							<td>
								<input maxlength="150" value="" name="address">
							</td>
						</tr>
						<tr>
							<td class="one_con_left">联系 Q Q：</td>
							<td><input maxlength="15" value="" name="qq"></td>
						</tr>
						<tr>
							<td class="one_con_left">个人主页/博客：</td>
							<td><input maxlength="50" value="" name="homepage"></td>
						</tr>
					</table>
					<input type="submit" value="保存并跳到下一步" class="make1_submit">
				</form>
			</div>
			<!-- 简历填写内容结束 -->
<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?>			<!-- 简历完成状态盒子开始 -->
			<div class="state_box">
				<ul>
					<li class="none">
						简历完成状态
					</li>
					<li class="one">
						<div class="progress">
							<div style="width:<?php echo $propress;?>%;background-color:#99CC00; height:8px;left:0;top0;position:absolute"> </div>
						</div>
						<?php echo $propress;?>%
					</li>
					<li class="one two">
						<a href="">显示简历所有内容</a>
					</li><!--class="fullstatus"-->
					<li <?php if(METHOD == 'make1'||METHOD == 'make1_update'){?> class="on"<?php }?> <?php if(in_array(1,$stepArr)){?> class="fullstatus"<?php }?>>
						<a href="<?php echo U('Resume/make1',array('reid'=>$_GET['reid']));?>">基本信息</a>
					</li>
					<li <?php if(METHOD == 'make2'||METHOD == 'make2_update'){?> class="on"<?php }?> <?php if(in_array(2,$stepArr)){?> class="fullstatus"<?php }?>>
						<a href="<?php echo U('Resume/make2',array('reid'=>$_GET['reid']));?>">求职意向</a>
					</li>
					<li <?php if(METHOD == 'make3'||METHOD == 'make3_update'){?> class="on"<?php }?> <?php if(in_array(3,$stepArr)){?> class="fullstatus"<?php }?>>
						<a href="<?php echo U('Resume/make3',array('reid'=>$_GET['reid']));?>">技能特长</a>
					</li>
					<li <?php if(METHOD == 'make4'||METHOD == 'make4_update'){?> class="on"<?php }?> <?php if(in_array(4,$stepArr)){?> class="fullstatus"<?php }?>>
						<a href="<?php echo U('Resume/make4',array('reid'=>$_GET['reid']));?>">教育经历</a>
					</li>
					<li <?php if(METHOD == 'make5'||METHOD == 'make5_update'){?> class="on"<?php }?> <?php if(in_array(5,$stepArr)){?> class="fullstatus"<?php }?>>
						<a href="<?php echo U('Resume/make5',array('reid'=>$_GET['reid']));?>">工作经历</a>
					</li>
					<li <?php if(METHOD == 'make6'||METHOD == 'make6_update'){?> class="on"<?php }?> <?php if(in_array(6,$stepArr)){?> class="fullstatus"<?php }?>>
						<a href="<?php echo U('Resume/make6',array('reid'=>$_GET['reid']));?>">培训经历</a>
					</li>
					<li <?php if(METHOD == 'make7'){?> class="on"<?php }?> <?php if(in_array(7,$stepArr)){?> class="fullstatus"<?php }?>>
						<a href="<?php echo U('Resume/make7',array('reid'=>$_GET['reid']));?>">形象照片</a>
					</li>
				</ul>
			</div>
			<!-- 简历完成状态盒子结束 -->
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