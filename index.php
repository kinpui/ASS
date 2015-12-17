<?php
/**
 *
 * 这是创宇数码的售后管理系统
 * 系统的开发者: 张剑培
 * 我的联系方式: 15916357625
 * 系统开发日期: 2015-12-17
 * 
 * MVC开发模式
 * smaty 模板
 * 前端技术包含
 *  HTML5
 *  CSS3
 *  JavaScript
 *
 * 后端技术包括
 *  PHP
 *
 * 数据库使用
 *  Mysql
 *
 *
 **/
header("Content-type: text/html; charset=utf-8"); //设置编码

/*
 *引入function 方法
 **/
require_once("function.php");

//对浏览器传递来的字符串进行转义
$c = in_array($_GET['c'],$controllerAllow)?filter($_GET['c']):'index';	
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

//关闭(开启)缓存
$smarty->caching = false;

//设置缓存时间
$smarty->cache_lifetime = 120;

C($c,$m);
