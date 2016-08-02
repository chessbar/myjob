<?php
/* 
* [职位类别管理模型]
* @Author: 
* @Date:   2014-06-22 20:39:55
* @Last Modified by:   Administrator
* @Last Modified time: 2014-07-27 17:39:39
*/
class PoscateModel extends Model{
	public $table='positioncate';
	//保存顶级职位类别
	public $topPos;
	//保存所有职位类别
	public $poscate;
	public function __init(){
		//读取缓存保存到模型里面
		$this->topPos=S('topPos',false,0,array('dir'=>CACHE_PATH));
		$this->poscate=S('poscate',false,0,array('dir'=>CACHE_PATH));
	}
	/**
	 * [update_city 更新缓存]
	 * @return [type] [description]
	 */
		public function update_cache(){
		//处理顶级职位类别缓存
			$topPos = $this->where(array('pid'=>0))->all();
			$temp = array();
			foreach ($topPos as $v) {
				$temp[$v['posid']] = $v;
			}
			S('topPos',$temp,0,array('dir'=>CACHE_PATH));
			//处理所有职位类别缓存
			$posCate = $this->all();
			$temp = array();
			foreach ($posCate as $v) {
				$temp[$v['posid']] = $v;
			}
			S('poscate',$temp,0,array('dir'=>CACHE_PATH));
		} 
		/**
		 * [get_data 得到职位信息 包括子类信息]
		 * @return [type] [description]
		 */
		public function get_data(){
			$temo=array();
			foreach($this->topPos as $k=>$v){
				$temp[$k]=$v;
				$temp[$k]['son']=$this->get_son_cate($v['posid']);
			}
			return $temp;
		}
		/**
		 * [get_son_cate 得到职位子类]
		 * @param  [type] $posid [description]
		 * @return [type]        [description]
		 */
		public function get_son_cate($posid){
			if(!$posid) return false;
			$temp=array();
			if(!$posid) return $temp;
			foreach ($this->poscate as $k=>$v) {
				if($v['pid']==$posid){
					$temp[$k]=$v;
				}
			}
			return $temp;
		}
		/**
		 * [get_posnum 获得顶级类别数目]
		 * @return [type] [description]
		 */
		public function get_posnum(){
			//读取缓存
			$posnum=S('posnum',false,0,array('dir'=>CACHE_PATH));
			if(!$posnum){
					$where=array(
					'showstate'=>1,
					'verifystate'=>2,
					'endtime'=>array('gt'=>time())
					);
				$temp=array();
				$composModel=K('ComPosition');
				foreach ($this->topPos as $k=>$v) {
					$posidArr=$this->get_son_id($v['posid']);
					$posidArr[]=$v['posid'];

					$temp[$k]=$v;
					$temp[$k]['num']=$composModel->where($where)->in(array('positioncate_posid'=>$posidArr))->count();
				}
				//设置缓存
				S('posnum',$temp,300,array('dir'=>CACHE_PATH));
				$posnum=$temp;
			}
			
			return $posnum;
		}
		/**
		 * [get_son_id 获得指定类别下面的子集]
		 * @param  [type] $cityid [description]
		 * @return [type]         [description]
		 */
		public function get_son_id($posid){
			$temp=array();
			foreach ($this->poscate as $k => $v) {
				if($posid==$v['pid']){
					$temp[]=$v['posid'];
					$temp=array_merge($temp,$this->get_son_id($v['posid']));
				}
			}
			return $temp;
		}
}
?>
