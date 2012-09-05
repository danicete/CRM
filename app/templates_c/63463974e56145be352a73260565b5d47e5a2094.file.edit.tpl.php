<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 01:10:13
         compiled from "C:\xampp\htdocs\crm\app\templates\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1065450468a5525a347-06678956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63463974e56145be352a73260565b5d47e5a2094' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\app\\templates\\edit.tpl',
      1 => 1345763948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1065450468a5525a347-06678956',
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
  'unifunc' => 'content_50468a55266556_39432248',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50468a55266556_39432248')) {function content_50468a55266556_39432248($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="edit-page-container clearfix">
  <?php echo $_smarty_tpl->tpl_vars['editPageContent']->value;?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>