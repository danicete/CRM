<?php /* Smarty version Smarty-3.1.8, created on 2012-06-26 19:18:42
         compiled from "../app/templates\_blocks\loggedIn-recentRequestsBlock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:258804fb6e91771e115-60854661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba7da81bb2fd8da9451bd8202a0d1569e0ff3d2f' => 
    array (
      0 => '../app/templates\\_blocks\\loggedIn-recentRequestsBlock.tpl',
      1 => 1340730693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '258804fb6e91771e115-60854661',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fb6e91771e8b6_48022508',
  'variables' => 
  array (
    'recentRequests' => 0,
    'path' => 0,
    'request' => 0,
    'authUserID' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fb6e91771e8b6_48022508')) {function content_4fb6e91771e8b6_48022508($_smarty_tpl) {?><div class="recent-requests-container loggedIn">
	<h4>Your Recent Requests</h4>
	<div class="recent-requests-content">
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
				<div class="request-row-salesRep"><?php echo $_smarty_tpl->tpl_vars['request']->value['campaignName'];?>
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
	</div>
</div>	<?php }} ?>