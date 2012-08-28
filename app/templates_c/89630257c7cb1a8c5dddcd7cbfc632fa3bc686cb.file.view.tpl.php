<?php /* Smarty version Smarty-3.1.8, created on 2012-08-28 01:18:14
         compiled from "C:\xampp\htdocs\creative\app\templates\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18196503c0036743390-19904004%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89630257c7cb1a8c5dddcd7cbfc632fa3bc686cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\creative\\app\\templates\\view.tpl',
      1 => 1345479941,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18196503c0036743390-19904004',
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
  'unifunc' => 'content_503c0036758d05_27008565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503c0036758d05_27008565')) {function content_503c0036758d05_27008565($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<h1 class="maintitle viewtitle">Viewing Request #<?php echo sprintf("%05d",$_smarty_tpl->tpl_vars['requestRow']->value['id']);?>
</h1>
<div class="full-page-container clearfix">
  <?php echo $_smarty_tpl->tpl_vars['requestContent']->value;?>

</div>
<div id="followersDialog" style="display: none"></div>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>