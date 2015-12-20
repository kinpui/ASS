<?php

/**
 *
 * 视图操作类
 *
 **/

class V{
  
  public static $view;

  /**
   *
   * 实例化视图操作类库
   **/

  public static function init( $config ){

    extract( $config );
    //实例化视图类库
    self::$view = new $view_type;

    foreach( $view_config as $key => $value ){
      self::$view-> $key = $value;
    }

  }

  /**
   *
   * 注入template模板方法
   *
   **/

  public static function assign($data){
    foreach( $data as $key=>$value ){
      self::$view->assign( $key,$value );
    }
  }

  /**
   *
   * 调取渲染模板方法
   *
   **/
  public static function display( $template ){
    self::$view->display( $template );
  }

}
