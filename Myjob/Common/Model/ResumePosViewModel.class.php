<?php
/* 
* [简历第二阶段与中间表 职位表 视图]
* @Author: 
* @Date:   2014-07-12 16:09:32
* @Last Modified by:   Administrator
* @Last Modified time: 2014-07-12 16:45:10
*/
class ResumePosViewModel extends ViewModel{
	public $table="people_resume2";
	public $view=array(
		'resume2_pos'=>array(
			'type'=>INNER_JOIN,
			'on'=>'people_resume2.resume1_rid=resume2_pos.job_rid2'
			),
		'positioncate'=>array(
			'type'=>INNER_JOIN,
			'on'=>'resume2_pos.job_posid=positioncate.posid'
			),
		);
	public function get_posname($reid){
		$posCateArr=$this->where(array('resume1_rid'=>$reid))->field('posname')->all();
		$posname='';
		foreach ($posCateArr as $v) {
			$posname.='/'.$v['posname'];
		}
		return ltrim($posname,'/');
	}
}
