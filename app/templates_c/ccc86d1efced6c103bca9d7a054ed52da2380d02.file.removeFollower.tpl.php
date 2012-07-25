<?php /* Smarty version Smarty-3.1.8, created on 2012-06-26 06:52:44
         compiled from "../app/templates\edit\followers\removeFollower.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176464fe93f3def9ff5-65083961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccc86d1efced6c103bca9d7a054ed52da2380d02' => 
    array (
      0 => '../app/templates\\edit\\followers\\removeFollower.tpl',
      1 => 1340686363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176464fe93f3def9ff5-65083961',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fe93f3deff658_25036185',
  'variables' => 
  array (
    'reqRow' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fe93f3deff658_25036185')) {function content_4fe93f3deff658_25036185($_smarty_tpl) {?><div id="removeFollowersDialogContent">

	<div class="follower-actions">
		<div class="follower-action" id="removeDialogConfirm">Yes</div>
		<div class="follower-action" id="removeDialogDeny">No</div>
	</div>
	<input type="hidden" id="formID" value="<?php echo $_smarty_tpl->tpl_vars['reqRow']->value['id'];?>
" />
	<input type="hidden" id="userID" value="0" />
</div><?php }} ?>