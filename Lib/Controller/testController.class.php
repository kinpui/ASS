<?php
class testController{
	function show(){
		//实例化模型文件
		//控制器作用是调用模型,模型负责产生数据,模型最终调用视图类去显示数据
		global $view;
		$testModel = M('test');
		$data = $testModel->get();
		
		//实例化视图类
		$testView = V('test');
		$testView->display($data);
	}
}
