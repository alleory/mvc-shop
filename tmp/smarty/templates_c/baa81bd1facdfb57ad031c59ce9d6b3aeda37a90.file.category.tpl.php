<?php /* Smarty version Smarty-3.1.22-dev, created on 2016-10-11 11:21:31
         compiled from "..\views\default\category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2273657fca10b618a86-78833706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'baa81bd1facdfb57ad031c59ce9d6b3aeda37a90' => 
    array (
      0 => '..\\views\\default\\category.tpl',
      1 => 1470428975,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2273657fca10b618a86-78833706',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rsCategory' => 0,
    'rsProducts' => 0,
    'item' => 0,
    'rsChildCats' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.22-dev',
  'unifunc' => 'content_57fca10b672855_86668151',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fca10b672855_86668151')) {function content_57fca10b672855_86668151($_smarty_tpl) {?>
<h1>Товары категории <?php echo $_smarty_tpl->tpl_vars['rsCategory']->value['name'];?>
</h1>

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
<?php } ?>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsChildCats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
  <h2><a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></h2>
<?php } ?>
<?php }} ?>
