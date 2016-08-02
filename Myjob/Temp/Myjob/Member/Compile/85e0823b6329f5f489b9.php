<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><div class="tab_box">
	<a href="<?php echo U('Member/Account/baseinfo');?>" <?php if(METHOD == 'edit_baseinfo'||METHOD == 'baseinfo'){?>class="select"<?php }?>>基本资料</a>
	<a href="<?php echo U('Member/Account/face');?>" <?php if(METHOD == 'face'){?> class="select"<?php }?>>我的头像</a>
	<a href="<?php echo U('Member/Account/pwd');?>" <?php if(METHOD == 'pwd'){?> class="select"<?php }?>>密码修改</a>
</div>