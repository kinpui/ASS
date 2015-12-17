<?php /* Smarty version Smarty-3.1.18, created on 2015-08-27 12:06:43
         compiled from "tpl\test.html" */ ?>
<?php /*%%SmartyHeaderCode:1374955defc4cb06f12-39706035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7030b0f524434067bc163bbe50f034f7ed2671e' => 
    array (
      0 => 'tpl\\test.html',
      1 => 1440677201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1374955defc4cb06f12-39706035',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55defc4cb4c283_08076145',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55defc4cb4c283_08076145')) {function content_55defc4cb4c283_08076145($_smarty_tpl) {?><html>
<head>
<meta charset="utf-8">
<title>测试smarty</title>
</head>
<body>
<p>这是html文件。下面是smarty生成的文字</p>
<?php echo $_smarty_tpl->tpl_vars['title']->value;?>

</body>
</html>
<?php }} ?>
