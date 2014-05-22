<?php /* Smarty version Smarty-3.1.11, created on 2014-05-22 03:09:51
         compiled from "D:\works\php\SevenMVC-Lib\demo\templates\user\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9153537d62dda81424-75498733%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eaa91f05c611c222ec3368be3e5f07ac26e5afd4' => 
    array (
      0 => 'D:\\works\\php\\SevenMVC-Lib\\demo\\templates\\user\\index.tpl',
      1 => 1400727993,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9153537d62dda81424-75498733',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_537d62ddaef0e0_31105029',
  'variables' => 
  array (
    'users' => 0,
    '__controller' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537d62ddaef0e0_31105029')) {function content_537d62ddaef0e0_31105029($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<ul >
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <li ><a href="?c=<?php echo $_smarty_tpl->tpl_vars['__controller']->value;?>
&a=detail&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></li>
    <?php } ?>
</ul>

<p ><a href="?" >&lt;&lt; Go Back</a></p>

<?php echo $_smarty_tpl->getSubTemplate ("inc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>