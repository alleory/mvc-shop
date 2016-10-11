<?php /* Smarty version Smarty-3.1.22-dev, created on 2016-09-02 18:38:30
         compiled from "..\views\default\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3594579f8d143f9c25-41850633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57c3a64a190c77b9086ae996243a5713cff7d179' => 
    array (
      0 => '..\\views\\default\\header.tpl',
      1 => 1472812829,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3594579f8d143f9c25-41850633',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.22-dev',
  'unifunc' => 'content_579f8d144bd629_09285658',
  'variables' => 
  array (
    'pageTitle' => 0,
    'teplateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579f8d144bd629_09285658')) {function content_579f8d144bd629_09285658($_smarty_tpl) {?><html>
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
