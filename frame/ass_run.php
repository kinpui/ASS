<?php
/**
 *
 * 框架入口
 *
 **/

//设置当前框架路径
$current_dir = dirname( __FILE__ );

//引入文件列表
//该文件中存在一个需要引入的文件列表。在一个paths array 里
include_once( $current_dir.'/include_list.php' );

//将paths 中的path 逐一引入
foreach( $paths as $path ){
  include_once( $current_dir.'/'.$path );
}


//定义ass类
class ass{
  //写到这里************************************
  public static $controller;
  public static $method;

}

