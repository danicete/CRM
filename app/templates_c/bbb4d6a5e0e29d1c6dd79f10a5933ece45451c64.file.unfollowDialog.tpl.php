<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 18:34:37
         compiled from "/home/jlwatson/public_html/crm/app/templates/edit/followers/unfollowDialog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12102585345047d37d7951b8-24176402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbb4d6a5e0e29d1c6dd79f10a5933ece45451c64' => 
    array (
      0 => '/home/jlwatson/public_html/crm/app/templates/edit/followers/unfollowDialog.tpl',
      1 => 1346869513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12102585345047d37d7951b8-24176402',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5047d37d7966c3_12236155',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5047d37d7966c3_12236155')) {function content_5047d37d7966c3_12236155($_smarty_tpl) {?><div id="unfollowDialogContent">
	<p>Are you sure you want to unfollow this request?</p>
	<div class="follower-actions">
		<div class="follower-action" id="unfollowDialogConfirm">Yes</div>
		<div class="follower-action" id="unfollowDialogDeny">No</div>
	</div>
</div>	<?php }} ?>