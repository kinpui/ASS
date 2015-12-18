<?php
/**
 *
 * 数据库操作类
 *
 **/

class DB{
  public static $db;

  /**
   *
   * 初始化数据库操作类
   **/

  public static function init( $dbtype,$config ){
    //实例化数据库操作类
    self::$db = new $dbtype;

    //链接数据库
    self::$db = connect( $config );
  }

  //下面是无尽的操作库方法...


}
