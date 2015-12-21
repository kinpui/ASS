<?php
/*
 *用户默认访问控制器
 **/
class indexController
{
	public function index(){
			V::assign ( array( 'title'=>'快乐的一天', 'author'=>'开心的一天' ) );
			V::display( 'index.html' );
  }
}

