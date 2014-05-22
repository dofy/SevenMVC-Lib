<?php /* Smarty version Smarty-3.1.11, created on 2014-05-22 03:06:45
         compiled from "D:\works\php\SevenMVC-Lib\demo\templates\book\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10432537d63aa4bfdc9-99028619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6104565d8c1ccfbdbb6263e11256c287d3d905c9' => 
    array (
      0 => 'D:\\works\\php\\SevenMVC-Lib\\demo\\templates\\book\\index.tpl',
      1 => 1400728002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10432537d63aa4bfdc9-99028619',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_537d63aa52c277_54642787',
  'variables' => 
  array (
    'books' => 0,
    '__controller' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537d63aa52c277_54642787')) {function content_537d63aa52c277_54642787($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<ul >
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['books']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <li ><a href="?c=<?php echo $_smarty_tpl->tpl_vars['__controller']->value;?>
&a=detail&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a> <em>by <?php echo $_smarty_tpl->tpl_vars['item']->value['author'];?>
</em> (Pages: <?php echo $_smarty_tpl->tpl_vars['item']->value['pages'];?>
)</li>
    <?php } ?>
</ul>

<p ><a href="?" >&lt;&lt; Go Back</a></p>

<?php echo $_smarty_tpl->getSubTemplate ("inc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>