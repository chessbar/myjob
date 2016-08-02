<?php
/* 
* [****************]
* @Author: 
* @Date:   2014-07-13 15:34:34
* @Last Modified by:   Administrator
* @Last Modified time: 2014-07-26 17:27:45
*/
class ComPositionControl extends PublicControl{
	/**
	 * [send_pos 发布职位]
	 * @return [type] [description]
	 */
	private $model;
	public function __auto(){
		//检查营业执照是否审核 只有通过审核才能发布职位
		if(K('ComLicense')->get_state() !=2) $this->error('营业执照通过审核才能发布职位！',U('ComInfo/license'));
		$this->model=K('ComPosition');
	}
	public function send_pos(){
		$model=$this->model;
		//调用城市
		$topCity=K('City')->topCity;
		$this->assign('topCity',$topCity);
		//调用顶级职位类别
		$topPos=K('Poscate')->topPos;
		$this->assign('topPos',$topPos);
		if(IS_POST){
			if(!$model->create()) $this->error($model->error);
			if(!$model->add_data()) $this->error('最多不能超过20个职位！');
			$this->success('发布成功',U('check_pos'));
		}
		$this->display();
	}
	public function edit_pos(){
		
		$model=$this->model;
		$cpid=Q('post.cpid');
		$model->check_user($cpid);
		$data=get_data($cpid);
		$this->assign('data',$data);
		$this->display();

	}
	public function check_pos(){
		$model=$this->model;
		if(IS_POST){
			$model->pos_action();
			$this->success('操作成功');  
		}
		$data=$model->get_pos(session('uid'));
		$page=$data['page'];
		$this->assign('page',$page);
		unset($data['page']);
		$this->assign('data',$data);
		$this->display();
	}
}