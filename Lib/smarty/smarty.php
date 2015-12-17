<?php
//引入 smarty 文件
require_once("Smarty.class.php");

//实例化smarty 类
$smarty = new smarty();
/*
 *smarty 配置
 *left_delimiter 左定界符
 *right_delimiter 右定界符
 *template_dir html模板地址
 *compile_dir 模板编译生成的目录
 *cache_dir 缓存
 **/

$smarty->left_delimiter = "{";
$smarty->right_delimiter = "}";
$smarty->template_dir = "tpl";
$smarty->compile_dir = "template_c";
$smarty->cache_dir = "cache";

//开启缓存
$smarty->caching = true;

//设置缓存时间
$smarty->cache_lifetime = 120;


//使用smarty实例
//注入变量
$smarty->assign("title","标题在此");

//显示文件
$smarty->display("test.html");
