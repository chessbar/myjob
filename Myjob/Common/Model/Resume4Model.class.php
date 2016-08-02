<?php
/* 
* [****************]
* @Author: 
* @Date:   2014-07-07 20:36:41
* @Last Modified by:   Administrator
* @Last Modified time: 2014-07-09 21:40:14
*/
class Resume4Model extends Model{
	public $table="people_resume4";
	public $validate=array(
			array('starttime','regexp:/^\d{4}-\d{1,2}-\d{1,2}$/','开始时间格式不正确！',2,3),
			array('endtime','regexp:/^\d{4}-\d{1,2}-\d{1,2}$/','结束时间格式不正确！',2,3),
			array('schoolname','nonull','学校名称不得为空！',2,3),
			array('skillname','nonull','专业名称不得为空！',2,3),
			array('schoolname','maxlen:30','学校名称不得超过30位！',2,3),
			array('skillname','maxlen:30','专业名称不得超过30位！',2,3),
		);
	public $auto=array(
			array('resume1_rid','_rid','method',2,1),
			array('starttime','_starttime','method',2,1),
			array('endtime','_endtime','method',2,1),
		);
	public function _rid(){
		return Q('post.reid', 0, 'intval');
	}
	public function _starttime(){
		return strtotime(Q('post.starttime'));
	}
	public function _endtime(){
		return strtotime(Q('post.endtime'));
	}
	/**
	 * [add_data 添加数据]
	 */
	public function add_data(){
		$reid=Q('post.reid',0,'intval');
		if($this->where(array('resume1_rid'=>$reid))->count()>3){
			$this->error="教育经历最多4条";
			return false;
		}
		$this->add();
		K('Resume1')->add_step($reid,4);
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
	public function get_id_data($reid4,$reid){
		return $this->where(array('rid4'=>$reid4,'resume1_rid'=>$reid))->find();
	}
	/**
	 * [update_data description]
	 * @param  [type] $reid [description]
	 * @return [type]       [description]
	 */
	public function update_data($reid4,$reid){

		$this->where(array('resume1_rid'=>$reid,'rid4'=>$reid4))->save();
	}
	/**
	 * [del_data 删除数据]
	 * @param  [type] $reid4 [description]
	 * @param  [type] $reid  [description]
	 * @return [type]        [description]
	 */
	public function del_data($reid4,$reid){
		$this->where(array('resume1_rid'=>$reid,'rid4'=>$reid4))->delete();
	}
}