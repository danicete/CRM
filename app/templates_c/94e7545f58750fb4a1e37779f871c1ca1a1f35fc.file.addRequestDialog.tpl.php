<?php /* Smarty version Smarty-3.1.8, created on 2012-06-14 18:32:21
         compiled from "../app/templates\_components\addRequestDialog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:242464fd7719c91fe50-74619582%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94e7545f58750fb4a1e37779f871c1ca1a1f35fc' => 
    array (
      0 => '../app/templates\\_components\\addRequestDialog.tpl',
      1 => 1339633836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '242464fd7719c91fe50-74619582',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fd7719c930a96_41361821',
  'variables' => 
  array (
    'unitTypeInfo' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fd7719c930a96_41361821')) {function content_4fd7719c930a96_41361821($_smarty_tpl) {?><div id="addRequestDialog" style="display: none">
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