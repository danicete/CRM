<?php /* Smarty version Smarty-3.1.8, created on 2012-08-30 00:39:25
         compiled from "C:\xampp\htdocs\creative\app\templates\edit\removeMockDialog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7495503e9a1dc68fb8-88748301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5f819a7f8834ac0ed6eb9dc882085a14da6eace' => 
    array (
      0 => 'C:\\xampp\\htdocs\\creative\\app\\templates\\edit\\removeMockDialog.tpl',
      1 => 1341852443,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7495503e9a1dc68fb8-88748301',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_503e9a1dc78f10_08713104',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503e9a1dc78f10_08713104')) {function content_503e9a1dc78f10_08713104($_smarty_tpl) {?><div id="removeMockDialogContent">
	<p>Are you sure you want to remove this mock?</p>
	<div class="follower-actions">
		<div class="follower-action" id="removeMockConfirm">Remove</div>
		<div class="follower-action" id="removeMockDeny">Close</div>
	</div>
	<input type="hidden" id="mockRemoveURL"value="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/edit/removeMocks/" />
</div>	<?php }} ?>