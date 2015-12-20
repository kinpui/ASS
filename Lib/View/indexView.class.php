<?php
/*
 *这个页面将数据呈现给用户查看
 **/
class indexView
{
	public function display($data){
    //全局化变量smarty
    
    VIEW::assign( 'index','首页' );
    VIEW::display( 'index.html' );

	}
}

