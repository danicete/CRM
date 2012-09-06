<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 20:58:08
         compiled from "/home/jlwatson/public_html/crm/app/templates/_components/emails/mockSubmitted-email.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14953007575047f5205aa040-49550159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e48e945f675db5794dade3fe878b6845f99a6fb5' => 
    array (
      0 => '/home/jlwatson/public_html/crm/app/templates/_components/emails/mockSubmitted-email.tpl',
      1 => 1346869514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14953007575047f5205aa040-49550159',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formData' => 0,
    'path' => 0,
    'mediaID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5047f52061d545_90457471',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5047f52061d545_90457471')) {function content_5047f52061d545_90457471($_smarty_tpl) {?><div style="width: 800px;margin: 0  auto;">
	<h2>A mock has been added to Request #<?php echo sprintf("%05d",$_smarty_tpl->tpl_vars['formData']->value['id']);?>
</h2>
	<p>A mock has been added to this request.</p>
	<p>To view the uploaded mock, please click the link below.</p>
	<a href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/edit/submit-mocks/?rpin=<?php echo $_smarty_tpl->tpl_vars['formData']->value['pin'];?>
&highlight=<?php echo $_smarty_tpl->tpl_vars['mediaID']->value;?>
">View Mock</a>
</div><?php }} ?>