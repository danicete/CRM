<?php /* Smarty version Smarty-3.1.8, created on 2012-08-31 02:29:10
         compiled from "C:\xampp\htdocs\creative\app\templates\_blocks\unitDOMblock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8627504005561801a5-90437594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94aeac1c5ba68b017d782f934d6a7aac528b79eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\creative\\app\\templates\\_blocks\\unitDOMblock.tpl',
      1 => 1346104736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8627504005561801a5-90437594',
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
  'unifunc' => 'content_504005561d13f6_02390494',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504005561d13f6_02390494')) {function content_504005561d13f6_02390494($_smarty_tpl) {?><div class="edit-request-container">
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