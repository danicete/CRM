<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 18:34:37
         compiled from "/home/jlwatson/public_html/crm/app/templates/_blocks/loggedIn-recentRequestsBlock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10985641385047d37d641ed0-11073958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43150ab51b3d9fae2e9453c5f0e78dda03aedafc' => 
    array (
      0 => '/home/jlwatson/public_html/crm/app/templates/_blocks/loggedIn-recentRequestsBlock.tpl',
      1 => 1346869496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10985641385047d37d641ed0-11073958',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'recentRequests' => 0,
    'path' => 0,
    'request' => 0,
    'authUserID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5047d37d6f0201_91411559',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5047d37d6f0201_91411559')) {function content_5047d37d6f0201_91411559($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/jlwatson/public_html/crm/app/lib/smarty/plugins/modifier.truncate.php';
?><div class="recent-requests-container loggedIn">
	<h4>Your Recent Requests</h4>
	<div class="recent-requests-content">
		<?php if (count($_smarty_tpl->tpl_vars['recentRequests']->value)>0){?>
			<?php  $_smarty_tpl->tpl_vars['request'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['request']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recentRequests']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['recentRequestsLoop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['request']->key => $_smarty_tpl->tpl_vars['request']->value){
$_smarty_tpl->tpl_vars['request']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['recentRequestsLoop']['index']++;
?>
				<div class="recent-row clearfix <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['recentRequestsLoop']['index']%2==1){?>recentEven<?php }?>">
					<div class="request-row-id">
						<a href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/view/?rpin=<?php echo $_smarty_tpl->tpl_vars['request']->value['pin'];?>
" class="request-row-id-link">#&nbsp;<?php echo sprintf("%05d",$_smarty_tpl->tpl_vars['request']->value['id']);?>
</a>
					</div>
					<div class="request-row-salesRep"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['request']->value['campaignName'],24,"...");?>
</div>
					<div class="request-row-options">
						<a href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/edit/?rpin=<?php echo $_smarty_tpl->tpl_vars['request']->value['pin'];?>
">Edit</a>
						<a class="unfollow-option" href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/edit/followers/?userid=<?php echo $_smarty_tpl->tpl_vars['authUserID']->value;?>
&requestid=<?php echo $_smarty_tpl->tpl_vars['request']->value['id'];?>
">Unfollow</a>
					</div>
				</div>
			<?php } ?>
		<?php }else{ ?>
			<span style="font-size: 12px;">You are not following any requests.</span>
		<?php }?>
	</div>
</div>	<?php }} ?>