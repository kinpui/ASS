<?php
/*
 *用户默认访问控制器
 **/
class indexController
{
	public function index(){
		global $view;

		//访问数据模型
		$indexData = M('index');
		$data = $indexData->show('用户误闯入');

		//调用视图模型进行渲染
		$view = V('index');
		$view->display($data);
	}
}

