<?php /* Smarty version Smarty-3.1.8, created on 2012-07-06 17:45:59
         compiled from "../app/templates/edit/removeMockDialog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3174027284ff60897ef4cb6-69226730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '416572d70f959a4831d13a2d102a6e6f37365611' => 
    array (
      0 => '../app/templates/edit/removeMockDialog.tpl',
      1 => 1341600155,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3174027284ff60897ef4cb6-69226730',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4ff60898055c93_87309538',
  'variables' => 
  array (
    'path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff60898055c93_87309538')) {function content_4ff60898055c93_87309538($_smarty_tpl) {?><div id="removeMockDialogContent">
	<p>Are you sure you want to remove this mock?</p>
	<div class="follower-actions">
		<div class="follower-action" id="removeMockConfirm">Remove</div>
		<div class="follower-action" id="removeMockDeny">Close</div>
	</div>
	<input type="hidden" id="mockRemoveURL"value="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/edit/removeMocks/" />
</div>	<?php }} ?>