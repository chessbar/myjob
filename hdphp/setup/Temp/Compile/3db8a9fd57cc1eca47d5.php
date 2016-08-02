<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><load file="http://localhost/myjob/hdphp/setup/./Tpl/Public/public.html"/>
<body>
    <div class="hd_setup">
        <strong>欢迎使用后盾HD框架，通过HD框架手册或登录
            <a href="http://bbs.houdunwang.com/">后盾论坛</a>学习使用后盾HD框架
        </strong>
        <h2>
            <a href="http://localhost/myjob/hdphp/setup/index.php?c=Session" class="home">返回安装首页</a>
            <a href="javascript:void(0)"  class="home" onclick="window.close();return false;">关闭</a>
            <a href="http://localhost/myjob/hdphp/setup/index.php/rbac/lock" class="home">锁定SETUP应用</a>
        </h2>
    </div>
    <div class="setup">

        <dl>
            <dt>SESSION表配置</dt>
            <dd><a href="http://localhost/myjob/hdphp/setup/index.php/rbac/setconfig" target="_blank">配置表参数</a></dd>
            <dd><a href="http://localhost/myjob/hdphp/setup/index.php/session/createsessiontable" target="_self">安装SESSION数据库表</a></dd>
        </dl>
    </div>
    <div style='color:#f00;font-size:14px; font-weight:bold;border:solid 1px #f00;padding:8px;width:600px; margin-left:20px;'>
        严重：当前系统开启框架安装模式，上线后将setup目录改名或删除！
    </div>
</body>
</html>



