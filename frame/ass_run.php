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
  public static   $controller;
  public static   $method;

  //私有
  private static  $config;

  //初始化数据库
  private static  function init_db(){
    DB::init( self::$config['dbconfig'] );
  }

  //初始化视图模型
  private static  function init_view(){
    VIEW::init( self::$config['viewconfig'] );
  }

  //初始化控制器名称
  private static  function init_controller(){
    self::$controller = isset( $_GET['c'] )?dsddslashes( $_GET['c'] ) : 'index';
  }

  //初始化模型名称
  private static  function init_method(){
    self::$method     = isset( $_GET['m'] )?dsddslashes( $_GET['c'] ) : 'index';
  }


  //运行
  public static   function run( $config ){
    self::$config = $config;
    self::init_db();
    self::init_view();
    self::init_method();
    self::init_controller();

    C( self::$controller,self::$method );
  }

}

