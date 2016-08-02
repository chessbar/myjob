<?php
/* 会员管理模型
* []
* @Author: 
* @Date:   2014-06-09 21:27:20
* @Last Modified by:   Administrator
* @Last Modified time: 2014-06-18 21:28:57
*/
class UserModel extends Model{
	//指定表名
	public $table="user"; 
	public $validate=array(
			array('uname','nonull','用户名不能为空',2,1),
			array('uname','user:4,15','用户名格式错误，必须4-15个字符以字母开头',2,1),
			array('uemail','nonull','邮箱不能为空',1,1),
			array('uemail','email','邮箱格式错误',1,1),
			array('pwd','nonull','用户密码不能为空',2,1),
			array('pwd','minlen:6','用户密码不得少于6位',2,1),
			array('pwdc','confirm:pwd','两次密码不相同',1,1),
			array('deal','regexp:/^1$/','必须同意协议才能进行下一步',2,1)
		);
	public $auto=array(
		array('pwd','_md5','method',2,1),
		array('regtime','_regtime','method',2,1),
		array('rid','_rid','method',2,1),
		array('logip','_ip','method',2,1),
		array('logtime','_time','method',2,1)
		);
	/**
	 * [add_user 添加用户]
	 */
	public function add_user(){
		return $this->add();
	}
	/**
	 * [_md5 自动完成方法]
	 * @param  [type] $con [description]
	 * @return [type]      [description]
	 */
	public function _md5($con){
		return md5($con);
	}
	public function _regtime(){
		return time();
	}
	public function _rid(){
		$rid=Q('post.rid',0,'intval');
		if($rid==1){
			return 1;
		}
		return 2;
	}
	public function _ip(){
		return Ip::getClientIp();
	}
	public function _time(){
		return time();
	}
	/**
	 * [validate_login 用户登陆验证]
	 * @return [type] [description]
	 */
	public function validate_login(){
		//取得用户数据
		$uname=Q('post.uname');
		//判断用户是否存在
		$userInfo=$this->where(array('uname'=>$uname))->find();
		if(!$userInfo){
			$this->error="用户名不存在";
			return false;
		}
		//判断密码正确
		$pwd=Q('post.pwd',null,'md5');
		if($userInfo['pwd'] !=$pwd){
			$this->error="密码错误";
			return false;
		}//判断用户锁定与否
		if($userInfo['lock']==1){
			$this->error="用户被锁定";
			return false;
		}
		return $userInfo;
	}
	public function update_logininfo(){
		$data=array(
			'logip'=>IP::getClientIp(),
			'logtime'=>time()
			);
		$this->where(array('uid'=>$_SESSION['uid']))->save($data);
	}
	public function update_pwd(){
		$pwd1=Q('post.pwd1');
		if(strlen($pwd1)<6){
			$this->error='新密码不得少于6位！';
			return false;
		}
		$pwd2=Q('post.pwd2');
		if($pwd1!=$pwd2){
			$this->error='两次密码不一致！';
			return false;
		}
		if($pwd1==Q('post.oldpwd')){
			$this->error='新旧密码不得相同！';
			return false;
		}
		$oldpwd=Q('post.oldpwd','','md5');
		$where=array('uid'=>session('uid'));
		$dbpwd=$this->where($where)->getField('pwd');
		if($oldpwd!=$dbpwd){
			$this->error='旧密码不正确！';
			return false;
		}
		//修改密码
		//$this->where($where)->save(array('pwd')=>md5($pwd1));
		$this->where($where)->save(array('pwd'=>md5($pwd1)));
		return true;
	}
}
?>
