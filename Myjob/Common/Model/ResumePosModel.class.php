<?php
/* 
* [****************]
* @Author: 
* @Date:   2014-06-26 19:40:22
* @Last Modified by:   Administrator
* @Last Modified time: 2014-07-13 14:41:03
*/
class ResumePosModel extends Model{
	public $table='resume2_pos';
	/**
	 * [add_data description]
	 * @param [type] $reid [description]
	 */
	public function add_data($reid){
		$posid=Q('post.posid');
		$count=count($posid);
		if($count>6){
			$this->error='期望岗位不得超过6个';
			return false;
		}
		foreach ($posid as $k => $v) {
			$data=array(
				'job_rid2'=>$reid,
				'job_posid'=>$v
				);
			$this->add($data);
		}
		return true;
	}
	/** [get_posid 得到已选择职位的ID] */
	public function get_posid($reid){
		$data=$this->field('job_posid')->where(array('job_rid2'=>$reid))->all();
		$temp=array();
		foreach ($data as $v) {
			$temp[]=$v['job_posid'];
		}
		return $temp;
	}
	/**
	 * [update_data 修改中间表]
	 * @return [type] [description]
	 */
	public function update_data($posid,$reid){
		$count=count($posid);
		if($count>6){
			$this->error='期望岗位不得超过6个';
			return false;
		}
		//删除原有记录
		$this->where(array('job_rid2'=>$reid))->delete();
		//添加新数据
		foreach ($posid as $k => $v) {
			$data=array(
				'job_rid2'=>$reid,
				'job_posid'=>$v
				);
			$this->add($data);
		}
		return true;
	} 
	/**
	 * [del_data 删除数据]
	 * @param  [type] $reid [description]
	 * @return [type]       [description]
	 */
	public function del_data($reid){
		$this->where(array('job_rid2'=>$reid))->delete();
	}

}
?>
