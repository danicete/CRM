<?php /* Smarty version Smarty-3.1.8, created on 2012-08-31 02:29:10
         compiled from "C:\xampp\htdocs\creative\app\templates\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2852650400556222bb2-30163487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '334091b6411bb88adab024f243be1bc231d2373f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\creative\\app\\templates\\edit.tpl',
      1 => 1345763948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2852650400556222bb2-30163487',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header' => 0,
    'editPageContent' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50400556230935_15450114',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50400556230935_15450114')) {function content_50400556230935_15450114($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="edit-page-container clearfix">
  <?php echo $_smarty_tpl->tpl_vars['editPageContent']->value;?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>