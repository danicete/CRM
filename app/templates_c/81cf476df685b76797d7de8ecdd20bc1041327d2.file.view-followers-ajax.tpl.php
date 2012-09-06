<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 18:42:28
         compiled from "C:\xampp\htdocs\crm\app\templates\edit\view-followers-ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13388504780f4e4bc76-58480970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81cf476df685b76797d7de8ecdd20bc1041327d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\app\\templates\\edit\\view-followers-ajax.tpl',
      1 => 1345762997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13388504780f4e4bc76-58480970',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usersInfo' => 0,
    'user' => 0,
    'path' => 0,
    'requestPIN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504780f51a1140_14005262',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504780f51a1140_14005262')) {function content_504780f51a1140_14005262($_smarty_tpl) {?><div id="viewFollowersDialog">
	<div class="viewFollowersContainer">
		<div class="viewFollowersContent">
			<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usersInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
			<div class="follower-container">
				<div class="follower-isadmin"><?php if ($_smarty_tpl->tpl_vars['user']->value['isAdmin']){?>Admin<?php }?></div>
				<div class="follower-name"><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</div>
				<div class="follower-email"><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</div>
				<div class="follower-controls">
					<input type="hidden" class="follower-hidden-id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" />
				</div>
			</div>	
			<?php } ?>	
		</div>
		<div class="follower-actions">
			<div class="request-dialog-button" id="followerControls" data-url="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/edit/followers/?rpin=<?php echo $_smarty_tpl->tpl_vars['requestPIN']->value;?>
">Follower Controls</div>
			<div class="request-dialog-button" id="followerClose">Close</div>
<!-- 			<a href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/edit/followers/?rpin=<?php echo $_smarty_tpl->tpl_vars['requestPIN']->value;?>
"><div class="follower-action" id="followerAdd">Add Follower</div></a>
			<div class="follower-action" id="followerClose">Close</div> -->
		</div>
	</div>	
</div><?php }} ?>