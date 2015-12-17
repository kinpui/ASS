<?php
//入口
header("Content-type: text/html; charset=utf-8"); //设置编码

/*
 *引入function 方法
 **/
require_once("function.php");

//对浏览器传递来的字符串进行转义
$c = @$_GET['c'] ? filter($_GET['c']) : 'index';	
$m = @$_GET['m'] ? filter($_GET['m']) : 'index';

//实例化smarty
$smarty = ORG('Smarty/Smarty.class.php', 'Smarty', $viewconfig);

C($c,$m);
