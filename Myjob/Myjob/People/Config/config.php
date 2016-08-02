<?php
if (!defined("HDPHP_PATH"))exit('No direct script access allowed');
//更多配置请查看hdphp/Config/config.php
return array(
		/********************************文件上传********************************/
		'UPLOAD_THUMB_ON' => TRUE, //上传图片缩略图处理
		'UPLOAD_EXT_SIZE' => array('jpg' => 512000, 'jpeg' => 512000, 'gif' => 512000,'png' => 512000), //上传类型与大小
		'UPLOAD_PATH' => ROOT_PATH . 'upload/resumepic/' . date('ymd'), //上传路径
		/********************************图片缩略图********************************/
		'THUMB_ENDFIX' => '_thumb',    //缩略图后缀
		'THUMB_WIDTH' => 120, //缩略图宽度
		'THUMB_HEIGHT' => 150, //缩略图高度 
);
?>