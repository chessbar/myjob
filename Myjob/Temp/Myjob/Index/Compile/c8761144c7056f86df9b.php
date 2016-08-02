<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>后盾招聘-教学项目</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/myjob/Static/Css/style.css" />
	<link rel="stylesheet" type="text/css" href="http://localhost/myjob/Static/Css/common.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/myjob/./Myjob/Myjob/Index/Tpl/Public/Css/index.css">
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
	<script type="text/javascript" src="http://localhost/myjob/./Myjob/Myjob/Index/Tpl/Public/Js/backTop.js"></script>
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
		<a href="<?php echo U('Index/Index/index');?>" class="logo"><img src="http://localhost/myjob/./Myjob/Myjob/Index/Tpl/Public/images/logo_front.png" alt="" /></a>
	</div>
	<!-- 头部结束 -->
	
<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?>	<div class="nav_list">
		<a href="<?php echo U('Index/Index/index');?>" class="one"><span>首  页</span></a>
		<a href="<?php echo U('Category/Invite/index');?>" class="blue"><span>企业招聘</span></a>
		<a href="" class="two"><span>求职信息</span></a>
		<a href="" class="two"><span>会员中心</span></a>
		
		<!-- 右边分享盒子开始 -->
		<div class="share">
			<div class="bshare-custom"><a title="分享到QQ空间" class="bshare-qzone"></a><a title="分享到新浪微博" class="bshare-sinaminiblog"></a><a title="分享到人人网" class="bshare-renren"></a><a title="分享到腾讯微博" class="bshare-qqmb"></a><a title="分享到网易微博" class="bshare-neteasemb"></a><a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a><span class="BSHARE_COUNT bshare-share-count">0</span></div><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh"></script><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
		</div>
		<!-- 右边分享盒子结束 -->
	</div>
