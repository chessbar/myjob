<?php
//测试控制器类
class ResumeManagerControl extends PublicControl{
	public function index(){
		if(IS_POST){
			$resumeModel=K('Resume1');
			if(!$resumeModel->resume_action()) $this->error("请选择一张简历");
			$this->success('操作成功！');
			P($_POST);
		}
		$data=K('Resume1')->get_resume(session('uid'));
		$this->assign('data',$data);
		$this->display();
	}
	/**
	 * [del_resume 删除简历]
	 * @return [type] [description]
	 */
	public function del_resume(){
		$reid=Q('get.reid',0,'intval');
		K('Resume1')->check_user($reid);
		K('ResumeRelation')->del_resume($reid,session('uid'));
		$this->success('删除成功！');
	}
	/**
	 * [preview 简历预览]
	 * @return [type] [description]
	 */
    function preview(){
    	$data=K('ResumeView')->get_join_resume(session('uid'));
    	if(!$data) $this->error('简历不存在',U('make1'));
    	$this->assign('data',$data);
        $this->display();
    }
    /**
     * [private_set 隐私设置]
     * @return [type] [description]
     */
    function private_set(){

    	$this->display();
    }
}
?>