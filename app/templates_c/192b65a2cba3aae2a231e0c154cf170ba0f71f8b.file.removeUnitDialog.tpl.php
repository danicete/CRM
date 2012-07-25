<?php /* Smarty version Smarty-3.1.8, created on 2012-07-06 14:54:39
         compiled from "../app/templates/_components/removeUnitDialog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5281745214ff66e446c9fd4-40186643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '192b65a2cba3aae2a231e0c154cf170ba0f71f8b' => 
    array (
      0 => '../app/templates/_components/removeUnitDialog.tpl',
      1 => 1341600140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5281745214ff66e446c9fd4-40186643',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4ff66e446cbe82_90974541',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff66e446cbe82_90974541')) {function content_4ff66e446cbe82_90974541($_smarty_tpl) {?><div id="removeUnitDialog" style="display: none">
	<p>Are you sure?</p>
	<div class="request-dialog-buttons">
		<div class="request-dialog-button" id="dialogYes">Yes</div>
		<div class="request-dialog-button" id="dialogNo">No</div>
	</div>	
</div>

<!-- Need to implement some kind of script that strips already-selected units out of the dropdown --><?php }} ?>