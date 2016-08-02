<?php
//测试控制器类
class IndexControl extends Control{
	/**
	 * [index 默认显示前台首页]
	 * @return [type] [description]
	 */
    function index(){
        $this->display();
    }
}
?>