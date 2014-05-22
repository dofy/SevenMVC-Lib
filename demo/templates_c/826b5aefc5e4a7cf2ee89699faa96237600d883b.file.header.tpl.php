<?php /* Smarty version Smarty-3.1.11, created on 2014-05-22 02:35:53
         compiled from "D:\works\php\SevenMVC-Lib\demo\templates\inc\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2841537d4e926d45c0-03952219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '826b5aefc5e4a7cf2ee89699faa96237600d883b' => 
    array (
      0 => 'D:\\works\\php\\SevenMVC-Lib\\demo\\templates\\inc\\header.tpl',
      1 => 1400726152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2841537d4e926d45c0-03952219',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_537d4e926ee5b8_84966544',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537d4e926ee5b8_84966544')) {function content_537d4e926ee5b8_84966544($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('main.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<!doctype html>
<html>
<head>
<title> <?php echo $_smarty_tpl->getConfigVariable('title');?>
 - <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 </title>
<meta charset="UTF-8" />
<meta name="generator" content="editplus" />
<meta name="author" content="Seven Yu" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" href="css/main.css" />
<script src="js/main.js" ></script>
</head>

<body>

<h1 ><?php echo $_smarty_tpl->getConfigVariable('title');?>
</h1>
<h3 >[ <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 ]</h3><?php }} ?>