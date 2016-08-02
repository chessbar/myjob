<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>后盾招聘创建简历第一步-教学项目</title>
<link rel="stylesheet" type="text/css" href="http://localhost/myjob/Static/Css/style.css">
<link rel="stylesheet" type="text/css" href="http://localhost/myjob/Static/Css/common.css">
<link rel="stylesheet" type="text/css" href="http://localhost/myjob/./Myjob/Myjob/People/Tpl/Public/Css/member-common-left.css">
<link rel="stylesheet" type="text/css" href="http://localhost/myjob/./Myjob/Myjob/People/Tpl/Public/Css/preview.css">
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
		<!-- 右边大盒子开始 -->	
		<div class="people_right">
			<div class="right_title">
				<h1>
					预览简历 - 
					<span></span>
				</h1>
			</div>
			<div class="tit">基本设置</div>
			<div class="set_con">
				<ul>
					<li>
						简历名称：<?php echo $data['resumename'];?>
						<a href="<?php echo U('private_set',array('reid'=>$_GET['reid']));?>">[设置隐私]</a>
					</li>
					<li class="list">
						简历公开：<?php echo $data['publicstate'];?>
						<a href="">[修改]</a>   
					</li>
					<li>
						姓名：<?php echo $data['realname'];?>
					</li>
					<li class="list">
						简历审核状态：<?php echo $data['verifystate'];?>							
					</li>
					<li>
					 简历完整度：<?php echo $data['propress'];?>% 	
					 <span>(完整指数小于60%的简历系统将视为无效简历)</span>		  
					</li>
					<li class="list">
						照片审核状态：<?php echo $data['facevalidate'];?>
					</li>
					<li>
					 有效日期：<?php echo $data['totime'];?>
						<a href="">[延长]</a>
					</li>
						<li class="list">
							照片公开状态：<?php echo $data['facepublic'];?> <a href="">[设置]</a>
						</li>
					<li>
					创建时间：<?php echo date('Y-m-d H:i:s',$data['sendtime']);?>  			  
					</li>
					<li class="list">
					刷新时间：<?php echo date('Y-m-d H:i:s',$data['freshtime']);?>  
					 <a href="">[刷新]</a>
					</li>
					<li>
					 	浏览次数：<?php echo $data['click'];?>次
					</li>
				</ul>
			</div>
			<div class="tit">
				基本信息
				<a href="" class="edit_sub">
					<img src="http://localhost/myjob/./Myjob/Myjob/People/Tpl/Public/Images/33.gif" alt="">
				</a>
			</div>
			<!-- 基本信息盒子开始 -->
			<div class="info">
				<ul>
					<li>姓名：<?php echo $data['realname'];?></li>
					<li>性别：<?php echo $data['sex'];?></li>
					<li>年龄：<?php echo $data['age'];?>岁</li>
					<li>身高：<?php echo $data['height'];?>CM</li>
					<li>学历：<?php echo $data['realname'];?></li>
					<li>婚姻状况：<?php echo $data['marrystate'];?></li>
					<li>工作经验：<?php echo $data['workyear'];?></li>
					<li>户口所在地：<?php echo $data['household'];?></li>
					<li>联系电话：<?php echo $data['phonenumber'];?></li>
					<li>电子邮箱：<?php echo $data['mail'];?></li>
					<li>通讯 Q Q：<?php echo $data['qq'];?></li>
					<li>通讯地址：<?php echo $data['address'];?></li>
					<li>个人主页/博客：<?php echo $data['homepage'];?></li>
				</ul>

				<div class="pic">
				<?php if($data['face']){?>
				<img src="http://localhost/myjob/<?php echo $data['face'];?>" alt="">
				<?php  }else{ ?>
				<img src="http://localhost/myjob/./Myjob/Myjob/People/Tpl/Public/Images/no_photo.gif" alt="">
				<?php }?>
				</div>

				<a href="<?php echo U('Resume/make7',array('reid'=>$_GET['reid']));?>" class="edit_pic">修改照片</a>
			</div>
			<!-- 基本信息盒子结束 -->
			<!-- 求职意向盒子开始 -->
			<div class="tit">
				求职意向
				<a href="" class="edit_sub">
					<img src="./Images/33.gif" alt="">
				</a>
			</div>
			<div class="purpose">
				<ul>
					<li>最近工作过的职位：<?php echo $data['resume2Data']['workplace'];?></li>
					<li>期望岗位性质：<?php echo $data['resume2Data']['quality'];?></li>
					<li>期望工作地：<?php echo $data['resume2Data']['total_citynme'];?></li>
					<li>期望月薪：<?php echo $data['resume2Data']['salary'];?></li>
					<li>期望从事的岗位：<?php echo $data['resume2Data']['posname'];?></li>
				</ul>
				<!-- <ul>
					<li>您没有填写求职意向。</li>
				</ul> -->

			</div>
			<!-- 求职意向盒子结束 -->
			<!-- 技能特长盒子开始 -->
			<div class="tit">
				技能特长
				<a href="" class="edit_sub">
					<img src="./Images/33.gif" alt="">
				</a>
			</div>
			<div class="skill">
				<ul>
					<div>
						<?php echo $data['resume3Data'];?>
					</div>
				</ul>
				<!-- <ul>
					<li>您没有填写技能特长。</li>
				</ul> -->
			</div>
			<!-- 技能特长盒子结束 -->
			<!-- 教育经历开始 -->
			<div class="tit">
				教育经历
				<a href="" class="edit_sub">
					<img src="./Images/33.gif" alt="">
				</a>
			</div>
			<?php if($data['resume4Data']){?>
			<table  cellpadding="5" cellspacing="1">
			<tr>
				<td class="time">起止年月</td>
				<td>学校名称</td>
				<td>专业名称</td>
				<td>学历</td>
				<td>编辑</td>
			</tr>
			<?php if(is_array($data['resume4Data'])):?><?php  foreach($data['resume4Data'] as $v){ ?>
			<tr class="no_bor">
				<td><?php echo $v['starttime'];?>至<?php echo $v['endtime'];?></td>
				<td><?php echo $v['schoolname'];?></td>
				<td><?php echo $v['skillname'];?></td>
				<td><?php echo $v['edu'];?></td>
				<td>
					<a href="<?php echo U('Resume/make4_update',array('reid'=>$data['rid'],'reid4'=>$v['rid4']));?>" >修改</a>
					  |  
					<a href="<?php echo U('Resume/make4_del',array('reid'=>$data['rid'],'reid4'=>$v['rid4']));?>">删除</a>
				</td>
			</tr>
			<?php }?><?php endif;?>
			</table>
			<?php  }else{ ?>
			<ul>
				<li>您没有填写技能特长。</li>
			</ul>
			<?php }?>
			<!-- 教育经历结束 -->
			<!-- 工作经历开始 -->
			<div class="tit" style="border-top:1px solid #C9D9E7">
				工作经历
				<a href="" class="edit_sub">
					<img src="./Images/33.gif" alt="">
				</a>
			</div>
			<?php if($data['resume5Data']){?>
				<table  cellpadding="5" cellspacing="1">
					<tr>
						<td class="time">起止年月</td>
						<td>公司名称</td>
						<td>职位名称</td>
						<td>编辑</td>
					</tr>
					<?php if(is_array($data['resume5Data'])):?><?php  foreach($data['resume5Data'] as $v){ ?>
					<tr class="no_bor">
						<td><?php echo $v['starttime'];?>至<?php echo $v['endtime'];?></td>
						<td><?php echo $v['companyname'];?></td>
						<td><?php echo $v['job'];?></td>
						<td>
							<a href="<?php echo U('Resume/make5_update',array('reid'=>$data['rid'],'reid5'=>$v['rid5']));?>" >修改</a>
							  |  
							<a href="<?php echo U('Resume/make5_del',array('reid'=>$data['rid'],'reid5'=>$v['rid5']));?>">删除</a>
						</td>
					</tr>
					<?php }?><?php endif;?>
				</table>
				<?php  }else{ ?>
				<ul>
					<li>您没有填写工作经历。</li>
				</ul>
				<?php }?>
			<!-- 工作经历结束 -->
			<!-- 培训经历开始 -->
			<div class="tit" style="border-top:1px solid #C9D9E7">
				培训经历
				<a href="<?php echo U('People/Resume/make6', array('reid'=>$data['reid']));?>" class="edit_sub">
					<img src="./Images/33.gif" alt="">
				</a>
			</div>
				<?php if($data['resume6Data']){?>
				<table  cellpadding="5" cellspacing="1">
					<tr>
						<td class="time">起止年月</td>
						<td>机构名称</td>
						<td>培训课程</td>
						<td>编辑</td>
					</tr>

						<?php if(is_array($data['resume6Data'])):?><?php  foreach($data['resume6Data'] as $v){ ?>
					<tr class="no_bor">
						<td><?php echo $v['starttime'];?>至<?php echo $v['endtime'];?></td>
						<td><?php echo $v['organ'];?></td>
						<td><?php echo $v['classname'];?></td>
						<td>
							<a href="<?php echo U('Resume/make6_update',array('reid'=>$data['rid'],'reid6'=>$v['rid6']));?>" >修改</a>
							  |  
							<a href="<?php echo U('Resume/make6_del',array('reid'=>$data['rid'],'reid6'=>$v['rid6']));?>">删除</a>
						</td>
					</tr>
					<?php }?><?php endif;?>

				</table>
				<?php  }else{ ?>
				<ul>
					<li>您没有填写培训经历。</li>
				</ul>
				<?php }?>
			<!-- 培训经历结束 -->
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