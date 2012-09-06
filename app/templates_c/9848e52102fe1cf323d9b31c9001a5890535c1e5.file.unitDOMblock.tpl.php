<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 19:13:09
         compiled from "/home/jlwatson/public_html/crm/app/templates/_blocks/unitDOMblock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14792478545047dc85614cc4-14663000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9848e52102fe1cf323d9b31c9001a5890535c1e5' => 
    array (
      0 => '/home/jlwatson/public_html/crm/app/templates/_blocks/unitDOMblock.tpl',
      1 => 1346869497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14792478545047dc85614cc4-14663000',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'unit' => 0,
    'option' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5047dc85676335_97243350',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5047dc85676335_97243350')) {function content_5047dc85676335_97243350($_smarty_tpl) {?><div class="edit-request-container">
	<div class="edit-request-content">
		<h4 class="edit-request-title"><?php echo $_smarty_tpl->tpl_vars['unit']->value['name'];?>
</h4>
		<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['unit']->value['unitOptions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['option']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['option']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['optionsLoop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value){
$_smarty_tpl->tpl_vars['option']->_loop = true;
 $_smarty_tpl->tpl_vars['option']->iteration++;
 $_smarty_tpl->tpl_vars['option']->last = $_smarty_tpl->tpl_vars['option']->iteration === $_smarty_tpl->tpl_vars['option']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['optionsLoop']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['optionsLoop']['last'] = $_smarty_tpl->tpl_vars['option']->last;
?>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['optionsLoop']['index']%2==0){?>
			<div class="unit-option-group">
		<?php }?>
			<div class="edit-request-unit-option">
				<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['optionsLoop']['index']<$_smarty_tpl->tpl_vars['unit']->value['options_count']){?>
				<input type="checkbox" class="edit-request-option-checkbox option<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['optionsLoop']['index']+1;?>
" <?php if ($_smarty_tpl->tpl_vars['option']->value==1){?>checked="checked"<?php }?> />
				<?php }?>
				<?php echo $_smarty_tpl->tpl_vars['unit']->value['optionquestion'][$_smarty_tpl->getVariable('smarty')->value['foreach']['optionsLoop']['index']];?>

			</div>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['optionsLoop']['index']%2==1||$_smarty_tpl->getVariable('smarty')->value['foreach']['optionsLoop']['last']){?>
			</div>
		<?php }?>
		<?php } ?>
		<div class="clearfix"></div>
		<div class="edit-form-details-header">Unit Details</div>
		<textarea class="edit-option-details-textarea"><?php echo $_smarty_tpl->tpl_vars['unit']->value['details'];?>
</textarea>
	</div>
	<div class="edit-request-remove">Remove</div>
	<input type="hidden" class="requestTypeHolder" value="<?php echo $_smarty_tpl->tpl_vars['unit']->value['unit_type'];?>
" />
	<input type="hidden" class="hiddenUnitID" value="<?php echo $_smarty_tpl->tpl_vars['unit']->value['id'];?>
" />
</div><?php }} ?>