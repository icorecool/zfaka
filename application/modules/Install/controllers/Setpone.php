<?php

/*
 * 功能：安装模块
 * Author:资料空白
 * Date:20180626
 */

class SetponeController extends BasicController
{

	public function init()
    {
        parent::init();
    }

    public function indexAction()
    {
		if(file_exists(APP_PATH.'/conf/install.lock')){
			$this->redirect("/product/");
			return FALSE;
		}else{
			$data = array();
			$this->getView()->assign($data);
		}
    }
	

}