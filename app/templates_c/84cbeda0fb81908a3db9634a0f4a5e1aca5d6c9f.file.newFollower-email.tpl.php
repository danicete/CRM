<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 18:46:55
         compiled from "/home/jlwatson/public_html/crm/app/templates/_components/emails/newFollower-email.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1356266605047d65f561498-34467340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84cbeda0fb81908a3db9634a0f4a5e1aca5d6c9f' => 
    array (
      0 => '/home/jlwatson/public_html/crm/app/templates/_components/emails/newFollower-email.tpl',
      1 => 1346869514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1356266605047d65f561498-34467340',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'path' => 0,
    'formData' => 0,
    'followerName' => 0,
    'salesRepName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5047d65f5c9616_11996428',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5047d65f5c9616_11996428')) {function content_5047d65f5c9616_11996428($_smarty_tpl) {?><div style="width: 800px;margin: 0  auto;">
	<h2>New request for: <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/view/?rpin=<?php echo $_smarty_tpl->tpl_vars['formData']->value['pin'];?>
"><?php echo $_smarty_tpl->tpl_vars['formData']->value['campaignName'];?>
</a></h2>
	<p>Hello, <?php echo $_smarty_tpl->tpl_vars['followerName']->value;?>
. You've been added as a follower to this creative request. Please
		see a summary of the request below as well as a link to the request itself with more information.</p>
	<div><b>Sales Rep:</b>&nbsp;<?php echo $_smarty_tpl->tpl_vars['salesRepName']->value;?>
</div>
	<div><b>Launch Date:</b>&nbsp;<?php echo $_smarty_tpl->tpl_vars['formData']->value['launchDate'];?>
</div>
	<br />
	<br />
	<br />
	<div style="width: 600px;text-align: center;">Approval Schedule</div>
	<table style="width: 600px;">
		<tr><td style="font-weight: bold;">Curse Provides 1st Mockups:</td><td><?php echo $_smarty_tpl->tpl_vars['formData']->value['timeline1'];?>
</td></tr>
		<tr><td style="font-weight: bold;">Client Provides Feedback:</td><td><?php echo $_smarty_tpl->tpl_vars['formData']->value['timeline2'];?>
</td></tr>
		<tr><td style="font-weight: bold;">Curse Provides Final Mockups:</td><td><?php echo $_smarty_tpl->tpl_vars['formData']->value['timeline3'];?>
</td></tr>
		<tr><td style="font-weight: bold;">Client Provides Final Feedback:</td><td><?php echo $_smarty_tpl->tpl_vars['formData']->value['timeline4'];?>
</td></tr>
		<tr><td style="font-weight: bold;">Initial Campaign Launch:</td><td><?php echo $_smarty_tpl->tpl_vars['formData']->value['timeline5'];?>
</td></tr>
	</table>
	<br />
	<br />
	<div><b>FTP Info:</b>&nbsp;<?php echo $_smarty_tpl->tpl_vars['formData']->value['ftpinfo'];?>
</div>
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/view/?rpin=<?php echo $_smarty_tpl->tpl_vars['formData']->value['pin'];?>
">View Request</a></p>
</div><?php }} ?>