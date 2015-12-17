<?php
//入口

//设置编码
header("Content-type: text/html; charset=utf-8"); 

//引入配置文件
//引入框架

require_once( 'config.php' );
require_once( 'frame/ass_run.php');

//运行参数传入配置文件中的配置
ass::run( $config );

