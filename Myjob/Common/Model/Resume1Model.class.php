<?php
/* 
* [简历第一阶段模型]
* @Author: 
* @Date:   2014-06-18 19:14:32
* @Last Modified by:   Administrator
* @Last Modified time: 2014-07-26 16:45:30
*/
class Resume1Model extends Model{
	//指定表名
	public $table="people_resume1"; 
	public $validate=array(
			array('resumename','nonull','简历名称不能为空',2,3),
			array('resumename','maxlen:20','简历名称不能超过20位',2,3),
			array('validtime','num:1,365','有效时间不能超过365天',3,3),
			array('realname','nonull','真实姓名不能为空',2,3),
			array('sex','num:1,2','性别选择错误！',2,3),
			array('age','num:18,100','年龄在18—100岁之间！',2,3),
			array('height','num:100,200','身高在100-200之间',2,3),
			array('marrystate','num:1,3','婚姻状况不正确',2,3),
			array('workyear','num:1,6','请选择工作经验',2,3),
			array('household','nonull','户口所在地不得为空',2,3),
			array('household','maxlen:75','户口所在地不得超过75个字符',2,3),
			array('edu','num:1,9','请选择学历',2,3),
			array('phonenumber','phone','手机格式不正确',2,3),
			array('mail','email','邮箱格式不正确',2,3),
			array('address','nonull','通讯地址不得为空',2,3),
			array('address','maxlen:100','通讯地址不得超过100个字符',2,3),
			array('qq','regexp:/^[1-9]\d{5,12}$/','qq号码格式不正确！',3,3),
			array('homepage','http','个人主页格式不正确！',3,3),
		);
	public $auto=array(
			array('user_uid','_uid','method',2,1),
			array('sendtime','_sendtime','method',2,1),
			array('endtime','_endtime','method',2,3),
			array('freshtime','_freshtime','method',2,1),
			array('validtime','_validtime','method',2,1)
		);
	/**
	 * [_sendtime 发布时间]
	 * @return [type] [description]
	 */
	public function _sendtime(){
		return time();
	}
	/**
	 * [_uid 用户uid]
	 * @return [type] [description]
	 */
	public function _uid(){
		return session('uid');
	}
	/**
	 * [_endtime 结束时间]
	 * @return [type] [description]
	 */
	public function _endtime(){
		$validtime=	Q('post.validtime',0,'intval');
		return time()+$validtime*24*3600;
	}
	/**
	 * [_freshime 刷新时间]
	 * @return [type] [description]
	 */
	public function _freshime(){
		return time();
	}
	/**
	 * [_validtime description]
	 * @return [type] [description]
	 */
	public function _validtime(){
		$validtime=	Q('post.validtime',0,'intval');
		return $validtime;
	}
	/**
	 * [add_data 添加简历]
	 */
	public function add_data(){
		if($this->where(array('user_uid'=>session('uid')))->count()>=3) return false;
		$rid=$this->add();
		return $rid;
	}
	public function have_info($reid){
		return $this->where(array('rid'=>$reid))->getField('rid');
	}
	/**
	 * [get_info 得到数据]
	 * @return [type] [description]
	 */
	public function get_data($reid){
		return $this->where(array('rid'=>$reid,'user_uid'=>session('uid')))->find();
	}
	/**
	 * [update_data 修改数据]
	 * @return [type] [description]
	 */
	public function update_data(){
		$reid=Q('post.reid');
		$this->where(array('rid'=>$reid,'user_uid'=>session('uid')))->save();
	}
	/**
	 * [check_user 检查是否是当前用户]
	 * @return [type] [description]
	 */
	public function check_user($reid){
		$uid=$this->where(array('rid'=>$reid))->getField('user_uid');
		if($uid!=session('uid')) halt('非法参数！');
	}
	/**
	 * [add_step 添加完成步骤]
	 * @param [type] $reid [description]
	 * @param [type] $step [description]
	 */
	    public function add_step($reid,$step){
    	$where=array('rid'=>$reid);
    	$stepStatus=$this->where($where)->getField('stepstatus');
    	$stepStatus.=$step.',';
    	$this->where($where)->save(array('stepstatus'=>$stepStatus));
    }
    /**
     * [minus_step 删除步骤]
     * @param  [type] $reid [description]
     * @param  [type] $step [description]
     * @return [type]       [description]
     */
    public function minus_step($reid,$step){
    	$where=array('rid'=>$reid);
    	$stepStatus=$this->where($where)->getField('stepstatus');
    	if(!preg_match("/$step,/",$stepStatus)) return false;
    	$stepStatus=preg_replace("/$step,/",'',$stepStatus);
    	$this->where($where)->save(array('stepstatus'=>$stepStatus));
    	return true;
    }
    /**
     * [get_step 得到完成步骤]
     * @param  [type] $reid [description]
     * @return [type]       [description]
     */
    public function get_step($reid){
    	$stepStatus=$this->where(array('rid'=>$reid))->getField('stepstatus');
    	if(!$stepStatus) return null;
    	return array_unique(explode(',',rtrim($stepStatus,',')));
    }
    /**
     * [get_propress description]
     * @param  [type] $reid [description]
     * @return [type]       [description]
     */
    public function get_propress($reid){
    	$stepArr=$this->get_step($reid);
    	if(!$stepArr) return 0;
    	$propress=0;
    	foreach ($stepArr as $v) {
    		if($v==6){
    			$propress+=12;
    		}elseif($v==7){
    			$propress+=13;
    		}else{
    			$propress+=15;
    		}
    	}
    	return $propress;
    }
    public function get_resume($uid=NULL){
    	$where=array();
    	if($uid) $where['user_uid']=$uid;
    	switch (Q('get.state',0,'intval')) {
    		case 1:
    			$state=1;
    			break;
    		case 2:
    			$state=2;
    			break;
    		case 3:
    			$state=3;
    			break;
    		default:
    		$_GET['state']=0;
    			$state=NULL;
    			break;
    	}
    	if($state) $where['verifystate']=$state;
    	$data=$this->where($where)->all();
    	if(!$data) return false;
    	foreach ($data as $k => $v) {
    		switch ($v['verifystate']) {
    			case 1:
    				$data[$k]['verifystate']='审核中';
    				break;
    			case 2:
    				$data[$k]['verifystate']='审核通过';
    				break;
    			case 3:
    				$data[$k]['verifystate']='审核失败';
    				break;
    		}
    		$data[$k]['endtime']=date('Y-m-d',$data[$k]['endtime']);
    		$data[$k]['freshtime']=date('Y-m-d',$data[$k]['freshtime']);
    		$data[$k]['propress']=K('Resume1')->get_propress($data[$k]['rid']);
    	}
    	return $data;
    }
    /**
     * [resume_action 包括刷新简历 和删除简历]
     * @return [type] [description]
     */
    public function resume_action(){
    	$reidArr=Q('post.reid');
    	if(!$reidArr) return false;
    	//提升排名
    	if(Q('post.up')){
    		foreach ($reidArr as $k => $v) {
    			$where=array(
    					'rid'=>$v,
    					'user_uid'=>session('uid'),
    				);
    			$this->where($where)->save(array('freshtime'=>time()));
    		}
    		return true;
    	}
    	//删除
    	if(Q('post.delete')){
    		foreach ($reidArr as $k => $v) {
    			K('ResumeRelation')->del_resume($v,session('uid'));
    		}
    		return true;
    	}

    }
}
?>
