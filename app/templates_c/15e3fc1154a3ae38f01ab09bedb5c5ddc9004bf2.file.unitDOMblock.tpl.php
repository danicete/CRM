<?php /* Smarty version Smarty-3.1.8, created on 2012-07-05 17:19:50
         compiled from "../app/templates\_blocks\unitDOMblock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72284fd8d3e9472500-64595107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15e3fc1154a3ae38f01ab09bedb5c5ddc9004bf2' => 
    array (
      0 => '../app/templates\\_blocks\\unitDOMblock.tpl',
      1 => 1341501587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72284fd8d3e9472500-64595107',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fd8d3e94e3140_88731245',
  'variables' => 
  array (
    'unit' => 0,
    'option' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fd8d3e94e3140_88731245')) {function content_4fd8d3e94e3140_88731245($_smarty_tpl) {?><div class="edit-request-container">
	<div class="edit-request-content">
		<h4 class="edit-request-title"><?php echo $_smarty_tpl->tpl_vars['unit']->value['name'];?>
</h4>
		<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['unit']->value['unitOptions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['optionsLoop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value){
$_smarty_tpl->tpl_vars['option']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['optionsLoop']['index']++;
?>
			<div class="edit-request-unit-option <?php if ($_smarty_tpl->tpl_vars['option']->value==1){?>editChosenOption<?php }?>">
				<?php echo $_smarty_tpl->tpl_vars['unit']->value['optionquestion'][$_smarty_tpl->getVariable('smarty')->value['foreach']['optionsLoop']['index']];?>

				<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['optionsLoop']['index']<$_smarty_tpl->tpl_vars['unit']->value['options_count']){?>
				<input type="checkbox" class="edit-request-option-checkbox option<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['optionsLoop']['index']+1;?>
" style="display:none;" <?php if ($_smarty_tpl->tpl_vars['option']->value==1){?>checked="checked"<?php }?> />
				<?php }?>
			</div>

		<?php } ?>
		<?php if ($_smarty_tpl->tpl_vars['unit']->value['details']){?>
			<div class="edit-form-details-header">Details:</div>
			<div class="edit-request-details-display">
				<?php echo $_smarty_tpl->tpl_vars['unit']->value['details'];?>

				
			</div>
			<textarea style="display: none;" class="edit-option-details-textarea"><?php echo $_smarty_tpl->tpl_vars['unit']->value['details'];?>
</textarea>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['unit']->value['format']){?>
			<div class="edit-request-format-display">
				<span class="donthide">Format:</span>
				<?php echo $_smarty_tpl->tpl_vars['unit']->value['format'];?>

				
			</div>
			<select style="display: none;" class="edit-option-format-select"><?php echo $_smarty_tpl->tpl_vars['unit']->value['format'];?>

				<option value="psd" <?php if ($_smarty_tpl->tpl_vars['unit']->value['format']=='psd'){?>selected="selected"<?php }?>>PSD</option>
				<option value="jpg/png" <?php if ($_smarty_tpl->tpl_vars['unit']->value['format']=='jpg/png'){?>selected="selected"<?php }?>>JPG/PNG</option>
				<option value="ai"<?php if ($_smarty_tpl->tpl_vars['unit']->value['format']=='ai'){?>selected="selected"<?php }?>>AI</option>
			</select>
		<?php }?>
	</div>
	<div class="edit-request-controls">
		<ul>
			<li class="request-control-edit">Edit</li>
			<li class="request-control-remove">Remove</li>
		</ul>
	</div>
	<input type="hidden" class="requestTypeHolder" value="<?php echo $_smarty_tpl->tpl_vars['unit']->value['unit_type'];?>
" />
	<input type="hidden" id="hiddenUnitID" value="<?php echo $_smarty_tpl->tpl_vars['unit']->value['id'];?>
" />
</div><?php }} ?>