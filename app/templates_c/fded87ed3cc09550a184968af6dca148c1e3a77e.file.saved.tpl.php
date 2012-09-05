<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 01:10:03
         compiled from "C:\xampp\htdocs\crm\app\templates\saved.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1350850468a4b58acd1-67140457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fded87ed3cc09550a184968af6dca148c1e3a77e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\app\\templates\\saved.tpl',
      1 => 1346800005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1350850468a4b58acd1-67140457',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header' => 0,
    'path' => 0,
    'PIN' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50468a4b5d5178_33367828',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50468a4b5d5178_33367828')) {function content_50468a4b5d5178_33367828($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<h1 class="maintitle">Congratulations</h1>
<div class="saved-page-container clearfix">
	Your requested changes have been saved.
  <a class="saved-view-request" href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/view/?rpin=<?php echo $_smarty_tpl->tpl_vars['PIN']->value;?>
">View updated request</a>
</div>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>