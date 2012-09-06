<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 19:13:20
         compiled from "/home/jlwatson/public_html/crm/app/templates/_components/emails/editRequest-email.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7904272285047dc9075ea35-86380969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57045c7353ff69e809d2a565b11389181591019b' => 
    array (
      0 => '/home/jlwatson/public_html/crm/app/templates/_components/emails/editRequest-email.tpl',
      1 => 1346869514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7904272285047dc9075ea35-86380969',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formData' => 0,
    'path' => 0,
    'requestPin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5047dc9079d092_54651544',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5047dc9079d092_54651544')) {function content_5047dc9079d092_54651544($_smarty_tpl) {?><div style="width: 800px;margin: 0  auto;">
	<h2>Request #<?php echo sprintf("%05d",$_smarty_tpl->tpl_vars['formData']->value['formID']);?>
 has been edited.</h2>
	<p>A request has been edited.</p>
	<p>To view the changes made to this request, please click the link below.</p>
	<a href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/view/?rpin=<?php echo $_smarty_tpl->tpl_vars['requestPin']->value;?>
">View Request</a>
</div><?php }} ?>