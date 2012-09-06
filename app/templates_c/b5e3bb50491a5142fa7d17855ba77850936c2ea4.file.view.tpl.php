<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 01:10:07
         compiled from "C:\xampp\htdocs\crm\app\templates\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2838150468a4f83d412-79020301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5e3bb50491a5142fa7d17855ba77850936c2ea4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\app\\templates\\view.tpl',
      1 => 1345479941,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2838150468a4f83d412-79020301',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header' => 0,
    'requestRow' => 0,
    'requestContent' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50468a4f852e62_79114539',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50468a4f852e62_79114539')) {function content_50468a4f852e62_79114539($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<h1 class="maintitle viewtitle">Viewing Request #<?php echo sprintf("%05d",$_smarty_tpl->tpl_vars['requestRow']->value['id']);?>
</h1>
<div class="full-page-container clearfix">
  <?php echo $_smarty_tpl->tpl_vars['requestContent']->value;?>

</div>
<div id="followersDialog" style="display: none"></div>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>