<?php /* Smarty version Smarty-3.1.8, created on 2012-07-06 14:54:39
         compiled from "../app/templates/_components/addRequestDialog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4129847494ff66e446a1467-93865216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '662065a99c2bb5ccdc5e6f5c5cc8918d497fb1d5' => 
    array (
      0 => '../app/templates/_components/addRequestDialog.tpl',
      1 => 1341600136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4129847494ff66e446a1467-93865216',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4ff66e446c7a08_75935583',
  'variables' => 
  array (
    'unitTypeInfo' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff66e446c7a08_75935583')) {function content_4ff66e446c7a08_75935583($_smarty_tpl) {?><div id="addRequestDialog" style="display: none">
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