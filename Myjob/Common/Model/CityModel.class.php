<?php
/* 
* [城市管理模型]
* @Author: 
* @Date:   2014-06-22 19:34:58
* @Last Modified by:   Administrator
* @Last Modified time: 2014-07-27 17:38:10
*/
class CityModel extends Model{
	public $table='city';
	//所有城市
	public $city;
	// 顶级城市
	public $topCity;
	/**
	 * [__init ]
	 * @return [type] [description]
	 */
	public function __init(){
		//读取缓存保存到模型里面
		$this->city=S('city',false,0,array('dir'=>CACHE_PATH));
		$this->topCity=S('topCity',false,0,array('dir'=>CACHE_PATH));
	}
	/**
	 * [update_city 更新缓存]
	 * @return [type] [description]
	 */
	public function update_city(){
			//查找所有城市
			$city = $this->all();
			$temp = array();
			foreach ($city as $v) {
				$temp[$v['cityid']] = $v;
			}
			S('city',$temp,0,array('dir'=>CACHE_PATH));
			//查找顶级城市
			$topCity = $this->where(array('pid'=>0))->all();
			$temp = array();
			foreach ($topCity as $v) {
				$temp[$v['cityid']] = $v;
			}
			S('topCity',$temp,0,array('dir'=>CACHE_PATH)); 
	}
	/**
	 * [get_son_city 获得子集城市]
	 * @return [type] [description]
	 */
	public function get_son_city($pid){
		if(!$pid) return false;
		return $this->where(array('pid'=>$pid))->all();
	}

	public function get_old_city($data,$key){
		//是否选择的为顶级城市
		foreach ($this->topCity as $v) {
			if($v['cityid']==$data[$key]){
				$data['first_cityid']=$v['cityid'];
				$data['second_cityid']=0;
				$data['first_cityname']=$v['cityname'];
				$data['second_citynme']='';
				$data['total_citynme']=$v['cityname'];
				return $data;
			}
		}
		//选择的为二级城市
		foreach ($this->city as $v) {
			if($v['cityid']==$data[$key]){
				$data['first_cityid']=$v['pid'];
				$data['second_cityid']=$v['cityid'];
				$data['first_cityname']=$this->get_cityname($v['pid']);
				$data['second_citynme']=$v['cityname'];
				$data['total_citynme']=$data['first_cityname'].'/'.$data['second_cityname'];
				return $data;
			}
		}
	}
	public function get_cityname($cityid){
		foreach ($this->city as $k => $v) {
			if($cityid==$k) return $v['cityname'];
		}
	}
	/**
	 * [get_citynum 得到城市下面的职位数目]
	 * @return [type] [description]
	 */
	public function get_citynum(){
		//读取缓存
		$citynum=S('citynum',false,0,array('dir'=>CACHE_PATH));
		if(!$citynum){
			$where=array(
					'showstate'=>1,
					'verifystate'=>2,
					'endtime'=>array('gt'=>time())
					);
			$temp=array();
			$composModel=K('ComPosition');
			foreach ($this->topCity as $k => $v) {
				$cityidArr=$this->get_son_id($v['cityid']);
				$cityidArr[]=$v['cityid'];
				$temp[$k]=$v;
				$temp[$k]['num']=$composModel->where($where)->in(array('city_cityid'=>$cityidArr))->count();

			}
			//设置缓存
			S('citynum',$temp,300,array('dir'=>CACHE_PATH));
			$citynum=$temp;
		}
		return $citynum;
	}
	public function get_son_id($cityid){
		$temp=array();
		foreach ($this->city as $v) {
			if($cityid==$v['pid']){
				$temp[]=$v['cityid'];
				$temp=array_merge($temp,$this->get_son_id($v['cityid']));
			}
		}
		return $temp;
	}
}
?>
