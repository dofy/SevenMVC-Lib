<?php /* Smarty version Smarty-3.1.11, created on 2014-05-22 02:35:45
         compiled from "D:\works\php\SevenMVC-Lib\demo\templates\default\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13458537d4d2dc8ce26-26321468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47de69777aef53a6b8696daefbc5621cbfffb4af' => 
    array (
      0 => 'D:\\works\\php\\SevenMVC-Lib\\demo\\templates\\default\\index.tpl',
      1 => 1400726128,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13458537d4d2dc8ce26-26321468',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_537d4d2dcd7d99_49180948',
  'variables' => 
  array (
    'users' => 0,
    'item' => 0,
    'books' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537d4d2dcd7d99_49180948')) {function content_537d4d2dcd7d99_49180948($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<a href="?c=user" >Users</a>
<ul >
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <li ><?php echo var_dump($_smarty_tpl->tpl_vars['item']->value);?>
</li>
    <?php } ?>
</ul>

<a href="?c=book" >Books</a>
<ul >
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['books']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <li ><?php echo var_dump($_smarty_tpl->tpl_vars['item']->value);?>
</li>
    <?php } ?>
</ul>

<?php echo $_smarty_tpl->getSubTemplate ("inc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>