<?php
//测试控制器类
class RegControl extends Control{
  public function __init(){
    if(isset($_SESSION['uname']) && isset($_SESSION['uid'])){
      go(U('Index/index'));
    }
  }
	/**
	 * [index 默认显示会员中心首页]
	 * @return [type] [description]
	 */
   public function index(){
       $this->display();
    }
    public function reg(){
     if(IS_POST){
      $userModel=K('user');
      if(!$userModel->create()) $this->error($userModel->error);
          $uid=$userModel->add_user();
         session('uname',Q('post.uname'));
         session('uid',$uid);
         session('uemail',Q('post.uemail'));
         session('rid',Q('post.rid',0,'intval'));
         session('logtime',time());
         session('logip',Ip::getClientIp());
         $this->success('注册成功',U("Reg/reg"));
      }
        $this->display();
      
    }
}
?>