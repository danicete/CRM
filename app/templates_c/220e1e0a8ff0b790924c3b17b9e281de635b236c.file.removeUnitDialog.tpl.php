<?php /* Smarty version Smarty-3.1.8, created on 2012-08-31 02:29:10
         compiled from "C:\xampp\htdocs\creative\app\templates\_components\removeUnitDialog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:586550400556213447-74986832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '220e1e0a8ff0b790924c3b17b9e281de635b236c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\creative\\app\\templates\\_components\\removeUnitDialog.tpl',
      1 => 1341852424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '586550400556213447-74986832',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50400556216490_07387386',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50400556216490_07387386')) {function content_50400556216490_07387386($_smarty_tpl) {?><div id="removeUnitDialog" style="display: none">
	<p>Are you sure?</p>
	<div class="request-dialog-buttons">
		<div class="request-dialog-button" id="dialogYes">Yes</div>
		<div class="request-dialog-button" id="dialogNo">No</div>
	</div>	
</div>

<!-- Need to implement some kind of script that strips already-selected units out of the dropdown --><?php }} ?>