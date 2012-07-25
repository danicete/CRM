<?php /* Smarty version Smarty-3.1.8, created on 2012-07-02 20:00:03
         compiled from "../app/templates\edit\removeMockDialog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128884ff1d36c4e11d0-74142677%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79908cd45aba51c7edbe7ea2822c93ff2457f963' => 
    array (
      0 => '../app/templates\\edit\\removeMockDialog.tpl',
      1 => 1341251735,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128884ff1d36c4e11d0-74142677',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4ff1d36c4e27e3_31250112',
  'variables' => 
  array (
    'path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff1d36c4e27e3_31250112')) {function content_4ff1d36c4e27e3_31250112($_smarty_tpl) {?><div id="removeMockDialogContent">
	<p>Are you sure you want to remove this mock?</p>
	<div class="follower-actions">
		<div class="follower-action" id="removeMockConfirm">Remove</div>
		<div class="follower-action" id="removeMockDeny">Close</div>
	</div>
	<input type="hidden" id="mockRemoveURL"value="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/edit/removeMocks/" />
</div>	<?php }} ?>