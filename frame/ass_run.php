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
include_once( $current_dir.'/libs/include_list.php' );

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
    D::init( self::$config['db_config'] );
  }

  //初始化视图模型
  private static  function init_view(){
    V::init( self::$config['view_config'] );
  }

  //初始化控制器名称
  private static  function init_controller(){
    self::$controller = isset( $_GET['c'] )?( $_GET['c'] ) : 'index';
  }

  //初始化模型名称
  private static  function init_method(){
    self::$method     = isset( $_GET['m'] )?( $_GET['m'] ) : 'index';
  }


  //运行
  public static   function run( $config ){
    self::$config = $config;

    //初始化数据库
    self::init_db();

    //初始化视图引擎
    self::init_view();

    //接收方法
    self::init_method();

    //接收控制器
    self::init_controller();

    C( self::$controller,self::$method );
  }

}

