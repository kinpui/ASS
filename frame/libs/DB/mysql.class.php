<?php

/**
 *
 * mysql
 * 数据库类库
 *
 **/

class mysql{

  /**
   *
   * 连接数据库函数
   * function name : connect;
   * @param array $config 数据库配置信息
   * return bool
   *  true  连接成功
   *  false 连接失败
   *
   **/

  function connect( $config ){


    //extract(array,extract_rules,prefix)
    //提取数组
    extract( $config );

    /**
     * 数据库连接符返回到$con 
     * 连接失败则报错
     **/
    if( !($con = mysql_connect( $db_host,$db_user,$db_pwd )) ){
      $this->e();
    }

    /**
     * 选择数据表
     * 连接失败报错
     **/
    if( !mysql_select_db( $db_name,$con ) ){
      $this->e();
    }

    //设置编码
    mysql_query( "set names ".$db_charset );
     
  }

  /**
   *
   * 数据库操作错误提示
   *
   **/
  function e(){
    
    //制止运行并输出
    die( '操作有误:'. mysql_error() );
  }

}

