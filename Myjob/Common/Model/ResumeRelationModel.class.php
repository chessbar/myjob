<?php
/* 
* [简历管理模型]
* @Author: 
* @Date:   2014-07-13 12:39:46
* @Last Modified by:   Administrator
* @Last Modified time: 2014-07-13 14:49:52
*/
class ResumeRelationModel extends RelationModel{
	public $table="people_resume1";
	public $join=array(
		'people_resume2'=>array(
			//表之间的关系
				'type'=> HAS_ONE,
			//从表关联字段
				'foreign_key'=>	'resume1_rid',
			//主表关联字段
				'parent_key'=>'rid'
			),
		'people_resume3'=>array(
			//表之间的关系
				'type'=> HAS_ONE,
			//从表关联字段
				'foreign_key'=>	'resume1_rid',
			//主表关联字段
				'parent_key'=>'rid'
			),
		'people_resume4'=>array(
			//表之间的关系
				'type'=> HAS_MANY,
			//从表关联字段
				'foreign_key'=>	'resume1_rid',
			//主表关联字段
				'parent_key'=>'rid'
			),
		'people_resume5'=>array(
			//表之间的关系
				'type'=> HAS_MANY,
			//从表关联字段
				'foreign_key'=>	'resume1_rid',
			//主表关联字段
				'parent_key'=>'rid'
			),
		'people_resume6'=>array(
			//表之间的关系
				'type'=> HAS_MANY,
			//从表关联字段
				'foreign_key'=>	'resume1_rid',
			//主表关联字段
				'parent_key'=>'rid'
			),
		'people_resume7'=>array(
			//表之间的关系
				'type'=> HAS_ONE,
			//从表关联字段
				'foreign_key'=>	'resume1_rid',
			//主表关联字段
				'parent_key'=>'rid'
			),
		);
	/**
	 * [del_resume 删除简历]
	 * @param  [type] $reid [description]
	 * @param  [type] $uid  [description]
	 * @return [type]       [description]
	 */
	public function del_resume($reid,$uid=NULL){
		$where=array(
				'rid'=>$reid,
				'user_uid'=>$uid
			);
		// 为了后台考虑
		if(is_null($uid)) unset($where['user_uid']);
		//删除中间表
		K("ResumePos")->del_data($reid);
		// 删除第七阶段形象照片
		K('Resume7')->del_pic($reid);
		$this->where($where)->delete();
		return true;
	}
}
