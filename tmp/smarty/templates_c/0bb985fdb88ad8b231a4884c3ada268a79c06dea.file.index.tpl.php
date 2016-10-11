<?php /* Smarty version Smarty-3.1.22-dev, created on 2016-10-11 11:21:14
         compiled from "..\views\default\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1761357fca0fad32fb9-50502402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bb985fdb88ad8b231a4884c3ada268a79c06dea' => 
    array (
      0 => '..\\views\\default\\index.tpl',
      1 => 1470220233,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1761357fca0fad32fb9-50502402',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rsProducts' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.22-dev',
  'unifunc' => 'content_57fca0fad4b613_12879383',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fca0fad4b613_12879383')) {function content_57fca0fad4b613_12879383($_smarty_tpl) {?>

<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']++;
?>
  <div style="float: left; padding: 0px 30px 40px 0px;">
    <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
      <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="100">
    </a><br/>
    <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
  </div>
    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%3==0) {?>
      <div style='clear: both;'></div>
    <?php }?>
<?php } ?><?php }} ?>
