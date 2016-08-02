<?php
/* 
* [****************]
* @Author: 
* @Date:   2014-07-07 20:36:41
* @Last Modified by:   Administrator
* @Last Modified time: 2014-07-10 21:24:31
*/
class Resume3Model extends Model{
	public $table="people_resume3";
	public $validate=array(
			array('skill','nonull','技能特长不得为空！',2,3),
			array('skill','maxlen:500','技能特长不能超过500个字符！',2,3),
			array('skill','minlen:100','技能特长不能少于100个字符！',2,3),
		);
	public $auto=array(
			array('resume1_rid','_rid','method',2,3),
		);
	public function _rid(){
		return Q('post.reid', 0, 'intval');
	}
	/**
	 * [add_data 添加数据]
	 */
	public function add_data(){
		return $this->add();
	}
	/**
	 * [have_info 检查是否存在数据]
	 * @param  [type] $reid [description]
	 * @return [type]       [description]
	 */
	public function have_info($reid){
		return $this->where(array('resume1_rid'=>$reid))->getField('skill');
	}
	/**
	 * [get_data 得到数据]
	 * @param  [type] $reid [description]
	 * @return [type]       [description]
	 */
	public function get_data($reid){
		return $this->where(array('resume1_rid'=>$reid))->getField('skill');
	}
	public function update_data($reid){
		$this->where(array('resume1_rid'=>$reid))->save();
	}
}