<?php
/* 
* [营业执照模型]
* @Author: 
* @Date:   2014-07-24 18:33:23
* @Last Modified by:   Administrator
* @Last Modified time: 2014-07-25 22:34:23
*/
class ComLicenseModel extends Model{
	public $table="company_license";
	public $validate=array(
		array('license','nonull','营业执照注册号不得为空！',2,3),
		array('license','maxlen:20','营业执照注册号不得超过20位！',2,3),
		array('license','minlen:10','营业执照注册号不得超过10位！',2,3),
		);
	public function update_license(){
		//实例化上传类
		$upload=new Upload();
		$upfiles=$upload->upload();
		//如果有错误
		if(!$upfiles){
			$this->error=$upload->error;
			return false;
		}
		$data=array(
			'user_uid'=>session('uid'),
			'license'=>Q('post.license'),
			'licensepic'=>$upfiles[0]['path'],
			);
		//从数据库中获得
		$where=array('user_uid'=>session('uid'));
		$path=$this->where($where)->getField('licensepic');
		//如果有数据则修改 删除原来的图片
		if($path){
			$this->del_pic();
			$this->where($where)->save($data);
		}else{
			$this->add($data);
		}
		return true;
	}
	public function del_pic(){
		$where=array('user_uid'=>session('uid'));
		$path=$this->where($where)->getField('licensepic');
		//完整缩略图路径
		$fullPath=ROOT_PATH.$path;
		//如果缩略图存在 则删除 并删除原图
		if(is_file($fullPath)){
			//删除缩略图
			unlink($fullPath);
		}
	}
	public function get_data(){
		return $this->where(array('user_uid'=>session('uid')))->find();
	}
	public function get_state(){
		return $this->where(array('user_uid'=>session('uid')))->getField('state');
	}
}
