<?php /* Smarty version Smarty-3.1.8, created on 2012-09-06 18:34:19
         compiled from "C:\xampp\htdocs\crm\app\templates\edit\removeMockDialog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54905048d08bbcd8b8-92757828%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fae3b2d081139e51af288ad6f1ef2aae2ed07bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\app\\templates\\edit\\removeMockDialog.tpl',
      1 => 1346894370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54905048d08bbcd8b8-92757828',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5048d08bbd2cb1_29631487',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5048d08bbd2cb1_29631487')) {function content_5048d08bbd2cb1_29631487($_smarty_tpl) {?><div id="removeMockDialogContent">
	<p>Are you sure you want to remove this mock?</p>
	<div class="follower-actions">
		<div class="request-dialog-button" id="removeMockConfirm">Remove</div>
		<div class="request-dialog-button" id="removeMockDeny">Close</div>
	</div>
	<input type="hidden" id="mockRemoveURL"value="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/edit/removeMocks/" />
</div>	<?php }} ?>