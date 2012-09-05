<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 01:10:13
         compiled from "C:\xampp\htdocs\crm\app\templates\_components\removeUnitDialog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:712950468a55249e94-93706379%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '916f1d68ef112562c92b2fcf54de5d16a69e6197' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\app\\templates\\_components\\removeUnitDialog.tpl',
      1 => 1341852424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '712950468a55249e94-93706379',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50468a5524b446_69310879',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50468a5524b446_69310879')) {function content_50468a5524b446_69310879($_smarty_tpl) {?><div id="removeUnitDialog" style="display: none">
	<p>Are you sure?</p>
	<div class="request-dialog-buttons">
		<div class="request-dialog-button" id="dialogYes">Yes</div>
		<div class="request-dialog-button" id="dialogNo">No</div>
	</div>	
</div>

<!-- Need to implement some kind of script that strips already-selected units out of the dropdown --><?php }} ?>