<?php
/* 
* [****************]
* @Author: 
* @Date:   2014-07-13 17:22:34
* @Last Modified by:   Administrator
* @Last Modified time: 2014-07-26 10:32:22
*/
class ComInfoControl extends PublicControl{
	/**
	 * [baseInfo 信息基本]
	 * @return [type] [description]
	 */
	public function baseInfo(){
		$cbiModel=K('ComBaseInfo');
		if(IS_POST){
			if(!$cbiModel->create()) $this->error($cbiModel->error);
			$cbiModel->add_data();
			$this->success('添加成功！');
		}
		$CityModel=K('City');
        //$CityModel->update_city();
        $topCity=$CityModel->topCity;
        $this->assign('topCity',$topCity);
        if( $cbiModel->have_info(session('uid'))) go(U('edit_baseinfo'));
		$this->display();
	}
	public function edit_baseinfo(){
		$cbiModel=K('ComBaseInfo');
		if(IS_POST){
			if(!$cbiModel->create()) $this->error($cbiModel->error);
			$cbiModel->update_data();
			$this->success('修改成功！');
		}
		$data=$cbiModel->get_data();
		$this->assign('data',$data);
		//得到顶级城市
            $topCity=K('City')->topCity;
            $this->assign('topCity',$topCity);
            //得到二级城市
            $sonCity=K('City')->get_son_city($data['first_cityid']);
            $this->assign('sonCity',$sonCity);
		$this->display();
	}
	/**
	 * [license 营业执照]
	 * @return [type] [description]
	 */
	public function license(){
		$comLicenseModel=K('ComLicense');
		if(IS_POST){
			if(!$comLicenseModel->create()) $this->error($comLicenseModel->error);
            if($comLicenseModel->update_license()) $this->success('上传成功');
        }
        $data=$comLicenseModel->get_data();
        $this->assign('data',$data);
		$this->display();
	}
	public function logo(){
		$comLogoModel=K('ComLogo');
		if(IS_POST){
            if($comLogoModel->update_logo()) $this->success('上传成功');
            $this->error($comLogoModel->error);
        }
        $data=$comLogoModel->get_data();
        $this->assign('data',$data);
		$this->display();
	}
	/**
     * [ajax_city description]
     * @return [type] [description]
     */
    public function ajax_city(){
        if(IS_AJAX){
            $cityId = Q('post.cityid',0, 'intval');
            //获得子级城市
            $data=K('City')->get_son_city($cityId);
            $this->ajax($data);  
        }
    }
}

