<?php
/* 
* [企业基本信息模型]
* @Author: 
* @Date:   2014-07-16 20:13:30
* @Last Modified by:   Administrator
* @Last Modified time: 2014-07-17 20:11:32
*/
class ComBaseInfoModel extends Model{
	public $table='company_baseinfo';
	public $validate=array(
		array('companyname','nonull','企业名称不得为空！',2,3),
		array('companyname','maxlen:45','企业名称不得超过45个字！',2,3),
		array('companyname','nonull','企业名称不得为空！',2,3),
		array('nature','num:1,9','企业性质选择错误！',2,3),
		array('city_one','num:1,35','所在地区选择错误！',2,3),
		array('scale','num:1,6','公司规模选择错误！',2,3),
		array('registermoney','num:1,10000000','注册资金不正确！',3,3),
		array('companypeople','nonull','联系人不得为空！',2,3),
		array('companypeople','maxlen:10','联系人不得超过10个字！',2,3),
		array('companynumber','phone','联系电话格式不正确',2,3),
		array('companymail','email','联系邮箱格式不正确',2,3),
		array('companyurl','http','公司网址格式不正确',3,3),
		array('companyaddress','maxlen:100','通讯地址不超过100个字',3,3),
		array('companyintro','minlen:50','公司简介不少于50个字',2,3),
		array('companyintro','maxlen:500','公司简介不超过500个字',2,3),

		);
	public $auto=array(
		array('user_uid','_uid','method',2,1),
		array('city_cityid','_city','method',2,3),
		);
	public function _uid(){
		return session('uid');
	}
	public function _city(){
		$cityOne=Q('post.city_one',0,'intval');
		$citySecond=Q('post.city_second',0,'intval');
		if($citySecond!=0) return $citySecond;
		return $cityOne;
	}
	public function add_data(){
		return $this->add();
	}
	/**
	 * [get_data 得到数据]
	 * @return [type] [description]
	 */
	public function get_data(){
		$data=$this->where(array('user_uid'=>session('uid')))->find();
		$data=K('City')->get_old_city($data,'city_cityid');
		return $data;
	}
	public function have_info($uid){
		return $this->where(array('user_uid'=>$uid))->getField('cbid');
	}
	public function update_data(){
		$this->where(array('user_uid'=>session('uid')))->save();
	}
}
