<?php
/* 
* [****************]
* @Author: 
* @Date:   2014-07-10 21:32:30
* @Last Modified by:   Administrator
* @Last Modified time: 2014-07-10 21:57:31
*/
class Resume5Model extends Model{
	public $table="people_resume5";
	public $validate=array(
			array('starttime','regexp:/^\d{4}-\d{1,2}-\d{1,2}$/','开始时间格式不正确！',2,3),
			array('endtime','regexp:/^\d{4}-\d{1,2}-\d{1,2}$/','结束时间格式不正确！',2,3),
			array('companyname','nonull','企业名称不得为空！',2,3),
			array('companyname','maxlen:50','企业名称不得超过50位！',2,3),
			array('companyinfo','maxlen:500','学校名称不得超过500个字符！',3,3),
			array('job','nonull','职务名称不得为空！',2,3),
			array('job','maxlen:20','职务名称不得超过20个字！',2,3),
			array('outstanding','maxlen:500','业绩或表现不得超过500个字！',3,3),
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
		if($this->where(array('resume1_rid'=>$reid))->count()>4){
			$this->error="教育经历最多5条";
			return false;
		}
		$this->add();
		K('Resume1')->add_step($reid,5);
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
	public function get_id_data($reid5,$reid){
		return $this->where(array('rid5'=>$reid5,'resume1_rid'=>$reid))->find();
	}
	/**
	 * [update_data description]
	 * @param  [type] $reid [description]
	 * @return [type]       [description]
	 */
	public function update_data($reid5,$reid){

		$this->where(array('resume1_rid'=>$reid,'rid5'=>$reid5))->save();
	}
	/**
	 * [del_data 删除数据]
	 * @param  [type] $reid4 [description]
	 * @param  [type] $reid  [description]
	 * @return [type]        [description]
	 */
	public function del_data($reid5,$reid){
		$this->where(array('resume1_rid'=>$reid,'rid5'=>$reid5))->delete();
	}
}
