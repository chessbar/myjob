<?php
//测试控制器类
class IndexControl extends CommonControl{
	/**
	 * [index 默认显示会员中心首页]
	 * @return [type] [description]
	 */
   public function index(){
   	//个人
    	if(session('rid')==1) go(U('People/Index/index'));
    //	企业
    	if(session('rid')==2) go(U('Company/Index/index'));
    	session(null);
    	$this->error("角色不正确");
       // $this->display();
    }
}
?>