<?php
/* 
* [****************]
* @Author: 
* @Date:   2014-06-17 15:55:22
* @Last Modified by:   Administrator
* @Last Modified time: 2014-07-10 23:08:24
*/
class BaseInfoModel extends Model{
	public $table='baseinfo';
	public $validate=array(
		array('realname','nonull','真实姓名不得为空！',2,3),
		array('realname','maxlen:20','真实姓名不正确！',2,3),
		array('realname','minlen:2','真实姓名不正确！',2,3),
		array('sex','num:1,2','性别选择错误！',2,3),
		array('birdthday','regexp:/^\d{4}-\d{2}-\d{2}$/','生日格式错误错误！',3,3),
		array('address','nonull','通讯地址不得为空！',2,3),
		array('address','maxlen:255','通讯地址不得超过255个字符！',2,3),
		array('tel','tel','固定电话格式不正确！',3,3),
		array('qq','regexp:/^[1-9]\d{5,12}$/','qq号码格式不正确！',3,3),
		array('msn','email','msn格式不正确！',3,3),
		array('intro','maxlen:500','个人简介不能超过500个字！',3,3),
		);
		public $auto = array(
			array('user_uid','_uid','method',2,1)
			);
			public function _uid(){
			return session('uid');
			} 
	/**
	 * [add_data 添加数据]
	 */
	public function add_data(){
		p($_POST);die;
		$this->add();
	}
	/**
	 * [hava_data 判断用户是否有信息]
	 * @return [type] [description]
	 */
	public function have_info(){
		return $this->where(array('user_uid'=>session('uid')))->getField('bid');
	}
	public function get_info($field=NULL){
		return $this->field($field)->where(array('user_uid'=>session('uid')))->find();
	}
	/**
	 * [update_data 修改数据]
	 * @return [type] [description]
	 */
	public function update_data(){
		 $this->where(array('user_uid'=>session('uid')))->save();
	}
	/**
	 * [update_face 上传头像]
	 * @return [type] [description]
	 */
	public function update_face(){
		$upload= new Upload();
		$upfiles=$upload->upload();
		if(!$upfiles){
			$this->error=$upload->error;
			return false;
		}
		$where=array('user_uid'=>session('uid'));
		//缩列图地址
		$thumbPath=$this->where($where)->getField('face');
		//修改图像
		$this->where($where)->save(array('face'=>$upfiles[0]['thumb']));
		//缩量完整路径
		$thumbFullPath=ROOT_PATH.$thumbPath;
		if(is_file($thumbFullPath)){
			$fullPath=str_replace(C('THUMB_ENDFIX').'.', '.',$thumbFullPath);
			unlink($thumbFullPath);
			unlink($fullPath);
		}
		return true;
	}
}
?>
