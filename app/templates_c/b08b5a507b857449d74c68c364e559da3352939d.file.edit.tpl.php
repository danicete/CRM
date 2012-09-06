<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 19:13:09
         compiled from "/home/jlwatson/public_html/crm/app/templates/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3857912755047dc856b8f13-64876448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b08b5a507b857449d74c68c364e559da3352939d' => 
    array (
      0 => '/home/jlwatson/public_html/crm/app/templates/edit.tpl',
      1 => 1346869480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3857912755047dc856b8f13-64876448',
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
  'unifunc' => 'content_5047dc856c7b77_05376029',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5047dc856c7b77_05376029')) {function content_5047dc856c7b77_05376029($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="edit-page-container clearfix">
  <?php echo $_smarty_tpl->tpl_vars['editPageContent']->value;?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>