<?php
/*
 *引入function 方法
 **/
header("Content-type: text/html; charset=utf-8"); //设置编码
require_once("function.php");
$c = in_array($_GET['c'],$controllerAllow)?filter($_GET['c']):'index';	//对浏览器传递来的字符串进行转义
$m = in_array($_GET['m'],$methodAllow)?filter($_GET['m']):'index';
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

C($c,$m);
