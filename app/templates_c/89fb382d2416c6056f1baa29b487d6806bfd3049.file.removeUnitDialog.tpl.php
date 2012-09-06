<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 19:13:09
         compiled from "/home/jlwatson/public_html/crm/app/templates/_components/removeUnitDialog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6579454895047dc856b4a44-46201600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89fb382d2416c6056f1baa29b487d6806bfd3049' => 
    array (
      0 => '/home/jlwatson/public_html/crm/app/templates/_components/removeUnitDialog.tpl',
      1 => 1346869497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6579454895047dc856b4a44-46201600',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5047dc856b6a72_87104277',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5047dc856b6a72_87104277')) {function content_5047dc856b6a72_87104277($_smarty_tpl) {?><div id="removeUnitDialog" style="display: none">
	<p>Are you sure?</p>
	<div class="request-dialog-buttons">
		<div class="request-dialog-button" id="dialogYes">Yes</div>
		<div class="request-dialog-button" id="dialogNo">No</div>
	</div>	
</div>

<!-- Need to implement some kind of script that strips already-selected units out of the dropdown --><?php }} ?>