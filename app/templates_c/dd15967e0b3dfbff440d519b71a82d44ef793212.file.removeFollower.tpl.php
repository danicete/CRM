<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 18:43:48
         compiled from "/home/jlwatson/public_html/crm/app/templates/edit/followers/removeFollower.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20249481245047d5a4b6b111-84864459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd15967e0b3dfbff440d519b71a82d44ef793212' => 
    array (
      0 => '/home/jlwatson/public_html/crm/app/templates/edit/followers/removeFollower.tpl',
      1 => 1346869513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20249481245047d5a4b6b111-84864459',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'reqRow' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5047d5a4b711a8_69707636',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5047d5a4b711a8_69707636')) {function content_5047d5a4b711a8_69707636($_smarty_tpl) {?><div id="removeFollowersDialogContent">

	<div class="follower-actions">
		<div class="follower-action" id="removeDialogConfirm">Yes</div>
		<div class="follower-action" id="removeDialogDeny">WAIT! DON'T DO IT!</div>
	</div>
	<input type="hidden" id="formID" value="<?php echo $_smarty_tpl->tpl_vars['reqRow']->value['id'];?>
" />
	<input type="hidden" id="userID" value="0" />
</div><?php }} ?>