<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 19:13:09
         compiled from "/home/jlwatson/public_html/crm/app/templates/_components/addRequestDialog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10749261665047dc8567a135-84449369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea28f3fb4f85d402e699deb82ed364fc4bccb6ac' => 
    array (
      0 => '/home/jlwatson/public_html/crm/app/templates/_components/addRequestDialog.tpl',
      1 => 1346869497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10749261665047dc8567a135-84449369',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'unitTypeInfo' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5047dc856b1f85_83055976',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5047dc856b1f85_83055976')) {function content_5047dc856b1f85_83055976($_smarty_tpl) {?><div id="addRequestDialog" style="display: none">
		<h3 style="margin: 6px 0;">Request New Unit</h3>
	<label for="typeselect" class="dialog-type-label" style="margin-bottom: 12px;">
		Unit Type:
		<select class="unit-type-select">
			<option value="0">Select a Unit</option>
			<?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['unitTypeInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
$_smarty_tpl->tpl_vars['type']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['name'];?>
</option>
			<?php } ?>
		</select>
	</label>
	<div class="request-dialog-buttons">
		<div class="request-dialog-button" id="dialogSave">Add Unit</div>
	</div>	
</div>

<!-- Need to implement some kind of script that strips already-selected units out of the dropdown --><?php }} ?>