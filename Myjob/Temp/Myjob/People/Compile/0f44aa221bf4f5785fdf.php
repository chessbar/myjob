<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>后盾招聘创建简历第一步-教学项目</title>
<link rel="stylesheet" type="text/css" href="http://localhost/myjob/Static/Css/style.css">
<link rel="stylesheet" type="text/css" href="http://localhost/myjob/Static/Css/common.css">
<link rel="stylesheet" type="text/css" href="http://localhost/myjob/./Myjob/Myjob/People/Tpl/Public/Css/member-common-left.css">
	<link rel="stylesheet" href="http://localhost/myjob/./Myjob/Myjob/People/Tpl/Public/Css/found.css" />
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
		$(function(){
			//开始时间
			$('#starttime').calendar({format: 'yyyy-MM-dd'}); 
			//结束时间
			$('#endtime').calendar({format: 'yyyy-MM-dd'}); 
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
		<!-- 右边盒子开始 -->
		<div class="right_box">
			<div class="title_box">
				<h1>我的简历</h1>
			</div>
			<div class="one_box">
				<span class="one"> 第四步 - 教育经历</span>
				<span class="two">(带<strong>*</strong>的为必填)</span>
				<?php if(!empty($eduData)){?>
					<span class="yes">提示：您已经填写了工作经历，可以选择跳过这一步或继续添加</span>
				<?php }?>
			</div>
			<?php if(!empty($eduData)){?>
				<table class="resume_center">
					<tr class="resume_edu">
						<td>起止年月</td>
						<td>学校名称</td>
						<td>专业名称</td>
						<td>学历</td>
						<td>编辑</td>
					</tr>
					<?php if(is_array($eduData)):?><?php  foreach($eduData as $v){ ?>
						<tr class="show_edu">
							<td class=""><?php echo date("Y-m-d",$v['starttime'])?>&nbsp到&nbsp<?php echo date("Y-m-d",$v['endtime'])?></td>
							<td><?php echo $v['schoolname'];?></td>
							<td><?php echo $v['skillname'];?></td>
							<td><?php echo $v['edu'];?></td>
							<td>
								<a href="<?php echo U('Resume/make4_update',array('reid'=>$_GET['reid'],'reid4'=>$v['rid4']));?>">编辑</a>
								|
								<a href="<?php echo U('Resume/make4_del',array('reid'=>$_GET['reid'],'reid4'=>$v['rid4']));?>">删除</a>
							</td>
						</tr>
					<?php }?><?php endif;?>
				</table>
			<?php }?>
			<!-- 简历填写内容开始 -->
			<div class="one_con">
				<form action="" method="post" id="make4_form">
					<table>
						<tr class="resume_edu">
							<td class="one_con_left">填加教育经历</td>
							<td></td>
						</tr>
						<tr>
							<td class="one_con_left"><strong>*</strong>开始日期：</td>
							<td>
								<input type="text" readonly="readonly" id="starttime" name="starttime" value="" class="w150"/>
							</td>
						</tr>
						<tr>
							<td class="one_con_left"><strong>*</strong>结束日期：</td>
							<td>
								<input type="text" readonly="readonly" id="endtime" name="endtime" value="" class="w150"/>
							</td>
						</tr>
						<tr>
							<td class="one_con_left"><strong>*</strong>学校名称：</td>
							<td>
								<input type="text" name="schoolname" id="">
							</td>
						</tr>
						<tr>
							<td class="one_con_left"><strong>*</strong>专业名称：</td>
							<td>
								<input type="text" name="skillname" id="">
							</td>
						</tr>
						<tr>
							<td class="one_con_left"><strong>*</strong>选择学历：</td>
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
					</table>

					<input type="submit" value="保存并增加" class="make1_submit">
					<?php if(!empty($eduData)){?>
					<a href="<?php echo U('Resume/make5',array('reid'=>$_GET['reid']));?>" class="make1_submit make_back">跳过这一步</a>
					<?php }?>
					<a href="<?php echo U('Resume/make3_update',array('reid'=>$_GET['reid']));?>" class="make1_submit make_back">返回上一步</a>
					<input type="hidden" name="reid" value="<?php echo $_GET['reid'];?>">
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
