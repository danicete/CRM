<?php /* Smarty version Smarty-3.1.8, created on 2012-07-07 16:11:54
         compiled from "../app/templates/edit/followers/removeFollower.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13556819484ff8980a7a8894-58086785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6da3dc1a71065c07370c4f7e120cf32ca7a9038c' => 
    array (
      0 => '../app/templates/edit/followers/removeFollower.tpl',
      1 => 1341600153,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13556819484ff8980a7a8894-58086785',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'reqRow' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4ff8980a7ae662_60162826',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff8980a7ae662_60162826')) {function content_4ff8980a7ae662_60162826($_smarty_tpl) {?><div id="removeFollowersDialogContent">

	<div class="follower-actions">
		<div class="follower-action" id="removeDialogConfirm">Yes</div>
		<div class="follower-action" id="removeDialogDeny">No</div>
	</div>
	<input type="hidden" id="formID" value="<?php echo $_smarty_tpl->tpl_vars['reqRow']->value['id'];?>
" />
	<input type="hidden" id="userID" value="0" />
</div><?php }} ?>