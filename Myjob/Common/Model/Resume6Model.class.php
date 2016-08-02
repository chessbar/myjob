<?php
/* 
* [****************]
* @Author: 
* @Date:   2014-07-10 22:42:04
* @Last Modified by:   Administrator
* @Last Modified time: 2014-07-10 22:47:47
*/
class Resume6Model extends Model{
	public $table="people_resume6";
	public $validate=array(
			array('starttime','regexp:/^\d{4}-\d{1,2}-\d{1,2}$/','开始时间格式不正确！',2,3),
			array('endtime','regexp:/^\d{4}-\d{1,2}-\d{1,2}$/','结束时间格式不正确！',2,3),
			array('organ','nonull','培训机构不得为空！',2,3),
			array('organ','maxlen:50','培训机构不得超过50个字！',2,3),
			array('classname','nonull','培训课程不得为空！',2,3),
			array('classname','maxlen:40','培训课程不得超过40个字！',2,3),
			array('description','maxlen:500','培训描述不得超过500个字！',3,3),
		);
	public $auto=array(
			array('resume1_rid','_rid','method',2,1),
		);
	public function _rid(){
		return Q('post.reid', 0, 'intval');
	}
	/**
	 * [add_data 添加数据]
	 */
	public function add_data(){
		$reid=Q('post.reid',0,'intval');
		if($this->where(array('resume1_rid'=>$reid))->count()>3){
			$this->error="培训经历最多4条";
			return false;
		}
		$this->add();
		K('Resume1')->add_step($reid,6);
		return true;
	}
	/**
	 * [get_data 得到数据]
	 * @param  [type] $reid [description]
	 * @return [type]       [description]
	 */
	public function get_data($reid){
		return $this->where(array('resume1_rid'=>$reid))->all();
	}
	/**
	 * [get_id_data 通过教育经历id得到数据]
	 * @param  [type] $reid4 [description]
	 * @return [type]        [description]
	 */
	public function get_id_data($reid6,$reid){
		return $this->where(array('rid6'=>$reid6,'resume1_rid'=>$reid))->find();
	}
	/**
	 * [update_data description]
	 * @param  [type] $reid [description]
	 * @return [type]       [description]
	 */
	public function update_data($reid6,$reid){

		$this->where(array('resume1_rid'=>$reid,'rid6'=>$reid6))->save();
	}
	/**
	 * [del_data 删除数据]
	 * @param  [type] $reid4 [description]
	 * @param  [type] $reid  [description]
	 * @return [type]        [description]
	 */
	public function del_data($reid6,$reid){
		$this->where(array('resume1_rid'=>$reid,'rid6'=>$reid6))->delete();
	}
}
