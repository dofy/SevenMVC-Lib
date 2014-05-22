<?php /* Smarty version Smarty-3.1.11, created on 2014-05-22 03:10:11
         compiled from "D:\works\php\SevenMVC-Lib\demo\templates\user\detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19749537d6a819a8c14-27905172%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b2824980c0bff8ee989ecce45e1a8529d9a69d5' => 
    array (
      0 => 'D:\\works\\php\\SevenMVC-Lib\\demo\\templates\\user\\detail.tpl',
      1 => 1400728210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19749537d6a819a8c14-27905172',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_537d6a81a1a940_17366773',
  'variables' => 
  array (
    'item' => 0,
    '__controller' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537d6a81a1a940_17366773')) {function content_537d6a81a1a940_17366773($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


[ DETAIL ]

    <?php if ($_smarty_tpl->tpl_vars['item']->value){?>
    <h2><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</h2>
    <em><?php echo $_smarty_tpl->tpl_vars['item']->value['age'];?>
</em> years old.
    <?php }else{ ?>
    The User is not found.
    <?php }?>

<p ><a href="?c=<?php echo $_smarty_tpl->tpl_vars['__controller']->value;?>
" >&lt;&lt; Go Back</a></p>

<?php echo $_smarty_tpl->getSubTemplate ("inc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>