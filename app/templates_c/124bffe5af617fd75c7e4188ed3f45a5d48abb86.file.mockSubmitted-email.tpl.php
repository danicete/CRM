<?php /* Smarty version Smarty-3.1.8, created on 2012-07-07 16:15:54
         compiled from "../app/templates/_components/emails/mockSubmitted-email.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19122847614ff898faecc9f8-44158633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '124bffe5af617fd75c7e4188ed3f45a5d48abb86' => 
    array (
      0 => '../app/templates/_components/emails/mockSubmitted-email.tpl',
      1 => 1341618600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19122847614ff898faecc9f8-44158633',
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
  'unifunc' => 'content_4ff898faf0e024_13425577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff898faf0e024_13425577')) {function content_4ff898faf0e024_13425577($_smarty_tpl) {?><div style="width: 800px;margin: 0  auto;">
	<h2>A mock has been added to Request #<?php echo sprintf("%05d",$_smarty_tpl->tpl_vars['formData']->value['id']);?>
</h2>
	<p>A mock has been added to this request.</p>
	<p>To view the uploaded mock, please click the link below.</p>
	<a href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/edit/submit-mocks/?rpin=<?php echo $_smarty_tpl->tpl_vars['formData']->value['pin'];?>
&highlight=<?php echo $_smarty_tpl->tpl_vars['mediaID']->value;?>
">View Request</a>
</div><?php }} ?>