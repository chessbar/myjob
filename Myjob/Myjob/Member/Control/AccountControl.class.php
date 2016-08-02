<?php
/* 
* [****************]
* @Author: 
* @Date:   2014-06-13 21:23:02
* @Last Modified by:   Administrator
* @Last Modified time: 2014-06-18 16:50:25
*/
class AccountControl extends CommonControl{
	private $model;
public function __auto(){
	$this->model=K('BaseInfo');

}
	/**
	 * [baseinfo 个人资料]
	 * @return [type] [description]
	 */
public function baseinfo(){
	if(IS_POST){
		if(!$this->model->create()) $this->error($this->model->error);
		//添加数据
		$this->model->add_data();
		$this->success('添加成功');
	}
	if($this->model->have_info()) go(U('edit_baseinfo'));
	$this->display();
}
/**
 * [edit_baseinfo 修改个人资料]
 * @return [type] [description]
 */
 public function edit_baseinfo(){
 	if(IS_POST){
 		if(!$this->model->create()) $this->error($this->model->error);
		//添加数据
		$this->model->update_data();
		$this->success('保存成功');
 	}
 	$data=$this->model->get_info();
 	$this->assign('data',$data);
 	$this->display();
 }
 /**
  * [face 头像]
  * @return [type] [description]
  */
 public function face(){
 	//判断个人是否有个人资料
 	if(!$this->model->have_info()) $this->error('请先填写个人资料',U('Account/baseinfo'));
 	if(IS_POST){
 		//执行模型上传头像
 		if(!$this->model->update_face()) $this->error($this->model->error);
 		$this->success('上传成功');
		}
 	$data=$this->model->get_info('face');
 	if($data){
 		$this->assign('face',current($data));
 	}
 	$this->display();
 }
 /**
  * [pwd 密码修改]
  * @return [type] [description]
  */
 public function pwd(){
 	if(IS_POST){
 		$userModel=K('User');
 		if($userModel->update_pwd()){
 			$this->success('修改成功');
 		}else{
 			$this->error($userModel->error);
 		}
 	}
	$this->display();
	//执行，模型修改
 }
}

?>
