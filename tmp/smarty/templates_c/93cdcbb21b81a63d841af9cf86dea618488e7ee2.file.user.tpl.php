<?php /* Smarty version Smarty-3.1.22-dev, created on 2016-10-11 11:13:03
         compiled from "..\views\default\user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2300757c53faf341519-88048525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93cdcbb21b81a63d841af9cf86dea618488e7ee2' => 
    array (
      0 => '..\\views\\default\\user.tpl',
      1 => 1476173533,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2300757c53faf341519-88048525',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.22-dev',
  'unifunc' => 'content_57c53faf6d3c36_55262486',
  'variables' => 
  array (
    'arUser' => 0,
    'rsUserOrders' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c53faf6d3c36_55262486')) {function content_57c53faf6d3c36_55262486($_smarty_tpl) {?>

<h1>Ваши регистрационные данные</h1>
<table border="0">
  <tr>
    <td>Логин (email)</td>
    <td><?php echo $_smarty_tpl->tpl_vars['arUser']->value['email'];?>
</td>
  </tr>
   <tr>
    <td>Имя</td>
    <td><input type="text" id="newName" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['name'];?>
" /></td>
  </tr>
   <tr>
    <td>Тел</td>
    <td><input type="text" id="newPhone" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['phone'];?>
" /></td>
  </tr>
   <tr>
    <td>Адрес</td>
    <td><textarea id="newAdress" /><?php echo $_smarty_tpl->tpl_vars['arUser']->value['adress'];?>
</textarea></td>
  </tr>
   <tr>
    <td>Новый пароль</td>
    <td><input type="password" id="newPwd1" value="" /></td>
  </tr>
   <tr>
    <td>Повтор пароля</td>
    <td><input type="password" id="newPwd2" value="" /></td>
  </tr>
   <tr>
    <td>Для того чтобы сохронить данные введите текущий пароль</td>
    <td><input type="password" id="curPwd" value="" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="button" value="Сохранить изменения" onClick="updateUserData();" /></td>
  </tr>
</table>

<h2>Заказы:</h2>
<?php if (!$_smarty_tpl->tpl_vars['rsUserOrders']->value) {?>
    Нет заказов
<?php } else { ?>
<table border="1" cellpadding="1" cellspacing="1">
    <tr>
        <th>№</th>
        <th>Действие</th>
        <th>ID заказ</th>
        <th>Статус</th>
        <th>Дата создания</th>
        <th>Дата оплаты</th>
        <th>Дополнительная информация</th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsUserOrders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['orders']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['orders']['iteration']++;
?>
        <tr>
            <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['orders']['iteration'];?>
</td>
            <td><a href="#" onclick="showProducts('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
'); return false">Показать товар заказа</a></td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['date_created'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['date_payment'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['comment'];?>
</td>
        </tr>
    <?php } ?>
</table>
<?php }?><?php }} ?>
