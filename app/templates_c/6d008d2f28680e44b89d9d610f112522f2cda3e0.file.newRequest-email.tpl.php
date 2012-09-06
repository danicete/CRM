<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 18:39:46
         compiled from "/home/jlwatson/public_html/crm/app/templates/_components/emails/newRequest-email.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19516341225047d4b2620c31-50555080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d008d2f28680e44b89d9d610f112522f2cda3e0' => 
    array (
      0 => '/home/jlwatson/public_html/crm/app/templates/_components/emails/newRequest-email.tpl',
      1 => 1346869514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19516341225047d4b2620c31-50555080',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'path' => 0,
    'formData' => 0,
    'salesRepName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5047d4b2687238_41791665',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5047d4b2687238_41791665')) {function content_5047d4b2687238_41791665($_smarty_tpl) {?><div style="width: 800px;margin: 0  auto;">
	<h2>New request for: <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/view/?rpin=<?php echo $_smarty_tpl->tpl_vars['formData']->value['pin'];?>
"><?php echo $_smarty_tpl->tpl_vars['formData']->value['campaignName'];?>
</a></h2>
	<p>A new creative request has been submitted.</p>
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