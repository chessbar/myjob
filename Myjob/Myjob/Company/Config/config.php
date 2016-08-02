<?php
if (!defined("HDPHP_PATH"))exit('No direct script access allowed');
//更多配置请查看hdphp/Config/config.php
return array(
		/********************************文件上传********************************/
		'UPLOAD_THUMB_ON' => FALSE, //上传图片缩略图处理
		'UPLOAD_EXT_SIZE' => array('jpg' => 512000, 'jpeg' => 512000, 'gif' => 512000,'png' => 512000), //上传类型与大小
		'UPLOAD_PATH' => ROOT_PATH . 'upload/companypic/' . date('ymd'), //上传路径
		);
?>