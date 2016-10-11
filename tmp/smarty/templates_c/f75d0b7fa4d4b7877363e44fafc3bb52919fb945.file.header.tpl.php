<?php /* Smarty version Smarty-3.1.22-dev, created on 2016-10-11 11:21:14
         compiled from "..\views\default\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1535157fca0fac85de7-74779183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f75d0b7fa4d4b7877363e44fafc3bb52919fb945' => 
    array (
      0 => '..\\views\\default\\header.tpl',
      1 => 1472812829,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1535157fca0fac85de7-74779183',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageTitle' => 0,
    'teplateWebPath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.22-dev',
  'unifunc' => 'content_57fca0facbaef9_26621317',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fca0facbaef9_26621317')) {function content_57fca0facbaef9_26621317($_smarty_tpl) {?><html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/main.css" type="text/css" />
        <?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery-1.7.1.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/js/main.js"><?php echo '</script'; ?>
>
    </head>
<body>
    <div id="header">
        <h1>my shop - Интернет магазин</h1>
    </div>

  
  <?php echo $_smarty_tpl->getSubTemplate ('leftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  
  
    <div id="centerColumn">
        
      
        

<?php }} ?>
