<?php /* Smarty version Smarty-3.1.8, created on 2012-09-06 18:32:52
         compiled from "C:\xampp\htdocs\crm\app\templates\edit\followers\removeFollower.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16810504780f643de56-69101347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd304a3b9fabe406a79c4bb52395076e6ca5fb2c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\app\\templates\\edit\\followers\\removeFollower.tpl',
      1 => 1346894370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16810504780f643de56-69101347',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504780f6445974_91288491',
  'variables' => 
  array (
    'reqRow' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504780f6445974_91288491')) {function content_504780f6445974_91288491($_smarty_tpl) {?><div id="removeFollowersDialogContent">

	<div class="follower-actions">
		<div class="follower-action" id="removeDialogConfirm">Yes</div>
		<div class="follower-action" id="removeDialogDeny">WAIT! DON'T DO IT!</div>
	</div>
	<input type="hidden" id="formID" value="<?php echo $_smarty_tpl->tpl_vars['reqRow']->value['id'];?>
" />
	<input type="hidden" id="userID" value="0" />
</div><?php }} ?>