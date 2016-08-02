<?php
//简历
class ResumeControl extends PublicControl{
	private $reid;
    private $postReid;
	public function __auto(){
		$resume1Model=K('Resume1');
		if($reid=Q('get.reid',NULL,'intval')){
			$resume1Model->check_user($reid);
            $this->check_status($reid,METHOD);
			$stepArr=$resume1Model->get_step($reid);
            $propress=$resume1Model->get_propress($reid);
            $this->assign('propress',$propress);
			$this->assign('stepArr',$stepArr);
			$this->reid=$reid;
		}else{
			$this->reid=0;
		}
		if($postReid=Q('post.reid',NULL,'intval')){
			$resume1Model->check_user($postReid);
			$this->postReid=$postReid;
		}else{
			$this->postReid=0;
		}
		
	}
	/**
	 * [make1 简历第一阶段]
	 * @return [type] [description]
	 */
    function make1(){
    	$resume1Model=K('Resume1');
    	if(IS_POST){
    		//自动验证
    		if(!$resume1Model->create()) $this->error($resume1Model->error);
    		if($reid=$resume1Model->add_data()){
    			$resume1Model->add_step($reid,1);
    			//session('reid',$reid);
    			go(U('make2',array('reid'=>$reid)));
    		}else{
				$this->error('简历个数不得超过三个');
    		}
    		
    	}
        if($reid=$this->reid){
            if($resume1Model->have_info($reid)) go(U('make1_update',array('reid'=>$reid)));
        }
    	$this->display();
    }
    /**
     * [make1_update 简历第一阶段修改]
     * @return [type] [description]
     */
    public function make1_update(){
    	$resume1Model=K('Resume1');
    	$reid=$this->reid;
    	//更新数据
    	if(IS_POST){
    		if(!$resume1Model->create()) $this->error($resume1Model->error);
    		$resume1Model->update_data();
    		go(U('make2',array('reid'=>$reid)));
    	}
    	//获得数据
    	$data=$resume1Model->get_data($reid);
    	$this->assign('data',$data);
    	$this->display();

    }
    /**
     * [make2 简历第二阶段]
     * @return [type] [description]
     */
    public function make2(){
        $resume2Model=K('Resume2');
        if(IS_POST){
            $reid=$this->postReid;
            if(!$resume2Model->create()) $this->error($resume2Model->error);
            $resume2Model->add_data();
            //中间表添加
            if(!K('ResumePos')->add_data($reid)) $this->error(K('ResumePos')->error);
            //增加步骤
            K('Resume1')->add_step($reid,2);
                //跳转到3
            go(U('make3',array('reid'=>$reid))); 
        }
    	if($this->reid){
            $CityModel=K('City');
            //$CityModel->update_city();
            $topCity=$CityModel->topCity;
            $this->assign('topCity',$topCity);
            //
            $pos=K('Poscate')->get_data();
            $this->assign('pos',$pos);
            if($resume2Model->have_info($this->reid)) go(U('make2_update',array('reid'=>$this->reid)));
            $this->display();die;
        }
        go(U('make1'));
    }
    /**
     * [make2_update 简历第二阶段修改]
     * @return [type] [description]
     */
    public function make2_update(){
        $resume2Model=K('Resume2');
        if(IS_POST){
            $reid=$this->postReid;
            if(!$resume2Model->create()) $this->error($resume2Model->error);
            //关联表修改
            if(!K('ResumePos')->update_data(Q('post.posid'),$reid)) $this->error(K('ResumePos')->error);
            $resume2Model->update_data($reid);
                //跳转到3
            go(U('make3',array('reid'=>$reid))); 
        }
        if($this->reid){
            $reid=$this->reid;
           // if(!$resume2Model->have_info($reid)) go(U('make2'),array('reid'=>$reid));
            //获得数据
            $data=$resume2Model->get_data($reid);
            $this->assign('data',$data);
            //得到顶级城市
            $topCity=K('City')->topCity;
            $this->assign('topCity',$topCity);
            //得到二级城市
            $sonCity=K('City')->get_son_city($data['first_cityid']);
            $this->assign('sonCity',$sonCity);
            //得到所有职位
            $pos=K('Poscate')->get_data();
            $this->assign('pos',$pos);
            //得到已选择的职位的id
            $posid=K('ResumePos')->get_posid($reid);
            $this->assign('posid',$posid);
            $this->display();
            die;
        }
        go(U('make1'));

    }
    /**
     * [make3 第三阶段]
     * @return [type] [description]
     */
    public function make3(){
        $resume3Model=K('Resume3');
        if(IS_POST){
            $reid=$this->postReid;
            if(!$resume3Model->create()) $this->error($resume3Model->error);
            $resume3Model->add_data();
            //添加步骤
            K('Resume1')->add_step($reid,3);
            go(U('make4',array('reid'=>$reid))); 
        }
        if($reid=$this->reid){
            //判断是否有数据  有则到修改界面
            if($resume3Model->have_info($reid)) go(U('make3_update',array('reid'=>$reid)));
           $this->display();die; 
        }
        go(U('make1'));
    }
    /**
     * [make3_update 第三阶段修改]
     * @return [type] [description]
     */
    public function make3_update(){
        $resume3Model=K('Resume3');
        if(IS_POST){
            $reid=$this->postReid;
            if(!$resume3Model->create()) $this->error($resume3Model->error);
            $resume3Model->update_data($reid);
                //跳转到3
            go(U('make4',array('reid'=>$reid))); 
        }
        if($reid=$this->reid){
            $data=$resume3Model->get_data($reid);
            $this->assign('data',$data);
            $this->display();
            die;
        }
        go(U('make1'));
    }
    /**
     * [make4 第四阶段]
     * @return [type] [description]
     */
    public function make4(){
        $resume4Model=K('Resume4');
        if(IS_POST){
            $reid=$this->postReid;
            if(!$resume4Model->create()) $this->error($resume4Model->error);
            $resume4Model->add_data();
            $this->success('添加成功！');
        }
        if($reid=$this->reid){
            $eduData=$resume4Model->get_data($reid);
            $this->assign('eduData',$eduData);
        }
        $this->display();
    }
    /**
     * [make4_update 第四阶段修改]
     * @return [type] [description]
     */
    public function make4_update(){
        $resume4Model=K('Resume4');
        if(IS_POST){
            $reid=$this->postReid;
            if(!$resume4Model->create()) $this->error($resume4Model->error);
            $reid4=Q('post.reid4',0,'intval');
            $resume4Model->update_data($reid4,$reid);
            $this->success("修改成功！",U('make4',array('reid'=>$reid)));
        }
        if($reid=$this->reid){
            $reid4=Q('get.reid4',0,'intval');
            //获得单条数据
            $data=$resume4Model->get_id_data($reid4,$reid);
            if(!$data) go(U('make4',array('reid'=>$reid)));
            $this->assign('data',$data);
            $this->display();die;
        }
        go('make1');
    }
    /**
     * [make4_del 删除教育经历]
     * @return [type] [description]
     */
    public function make4_del(){
        if($reid=$this->reid){
            K('Resume4')->del_data(Q('get.reid4',0,'intval'),$reid);
            if(K('Resume4')->where(array('resume1_rid'=>$reid))->count()<1){
                K('Resume1')->minus_step($reid,4);
            }
            $this->success('删除成功！');
        }
        go('make1');
    }
    /**
     * [make5 第五阶段]
     * @return [type] [description]
     */
    public function make5(){
        $resume5Model=K('Resume5');
        if(IS_POST){
            $reid=$this->postReid;
            if(!$resume5Model->create()) $this->error($resume5Model->error);
            $resume5Model->add_data();
            $this->success('添加成功！');
        }
        if($reid=$this->reid){
            $data=$resume5Model->get_data($reid);
            $this->assign('data',$data);
            $this->display();die;
        }
        go(U('make1'));
    }
    /**
     * [make5_update 第五阶段修改]
     * @return [type] [description]
     */
    public function make5_update(){
        $resume5Model=K('Resume5');
        if(IS_POST){
            $reid=$this->postReid;
            if(!$resume5Model->create()) $this->error($resume5Model->error);
            $reid5=Q('post.reid5',0,'intval');
            $resume5Model->update_data($reid5,$reid);
            $this->success("修改成功！",U('make5',array('reid'=>$reid)));
        }
        if($reid=$this->reid){
            $reid5=Q('get.reid5',0,'intval');
            //获得单条数据
            $data=$resume5Model->get_id_data($reid5,$reid);
            if(!$data) go(U('make5',array('reid'=>$reid)));
            $this->assign('data',$data);
            $this->display();die;
        }
        go('make1');
    }
    /**
     * [make5_del description]
     * @return [type] [description]
     */
    public function make5_del(){
        if($reid=$this->reid){
            K('Resume5')->del_data(Q('get.reid5',0,'intval'),$reid);
            $this->success('删除成功！');
        }
        go('make1');
    }
    /**
     * [make6 第六阶段]
     * @return [type] [description]
     */
    public function make6(){
        $resume6Model=K('Resume6');
        if(IS_POST){
            $reid=$this->postReid;
            if(!$resume6Model->create()) $this->error($resume6Model->error);
            $resume6Model->add_data();
            $this->success('添加成功！');
        }
        if($reid=$this->reid){
            $data=$resume6Model->get_data($reid);
            $this->assign('data',$data);
            $this->display();die;
        }
        go(U('make1'));
    }
    /**
     * [make5_update 第6阶段修改]
     * @return [type] [description]
     */
    public function make6_update(){
        $resume6Model=K('Resume6');
        if(IS_POST){
            $reid=$this->postReid;
            if(!$resume6Model->create()) $this->error($resume6Model->error);
            $reid6=Q('post.reid6',0,'intval');
            $resume6Model->update_data($reid6,$reid);
            $this->success("修改成功！",U('make6',array('reid'=>$reid)));
        }
        if($reid=$this->reid){
            $reid6=Q('get.reid6',0,'intval');
            //获得单条数据
            $data=$resume6Model->get_id_data($reid6,$reid);
            if(!$data) go(U('make6',array('reid'=>$reid)));
            $this->assign('data',$data);
            $this->display();die;
        }
        go('make1');
    }
    /**
     * [make6_del description]
     * @return [type] [description]
     */
    public function make6_del(){
        if($reid=$this->reid){
            K('Resume6')->del_data(Q('get.reid6',0,'intval'),$reid);
            $this->success('删除成功！');
        }
        go('make1');
    }
    public function make7(){
        $resume7Model=K('Resume7');
        if(IS_POST){
            $reid=$this->postReid;
            if($resume7Model->update_face($reid)) $this->success('上传成功',U('ResumeManager/preview',array('reid'=>$reid)));
            $this->error($Resume7Model->error);
        }
        if($reid=$this->reid){
            $data=$resume7Model->get_data($reid);
            $this->assign('data',$data);
            $this->display();die;
        }
        go(U('make1'));
    }
    public function check_status($reid,$method){
        //简历4、5、6、7可以不填写
        $stepArr=K('Resume1')->get_step($reid);
        if(!$stepArr) go(U('make1'));
        $data=array();
        $step=substr($method,4,1);
        switch (true) {
            case $step>=2 && !in_array(1, $stepArr):
                $data['method']='make1';
                $data['msg']='基本信息';
                break;
            case $step>=3 && !in_array(2, $stepArr):
                $data['method']='make2';
                $data['msg']='求职意向';
                break; 
            case $step>=4 && !in_array(3, $stepArr):
                $data['method']='make3';
                $data['msg']='技能特长';
                break; 
        }
        if($data){
           $this->error("请先完成 ".$data['msg'],U($data['method'],array('reid'=>$reid))); 
        }
        
    }
    /**
     * [manager 简历管理]
     * @return [type] [description]
     */
    public function manager(){
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
?>