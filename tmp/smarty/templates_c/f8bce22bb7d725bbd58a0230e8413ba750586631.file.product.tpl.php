<?php /* Smarty version Smarty-3.1.22-dev, created on 2016-10-11 11:21:32
         compiled from "..\views\default\product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2477757fca10c7e6691-69259547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8bce22bb7d725bbd58a0230e8413ba750586631' => 
    array (
      0 => '..\\views\\default\\product.tpl',
      1 => 1471199054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2477757fca10c7e6691-69259547',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rsProduct' => 0,
    'itemInCart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.22-dev',
  'unifunc' => 'content_57fca10c82db33_64656384',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fca10c82db33_64656384')) {function content_57fca10c82db33_64656384($_smarty_tpl) {?>
<h3><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</h3>

<img width="575" src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
">
Стоимость: <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>


<a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if (!$_smarty_tpl->tpl_vars['itemInCart']->value) {?>class="hideme"<?php }?> href="#" onClick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" alt="Удалить из корзину">Удалить из корзину</a>
<a id="addCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value) {?>class="hideme"<?php }?> href="#" onClick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" alt="Добавить в корзину">Добавить в корзину</a>
<p> Описание <br /><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</p>
<?php }} ?>
