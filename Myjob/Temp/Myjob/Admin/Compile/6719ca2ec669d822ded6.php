<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title>后盾招聘教学 - 后台管理中心</title>
    <hdjs/>
    <script type="text/javascript" src="http://localhost/myjob/./Myjob/Myjob/Admin/Tpl/Public/js/menu.js"></script>
    <script type="text/javascript" src="http://localhost/myjob/./Myjob/Myjob/Admin/Tpl/Public/js/quick_menu.js"></script>
    <link rel="stylesheet" type="text/css" href="http://localhost/myjob/./Myjob/Myjob/Admin/Tpl/Public/Css/css.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/myjob/./Myjob/Myjob/Admin/Tpl/Public/Css/quick_menu.css">
</head>
<body>
<div class="nav">
    <!--头部左侧导航-->
    <div class="top_menu">
        <list from="$top_menu" name="m">
            <a href="javascript:" nid="<?php echo $m['nid'];?>" onclick="get_left_menu(<?php echo $m['nid'];?>);" class="top_menu"><?php echo $m['title'];?></a>
        </list>
    </div>
    <!--头部左侧导航-->
    <!--头部右侧导航-->
    <div class="r_menu">
        <a href="" target="_self">[退出]</a><span>|</span>
        <span>|</span>
        <a href="" target="_blank">前台首页</a>
    </div>
    <!--头部右侧导航-->
</div>
<!--左侧导航-->
<div class="main">
    <!--主体左侧导航-->
    <div class="left_menu">
        <div class="nid_0">
            <dl>
                <dt>常用</dt>
                <dd>
                    <a url="" onclick="get_content(this,1)" href="javascript:;" nid="1">会员管理</a>
                </dd>
                <dd>
                    <a url="" onclick="get_content(this,2)" href="javascript:;" nid="2">简历管理</a>
                </dd>
                
                <dd>
                    <a url=""
                       onclick="get_content(this,3)" href="javascript:;" nid="3">职位管理</a>
                </dd>
                <dd>
                    <a url=""
                       onclick="get_content(this,4)" href="javascript:;" nid="4">企业信息</a>
                </dd>
                <dd>
                    <a url=""
                       onclick="get_content(this,5)" href="javascript:;" nid="5">友情链接</a>
                </dd>
             </dl>
        </div>
    </div>
    <!--主体左侧导航-->
    <!--内容显示区域-->
    <div class="menu_nav">
        <div class="direction">
            <a href="#" class="left">向左</a>
            <a href="#" class="right">向右</a>
        </div>
        <div class="favorite_menu">
            <ul>
                <li class="action" nid="0" style="border-left:solid 1px #D8D8D8;"><a href="javascript:;" class="menu" nid="0">环境</a></li>
            </ul>
        </div>
    </div>
    <div class="top_content">
        <iframe src="" nid="0" scrolling="auto" frameborder="0" style="height: 100%;width: 100%;"></iframe>
    </div>
    <!--内容显示区域-->
</div>
<div id="quick_menu">

    <div
        style="float:left;width:1px;margin-right:5px;overflow: hidden;background: #999999;height:15px;margin-top:12px;"></div>
    <div class="bottom-menu">
        <list from="$favorite_menu" name="f">
            <a url="?a=<?php echo $f['app'];?>&c=<?php echo $f['control'];?>&m=<?php echo $f['method'];?>&nid=<?php echo $f['nid'];?>"
               onclick="get_content(this,<?php echo $f['nid'];?>)" href="javascript:;" nid="<?php echo $f['nid'];?>"><?php echo $f['title'];?></a>
        </list>
    </div>
    <div class="quick-hide">
        <a href="javascript:quick_menu_hide();">隐藏</a>
    </div>
</div>
<div id="show_quick_menu" onclick="show_quick_menu()">
    显示
</div>
<!--左侧导航-->
<script>
    $("a[nid=1]").trigger("click");
</script>
</body>
</html>