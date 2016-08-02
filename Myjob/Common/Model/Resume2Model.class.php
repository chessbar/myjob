<?php
/* 
* [****************]
* @Author: 
* @Date:   2014-06-22 19:34:36
* @Last Modified by:   Administrator
* @Last Modified time: 2014-07-07 20:40:47
*/
class Resume2Model extends Model{
	//指定表名
	public $table="people_resume2"; 
	public $validate=array(
			array('workplace','maxlen:45','最近工作过的职位不得超过45位',3,3),
			array('quality','num:1,3','期望岗位性质选择错误！',2,3),
			array('city_one','num:1,35','期望工作地区选择错误！',2,3),
			array('salary','num:1,7','期望月薪选择错误！',2,3),
			array('posid','nonull','期望岗位不得为空！',2,3),
		);
	public $auto=array(
			array('city_cityid','_city','method',2,3),
			array('resume1_rid','_rid','method',2,3)
		);
	/**
	 * [_city description]
	 * @return [type] [description]
	 */
	public function _city(){
		$cityOne=Q('post.city_one',0,'intval');
		$citySecond=Q('post.city_second',0,'intval');
		if($citySecond!=0) return $citySecond;
		return $cityOne;
	}
	public function _rid(){
		return Q('post.reid', 0, 'intval');
	}
	public function have_info($reid){
		return $this->where(array('resume1_rid'=>$reid))->getField('rid2');
	}
	/**
	 * [add_data 添加数据]
	 */
	public function add_data(){
		return $this->add();
	}
	/**
	 * [get_data 得到信息 包括城市信息]
	 * @param  [type] $reid [description]
	 * @return [type]       [description]
	 */
	public function get_data($reid){
		$data=$this->where(array('resume1_rid'=>$reid))->find();
		$data=K('City')->get_old_city($data,'city_cityid');
		return $data;
		//$data=K('City')->get_old_city($data,'city_cityid');
	}
	/**
	 * [update_data 更新数据]
	 * @return [type] [description]
	 */
	public function update_data($reid){
		$this->where(array('resume1_rid'=>$reid))->save();
	}
}
?>
