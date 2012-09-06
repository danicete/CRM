<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 21:16:31
         compiled from "/home/jlwatson/public_html/crm/app/templates/edit/removeMockDialog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19708213145047e18f520045-37662731%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '751338aa4750003cb3a45079aab382f1f4e920f2' => 
    array (
      0 => '/home/jlwatson/public_html/crm/app/templates/edit/removeMockDialog.tpl',
      1 => 1346894183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19708213145047e18f520045-37662731',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5047e18f54a1f5_95200234',
  'variables' => 
  array (
    'path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5047e18f54a1f5_95200234')) {function content_5047e18f54a1f5_95200234($_smarty_tpl) {?><div id="removeMockDialogContent">
	<p>Are you sure you want to remove this mock?</p>
	<div class="follower-actions">
		<div class="request-dialog-button" id="removeMockConfirm">Remove</div>
		<div class="request-dialog-button" id="removeMockDeny">Close</div>
	</div>
	<input type="hidden" id="mockRemoveURL"value="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/edit/removeMocks/" />
</div>	<?php }} ?>