<?php /* Smarty version Smarty-3.1.11, created on 2014-05-22 03:09:11
         compiled from "D:\works\php\SevenMVC-Lib\demo\templates\book\detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28347537d694d9db435-03216606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1100fc90d821764b93edc14fb1aa5b7b03bc86b0' => 
    array (
      0 => 'D:\\works\\php\\SevenMVC-Lib\\demo\\templates\\book\\detail.tpl',
      1 => 1400728150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28347537d694d9db435-03216606',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_537d694da5bf02_07418513',
  'variables' => 
  array (
    'item' => 0,
    '__controller' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537d694da5bf02_07418513')) {function content_537d694da5bf02_07418513($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


[ DETAIL ]

    <?php if ($_smarty_tpl->tpl_vars['item']->value){?>
    <h2><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h2>
    <em>by <?php echo $_smarty_tpl->tpl_vars['item']->value['author'];?>
</em> (Pages: <?php echo $_smarty_tpl->tpl_vars['item']->value['pages'];?>
)
    <?php }else{ ?>
    The Book is not found.
    <?php }?>

<p ><a href="?c=<?php echo $_smarty_tpl->tpl_vars['__controller']->value;?>
" >&lt;&lt; Go Back</a></p>

<?php echo $_smarty_tpl->getSubTemplate ("inc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>