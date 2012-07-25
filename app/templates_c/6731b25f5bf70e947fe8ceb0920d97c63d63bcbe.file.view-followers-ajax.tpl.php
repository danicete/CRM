<?php /* Smarty version Smarty-3.1.8, created on 2012-06-29 19:35:30
         compiled from "C:\xampp\htdocs\creative\app\templates\edit\view-followers-ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:239904fe267836c3170-74593882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6731b25f5bf70e947fe8ceb0920d97c63d63bcbe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\creative\\app\\templates\\edit\\view-followers-ajax.tpl',
      1 => 1340990387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '239904fe267836c3170-74593882',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fe2678370b736_67065537',
  'variables' => 
  array (
    'usersInfo' => 0,
    'user' => 0,
    'path' => 0,
    'requestPIN' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fe2678370b736_67065537')) {function content_4fe2678370b736_67065537($_smarty_tpl) {?><div id="viewFollowersDialog">
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
			<div class="follower-action" id="followerControls" data-url="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/edit/followers/?rpin=<?php echo $_smarty_tpl->tpl_vars['requestPIN']->value;?>
">Follower Controls</div>
			<div class="follower-action" id="followerClose">Close</div>
<!-- 			<a href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/edit/followers/?rpin=<?php echo $_smarty_tpl->tpl_vars['requestPIN']->value;?>
"><div class="follower-action" id="followerAdd">Add Follower</div></a>
			<div class="follower-action" id="followerClose">Close</div> -->
		</div>
	</div>	
</div><?php }} ?>