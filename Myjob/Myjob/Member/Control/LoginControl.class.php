<?php
/* 
* [****************]
* @Author: 
* @Date:   2014-06-09 21:56:57
* @Last Modified by:   Administrator
* @Last Modified time: 2014-06-17 18:24:04
*/
class LoginControl extends Control{
	/**
	 * [index]
	 * @return [type] [description]
	 */
   public function index(){
   	if(isset($_SESSION['uname']) && isset($_SESSION['uid'])){
      go(U('Member/Index/index'));
    }
   	if(IS_POST){
   		$userModel=K('User');
   		if(!$userModel->create()) $this->error($userModel->error);
   		//执行登陆验证
   		$userInfo=$userModel->validate_login();
   		if(!$userInfo) $this->error($userModel->error);
   		 session('uname',$userInfo['uname']);
         session('uid',$userInfo['uid']);
         session('rid',$userInfo['rid']);
         session('logtime',$userInfo['logtime']);
         session('logip',$userInfo['logip']);
         session('ueamil',$userInfo['ueamil']);
         $userModel->update_logininfo();
         //半段是否自动登陆
         if(Q('post.auto',NULL,'intval')){
         	setcookie(session_name(),session_id(),time()+86400*7,'/');
         }
         go(U('Member/Index/index'));
   	}
   	 $this->display();
    }
    public function out(){
    	session(null);
    	cookie(null);
    	$this->success('退出成功',U('Index/Index/index'));
    }
}
?>
