<?php

//全局配置
$config = array(

  /**
   *
   * 定义smarty 初始化配置选项
   * 定义了smarty 的 left_delimiter(左定界符)   为  {
   * 定义了smarty 的 right_delimiter(右定界符)  为 }
   * 定义了smarty 的 template_dir(模板目录)     为 template
   * 定义了smarty 的 compile_dir(模板缓存)      为 template_cecha
   *
   **/
  'viewconfig' => array(
    'left_delimiter'  => '{', 
    'right_delimiter' => '}', 
    'template_dir'    => 'template', 
    'compile_dir'     => 'data/template_cecha'
  ),

  /**
   *
   * 数据库配置数组
   * db_type      定义  数据库类型
   * db_host      定义  数据库主机地址
   * db_user      定义  数据库用户名
   * db_pwd       定义  数据库密码
   * db_name      定义  数据表名
   * db_prefix    定义  数据库前缀
   * db_charset   定义  数据库字符集
   *
   **/
  'dbconfig'  => array(
    'db_type'    => 'mysql',
    'db_host'    => 'localhost',
    'db_user'    => 'root',
    'db_pwd'     => '123456',
    'db_name'    => 'ASS',
    'db_prefix'  => 'ass_',
    'db_charset' => 'utf8'
  ) 

);
