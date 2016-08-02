<?php
if (!defined("HDPHP_PATH"))exit('No direct script access allowed');
//更多配置请查看hdphp/Config/config.php
return array(
	 /********************************文件上传********************************/
    'UPLOAD_THUMB_ON'               => TRUE,           //上传图片缩略图处理
    'UPLOAD_EXT_SIZE'               => array('jpg' => 5000000, 'jpeg' => 5000000, 'gif' => 5000000, 'png' => 5000000), //上传类型与大小
    'UPLOAD_PATH'                   => 'Upload/infopic/'.date('ymd'),   
    /********************************图片缩略图********************************/
    'THUMB_ENDFIX'                  => '_thumb',    //缩略图后缀
    'THUMB_TYPE'                    => 6,  //生成方式,
                                            //1:固定宽度,高度自增 2:固定高度,宽度自增 3:固定宽度,高度裁切
                                            //4:固定高度,宽度裁切 5:缩放最大边       6:自动裁切图片
    'THUMB_WIDTH'                   => 100,         //缩略图宽度
    'THUMB_HEIGHT'                  => 100,         //缩略图高度
);
?>