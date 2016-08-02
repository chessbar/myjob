<?php
/* 
* [****************]
* @Author: 
* @Date:   2014-07-10 23:18:25
* @Last Modified by:   Administrator
* @Last Modified time: 2014-07-24 19:09:49
*/
class Resume7Model extends Model{
	public $table="people_resume7";
	/**
	 * [get_data 取得单条数据]
	 * @param  [type] $reid [description]
	 * @return [type]       [description]
	 */
	public function get_data($reid){
		return $this->where(array("resume1_rid"=>$reid))->find();
	}
	/**
	 * [update_face 修改头像上传或]
	 * @param  [type] $reid [description]
	 * @return [type]       [description]
	 */
	public function update_face($reid){
		//实例化上传类 
		$upload=new Upload();
		$upfiles=$upload->upload();
		//如果有错误
		if(!$upfiles){
			$this->error=$upload->error;
			return false;
		}
		$where=array("resume1_rid"=>$reid);
		//从数据库获得缩略图地址
		$thumbPath=$this->where($where)->getField('face');
		$data=array(
			'resume1_rid'=>$reid,
			'face'=>$upfiles[0]['thumb']
			);
		//如果有数据则修改 否则添加
		if($thumbPath){
			$this->del_pic($reid);
			$this->where($where)->save($data);
		}else{
			$this->add($data);
			K('Resume1')->add_step($reid,7);
		}
		return true;
	}
	public function del_pic($reid){
		$where=array('resume1_rid'=>$reid);
		$thumbPath=$this->where($where)->getField('face');
		//完整缩略图路径
		$thumbFullPath=ROOT_PATH.$thumbPath;
		//如果缩略图存在 则删除 并删除原图
		if(is_file($thumbPath)){
			//删除缩略图
			$fullPath=str_replace(C('THUMB_ENDFIX').'.', '.',$thumbFullPath);
			unlink($thumbFullPath);
			unlink($fullPath);
		}
	}
}