<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?>	<div class="search_box">
		<!-- 搜索大盒子左边开始 -->
		<div class="s_left">
			<form action="" method="post">
			<!-- 搜索框盒子 -->
			<div class="keybox">
				<p class="serch_pic"></p>
				<input type="text" vlaue="" maxlength="16" name="keywords"/>
				<div class="label_box">
					<label for="">
						<input type="radio" checked="checked" name="keytype" value="1"/>
						职位
					</label>
					<label for="">
						<input type="radio" name="keytype"  value="2"/>
						公司
					</label>
					<label for="">
						<input type="radio" name="keytype"  value="3"/>
						全文
					</label>
				</div>
			</div>
			<!-- 搜索框盒子 -->
			<!-- 按钮开始 -->
			<div class="btn">
				<input type="submit" value="搜索" />
			</div>
			</form>
			<!-- 按钮结束 -->
			<!-- 搜索框右侧搜索链接开始 -->
			<div class="newlink">
				<a href="">[最新职位]</a>
				<a href="">[最新人才]</a>
			</div>
			<!-- 搜索框右侧搜索链接结束 -->
		</div>
		<!-- 搜索大盒子左边结束 -->
		<!-- 搜索大盒子右边开始 -->
		<div class="s_right">
			<div class="pic">
				<!-- http://shang.qq.com/index.php通过此网站找到代码 -->
				<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=410004417&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:410004417:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>
			</div>		
		</div>
		<!-- 搜索大盒子右边结束 -->
		<!-- 最右深色框 -->
		<div class="right_color">		
		</div>
		<!-- 最后边深色框结束 -->
	</div>
	<!-- 网站信息盒子开始 -->
	<div class="web_info">
		<div class="count_info">
			<span>企业总数：200</span>
			<span>职位总数：222</span>
			<span>简历总数：22</span> 
			<span>会员总数：22</span>   
		</div>

	</div>
	<!-- 网站信息盒子结束 -->
	<!-- 注册登录大盒子开始 -->
	<div class="login_box">
		<!-- 左边大盒子开始 -->
		<div class="left">
			<div class="login">
			
				<!-- <div class="login_div">
						<a href="" class="member_in">进入会员中心</a>
						<span>|</span>
						<a href="" class="loging_out">退出登录</a>
					</div> -->
		
					<a href="<?php echo U('Member/Reg/reg');?>" class="one">免费注册</a>
					<a href="<?php echo U('Member/Login/index');?>" class="one">登录</a>
		
				<a href="" class="two">发布招聘</a>
				<a href="" class="two">填写简历</a>
			</div>
			<div class="tab_box">
				<div class="tab_title">
					<a href="">最新职位</a>
				</div>
				<ul>
					<li>
						<a href="" target="_blank">职位名称</a><span class="num">(2010-1-1)</span><span class="one">&nbsp;&nbsp;聘:</span>
				<a href="" target="_blank">php工程师</a>
					</li>
					
				</ul>
			</div>
		</div>
		<!-- 左边大盒子结束 -->
		<!-- 轮换版区域盒子 -->
		<!-- 需要hdjs支持 -->
		<script type="text/javascript">
			$(function(){
				$('#flash').slide({
					width : 442,
					height:274,
					timeout : 3,
					bgcolor:'#ffffff'
				})
			})
			
		</script>
		<div class="center">
			<div class="rotation_box" id="flash">
				<a href=""><img src="http://localhost/myjob/./Myjob/Myjob/Index/Tpl/Public/images/big1.jpg" alt="" /></a>
				<!-- <a href=""><img src="./images/big3.jpg" alt="" /></a> -->
			</div>
		</div>
		<!-- 轮换版区域盒子结束 -->
		<div class="newresume">
			<div class="tit">
				<span>最新简历</span>
			</div>
			<ul>
				<li><a href="" target="_blank">马先生</a>&nbsp;男&nbsp;初中&nbsp;&nbsp;<span style="color: #2D9900;">求职意向:&nbsp;</span>php工程师</li>
			

			</ul>
		</div>
	</div>
	<!-- 注册登录大盒子结束 -->
	<!-- 广告大盒子开始 -->
	<div class="ad_box">
		<div class="list">
			<div class="imgbox">
				<a href="" target="_blank"><img src="http://localhost/myjob/./Myjob/Myjob/Index/Tpl/Public/Images/shopex.jpg" alt="" /></a>
			</div>
			<div class="link">
				<a href="" target="_blank">上海某公司</a>
			</div>
		</div>
		<div class="list">
			<div class="imgbox">
				<a href="" target="_blank"><img src="http://localhost/myjob/./Myjob/Myjob/Index/Tpl/Public/Images/shopex.jpg" alt="" /></a>
			</div>
			<div class="link">
				<a href="" target="_blank">上海某公司</a>
			</div>
		</div>
		<div class="list">
			<div class="imgbox">
				<a href="" target="_blank"><img src="http://localhost/myjob/./Myjob/Myjob/Index/Tpl/Public/Images/shopex.jpg" alt="" /></a>
			</div>
			<div class="link">
				<a href="" target="_blank">上海某公司</a>
			</div>
		</div>
		<div class="list">
			<div class="imgbox">
				<a href="" target="_blank"><img src="http://localhost/myjob/./Myjob/Myjob/Index/Tpl/Public/Images/shopex.jpg" alt="" /></a>
			</div>
			<div class="link">
				<a href="" target="_blank">上海某公司</a>
			</div>
		</div>
		<div class="list">
			<div class="imgbox">
				<a href="" target="_blank"><img src="http://localhost/myjob/./Myjob/Myjob/Index/Tpl/Public/Images/shopex.jpg" alt="" /></a>
			</div>
			<div class="link">
				<a href="" target="_blank">上海某公司</a>
			</div>
		</div>
		<div class="list">
			<div class="imgbox">
				<a href="" target="_blank"><img src="http://localhost/myjob/./Myjob/Myjob/Index/Tpl/Public/Images/shopex.jpg" alt="" /></a>
			</div>
			<div class="link">
				<a href="" target="_blank">上海某公司</a>
			</div>
		</div>
	</div>
	<!-- 广告大盒子结束 -->

	<!-- 最新php职位开始 -->
	<div class="new_php">
		<div class="title">
			<a href="" class="left">最新PHP职位</a>
			<a href="" class="right">更多...</a>
		</div>

		<div class="list_public">
			<a href="">上海商派网络科技有限公司</a><span class="num">(14-02)</span><br />
			<span class="one">聘:</span><span class="link_bk">
				<a href="">php工程师</a>
			</span>			
		</div>
		<div class="list_public">
			<a href="">上海商派网络科技有限公司</a><span class="num">(14-02)</span><br />
			<span class="one">聘:</span><span class="link_bk">
				<a href="">php工程师</a>
			</span>			
		</div>
		<div class="list_public">
			<a href="">上海商派网络科技有限公司</a><span class="num">(14-02)</span><br />
			<span class="one">聘:</span><span class="link_bk">
				<a href="">php工程师</a>
			</span>			
		</div>
		<div class="list_public">
			<a href="">上海商派网络科技有限公司</a><span class="num">(14-02)</span><br />
			<span class="one">聘:</span><span class="link_bk">
				<a href="">php工程师</a>
			</span>			
		</div>
		<div class="list_public">
			<a href="">上海商派网络科技有限公司</a><span class="num">(14-02)</span><br />
			<span class="one">聘:</span><span class="link_bk">
				<a href="">php工程师</a>
			</span>			
		</div>
		<div class="list_public">
			<a href="">上海商派网络科技有限公司</a><span class="num">(14-02)</span><br />
			<span class="one">聘:</span><span class="link_bk">
				<a href="">php工程师</a>
			</span>			
		</div>
		<div class="list_public">
			<a href="">上海商派网络科技有限公司</a><span class="num">(14-02)</span><br />
			<span class="one">聘:</span><span class="link_bk">
				<a href="">php工程师</a>
			</span>			
		</div>
		<div class="list_public">
			<a href="">上海商派网络科技有限公司</a><span class="num">(14-02)</span><br />
			<span class="one">聘:</span><span class="link_bk">
				<a href="">php工程师</a>
			</span>			
		</div>
		<div class="list_public">
			<a href="">上海商派网络科技有限公司</a><span class="num">(14-02)</span><br />
			<span class="one">聘:</span><span class="link_bk">
				<a href="">php工程师</a>
			</span>			
		</div>
		<div class="list_public">
			<a href="">上海商派网络科技有限公司</a><span class="num">(14-02)</span><br />
			<span class="one">聘:</span><span class="link_bk">
				<a href="">php工程师</a>
			</span>			
		</div>
		<div class="list_public">
			<a href="">上海商派网络科技有限公司</a><span class="num">(14-02)</span><br />
			<span class="one">聘:</span><span class="link_bk">
				<a href="">php工程师</a>
			</span>			
		</div>
		<div class="list_public">
			<a href="">上海商派网络科技有限公司</a><span class="num">(14-02)</span><br />
			<span class="one">聘:</span><span class="link_bk">
				<a href="">php工程师</a>
			</span>			
		</div>

	</div>
	<!-- 最新php职位结束 -->

	<!-- php技巧大盒子开始 -->
	<div class="skill">
		<div class="link">
			<strong>友情链接：</strong>
			
				<a href="" target="_blank"></a>
				
				<a href="" class="last">[申请友情连接]</a>
		</div>
	</div>
	<!-- php技巧大盒子结束 -->

	<!-- 页脚开始 -->
	<!-- 页脚开始 -->
	<div class="footer">
		<!-- 设为首页 -->
		<div class="set">
			<a href="">网站首页</a>
			 | 
			<a href="">关于我们</a>
			 | 
			<a href="">免责声明</a>
			 | 
			<a href="">隐私声明</a>
			 | 
			<a href="">广告服务</a>
			 | 
			<a href="">帮助中心</a>
		</div>
		<!-- 设为首页结束 -->
		<!-- 欢迎加入php群开始 -->
		<div class="wec">
			 欢迎加入PHP交流群 
			 410004417
			  网站备案：<a href="" class="yue">京ICP备*******号-* </a>
			
			  <a href="">
			  	<img src="http://localhost/myjob/./Myjob/Myjob/Index/Tpl/Public/images/pic.gif" alt="" />
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
