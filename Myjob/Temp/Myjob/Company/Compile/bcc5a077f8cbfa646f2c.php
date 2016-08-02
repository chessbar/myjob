<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>后盾招聘登陆-教学项目</title>
	<!-- 载入公共头部 -->
<link rel="stylesheet" type="text/css" href="http://localhost/myjob/Static/Css/style.css">
<link rel="stylesheet" type="text/css" href="http://localhost/myjob/Static/Css/common.css">
<link rel="stylesheet" type="text/css" href="http://localhost/myjob/./Myjob/Myjob/Company/Tpl/Public/Css/member-common-left.css">
<link rel="stylesheet" type="text/css" href="http://localhost/myjob/./Myjob/Myjob/Company/Tpl/Public/Css/company-index-index.css">
<link rel="stylesheet" type="text/css" href="http://localhost/myjob/./Myjob/Myjob/Company/Tpl/Public/Css/company-composition-publish.css">
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
	<script type="text/javascript" src="http://localhost/myjob/Static/Js/ajax_city.js"></script>
	<script type="text/javascript" src="http://localhost/myjob/Static/Js/ajax_pos.js"></script>
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
				<h1>发布普通职位</h1>
			</div>
			<form action="<?php echo U('send_pos');?>" method="post">
				<table>
					<tr>
						<td class="name">
							<span>*</span>
							职位名称：
						</td>
						<td><input type="text" class="user_input w_350" name="positionname"></td>
					</tr>
					<tr>
						<td class="name">
							<span>*</span>
							性别要求：
						</td>
						<td>
							<label>
								<input type="radio" checked="checked" name="sex" value="0">
								不限
							</label>
							<label>
								<input type="radio" name="sex" value="1">
								男
							</label>
							<label>
								<input type="radio" name="sex" value="2">
								女
							</label>
						</td>
					</tr>
					<tr>
						<td class="name">
							<span>*</span>
							职位性质：
						</td>
						<td>
							<label>
								<input type="radio" checked="checked" name="quality" value="1">
								全职
							</label>
							<label>
								<input type="radio" name="quality" value="2">
								兼职
							</label>
							<label>
								<input type="radio" name="quality" value="3">
								实习
							</label>
						</td>
					</tr>
					<tr>
						<td class="name">
							<span>*</span>
							招聘人数：
						</td>
						<td>
							<input type="text" class="user_input w_200" name="invitenum" value="1">
							人
						</td>
					</tr>
					<tr>
						<td class="name">
							<span>*</span>
							有效时间：
						</td>
						<td>
							<input type="text" class="user_input w_200" value="30" name="validtime">
							天
						</td>
					</tr>
					<tr>
						<td class="name">
							<span>*</span>
							 职位类别：
						</td>
						<td>	
							<select class="sel_little" name="pos_one">
								<option value="0">请选择</option>
								<?php if(is_array($topPos)):?><?php  foreach($topPos as $v){ ?>
									<option value="<?php echo $v['posid'];?>"><?php echo $v['posname'];?></option>
								<?php }?><?php endif;?>
							</select>
							<select class="sel_little" name="pos_second">
								<option value="0">请选择</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="name">
							<span>*</span>
							 工作地区：
						</td>
						<td class="area">
							<select class="sel" name="city_one">
								<option value="0">请选择</option>
									<?php if(is_array($topCity)):?><?php  foreach($topCity as $v){ ?>
										<option value="<?php echo $v['cityid'];?>"><?php echo $v['cityname'];?></option>
									<?php }?><?php endif;?>
							</select>
							<select class="sel" name="city_second">
								<option value="0">请选择</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="name">
							学历要求：
						</td>
						<td>
							<select class="sel" name="edu">
								<option value="1">不限制</option>
								<option value="2">初中</option>
								<option value="3">高中</option>
								<option value="4">中技</option>
								<option value="5">中专</option>
								<option value="6">大专</option>
								<option value="7">本科</option>
								<option value="8">硕士</option>
								<option value="9">博士</option>
								<option value="10">博后</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="name">
							 工作经验：
						</td>
						<td>
							<select class="sel" name="workyear">
								<option value="1">不限制</option>
								<option value="2">无经验</option>
								<option value="3">1年以下</option>
								<option value="4">1-3年</option>
								<option value="5">3-5年</option>
								<option value="6">5-10年</option>
								<option value="7">10年以上</option>
							</select>
						</td>
					</tr>
						<tr>
						<td class="name">
						<span>*</span>	
							 月薪范围：
						</td>
						<td>
							<select class="sel" name="salary">
									<option value="0">请选择</option>
									<option value="1">面议</option>
									<option value="2">1000-1500元/月</option>
									<option value="3">1500-2000元/月</option>
									<option value="4">2000-3000元/月</option>
									<option value="5">3000-5000元/月</option>
									<option value="6">5000-10000元/月</option>
									<option value="7">1万以上/月</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="name" valign="top">
							<span>*</span>
							职位描述：
						</td>
						<td class="tex">
							<textarea class="user_input_textarea" name="description"></textarea>
							<br>
							<div class="tit">
								<span class="check">[查看范例]</span>
								   说明：请详细描述该职位，内容可包括：职位要求，岗位职责等。
							</div>
						</td>	
					</tr>
					<tr class="cp" style="display:table-row; display:none">
						<td class="exa">
							<strong>范例：</strong>
						</td>
						<td>
							<strong>岗位职责：</strong>
							<br>
							        1、负责公司系统经营结构调整、新增投资与合作项目策划、现有投资项目调整以及投资管理等工作； 
							 <br>
							         2、主持制定公司投资项目总体发展规划，系统分析投资项目内外部经营风险，指导风险防范体系的建立。 
							  <br>       
							  <strong>任职要求： </strong>
							  <br>
							         1、经济管理、投资管理、工商管理及技术经济等专业硕士及以上学历； 
							  <br>
							         2、熟悉相关法律法规及投资项目实施、资产重组和处置过程的评估方法； 
							  <br>
							         3、具有较强的沟通及组织协调能力、学习能力及较强的团队合作精神； 
							   <br>
							          4、5 年及以上大型企业投资管理经验，熟悉资本运作； 
							   <br>
							        5、英语听说读写熟练。
						</td>
					</tr>
					<tr>
						<td class="name">
							<span>*</span>	
							应届生应聘：
						</td>
						<td>
							<label>
								<input type="radio" checked="checked" name="freshstu" value="0">
								不允许
							</label>
							<label>
								<input type="radio" name="freshstu" value="1">
								允许
							</label>
					
						</td>
					</tr>
					<tr>
						<td class="name">
							<span>*</span>	
							每周休息：
						</td>
						<td>
							<label>
								<input type="radio" checked="checked" name="weekrest" value="0">
								不确定
							</label>
							<label>
								<input type="radio" name="weekrest" value="1">
								单休
							</label>
							<label>
								<input type="radio" name="weekrest" value="2">
								双休
							</label>
						</td>
					</tr>
					<tr>
						<td class="name">
							<span>*</span>	
							缴纳保险：
						</td>
						<td>
							<label>
								<input type="radio" checked="checked" name="insure" value="0">
								不确定
							</label>
							<label>
								<input type="radio" name="insure" value="1">
								五险
							</label>
							<label>
								<input type="radio" name="insure" value="2">
								五险一金
							</label>
						</td>
					</tr>
					
					<tr>
		 				<td></td>
		 				<td>
		 					<input type="submit" class="sub" value="确定发布">
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