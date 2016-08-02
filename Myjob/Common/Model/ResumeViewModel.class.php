<?php
/* 
* [****************]
* @Author: 
* @Date:   2014-07-11 23:11:56
* @Last Modified by:   Administrator
* @Last Modified time: 2014-07-12 18:53:29
*/
class ResumeViewModel extends ViewModel{
	public $table="people_resume1";
	public $view=array(
			'people_resume2'=>array(
				'type'=>LEFT_JOIN,
				'on'=>'people_resume1.rid=people_resume2.resume1_rid',

				),
			'people_resume3'=>array(
				'type'=>LEFT_JOIN,
				'on'=>'people_resume1.rid=people_resume3.resume1_rid',
				
				),
			'people_resume4'=>array(
				'type'=>LEFT_JOIN,
				'on'=>'people_resume1.rid=people_resume4.resume1_rid',
				
				),
			'people_resume5'=>array(
				'type'=>LEFT_JOIN,
				'on'=>'people_resume1.rid=people_resume5.resume1_rid',
				
				),
			'people_resume6'=>array(
				'type'=>LEFT_JOIN,
				'on'=>'people_resume1.rid=people_resume6.resume1_rid',
				
				),
			'people_resume7'=>array(
				'type'=>LEFT_JOIN,
				'on'=>'people_resume1.rid=people_resume7.resume1_rid',
				
				),
		);
	/**
	 * [get_join_resume description]
	 * @param  [type] $reid [description]
	 * @return [type]       [description]
	 */
	public function get_join_resume($uid){
		if(!$reid=Q('get.reid',0,'intval')) return false;
		$where=array("rid"=>$reid);
		//如果用户传递uid ，保证是当前用户简历
		if($uid) $where['user_uid']=$uid;
		$data=$this->join('people_resume7')->where($where)->find();
		if(!$data) return false;
		switch ($data['verifystate']) {
			case 1:
				$data['verifystate']="审核中";
				break;
			case 2:
				$data['verifystate']="审核通过";
				break;
			case 3:
				$data['verifystate']="审核失败";
				break;	
		}
		switch ($data['publicstate']) {
			case 1:
				$data['publicstate']="公开";
				break;
			case 2:
				$data['publicstate']="半公开";
				break;	
		}
		switch ($data['publicstate']) {
			case 1:
				$data['publicstate']="公开";
				break;
			case 2:
				$data['publicstate']="半公开";
				break;	
		}
		$data['propress']=K("Resume1")->get_propress($reid);
		$data['totime']=date('Y.m.d',$data['sendtime']).'-'.date('Y.m.d',$data['endtime']);
			//照片审核状态
		$faceValidate = $data['facevalidate'] ? $data['facevalidate'] : 4;
		switch ($faceValidate) {
				case 1:
				$data['facevalidate'] = '审核中';
				break;
				case 2:
				$data['facevalidate'] = '审核通过';
				break;
				case 3:
				$data['facevalidate'] = '审核失败';
				break;
				default:
				$data['facevalidate'] = '未上传照片';
				break;
		}
			//处理照片公开状态
		$facepublic = $data['facepublic'] ? $data['facepublic'] : 3;
		switch ($facepublic) {
			case 0:
			$data['facepublic'] = '半公开';
			break;
			case 1:
			$data['facepublic'] = '完全公开';
			break;
			default:
			$data['facepublic'] = '未上传照片';
			break;
		} 
		//处理求职意向
		if($resume2Data=K('Resume2')->get_data($reid)){
			$data['resume2Data']=$resume2Data;
			$data['resume2Data']['posname']=K('ResumePosView')->get_posname($reid);
			//处理技能特长
			if($resume3Data=K('Resume3')->get_data($reid)){
				$data['resume3Data']=$resume3Data;
				if($resume4Data=K('Resume4')->get_data($reid)){
					$data['resume4Data']=$resume4Data;
				}
				if($resume5Data=K('Resume5')->get_data($reid)){
					$data['resume5Data']=$resume5Data;
				}
				if($resume6Data=K('Resume6')->get_data($reid)){
					$data['resume6Data']=$resume6Data;
				}
			}
		}

		return $data;
	}
}
?>
