<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 01:12:44
         compiled from "C:\xampp\htdocs\crm\app\templates\_editPages\requestDialogContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:319950468aec483ee8-14720958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed4574cb647c802fefc377ea486e8a38494f73a9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\app\\templates\\_editPages\\requestDialogContent.tpl',
      1 => 1342648413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '319950468aec483ee8-14720958',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'typeInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50468aec4bb4b8_67512372',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50468aec4bb4b8_67512372')) {function content_50468aec4bb4b8_67512372($_smarty_tpl) {?><div class="addRequestDialogContent">
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['typeInfoLoop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['typeInfoLoop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['typeInfoLoop']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['typeInfo']->value['options_count']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['typeInfoLoop']['name'] = 'typeInfoLoop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['typeInfoLoop']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['typeInfoLoop']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['typeInfoLoop']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['typeInfoLoop']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['typeInfoLoop']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['typeInfoLoop']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['typeInfoLoop']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['typeInfoLoop']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['typeInfoLoop']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['typeInfoLoop']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['typeInfoLoop']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['typeInfoLoop']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['typeInfoLoop']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['typeInfoLoop']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['typeInfoLoop']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['typeInfoLoop']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['typeInfoLoop']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['typeInfoLoop']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['typeInfoLoop']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['typeInfoLoop']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['typeInfoLoop']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['typeInfoLoop']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['typeInfoLoop']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['typeInfoLoop']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['typeInfoLoop']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['typeInfoLoop']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['typeInfoLoop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['typeInfoLoop']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['typeInfoLoop']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['typeInfoLoop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['typeInfoLoop']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['typeInfoLoop']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['typeInfoLoop']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['typeInfoLoop']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['typeInfoLoop']['total']);
?>
		<div class="dialog-option">
			<?php echo $_smarty_tpl->tpl_vars['typeInfo']->value['options'][$_smarty_tpl->getVariable('smarty')->value['section']['typeInfoLoop']['index']];?>

			<input type="checkbox" class="dialog-option-checkbox" />
		</div>	
	<?php endfor; endif; ?>
	<textarea class="dialog-ta">Details...</textarea>
	<select class="dialog-select" style="display: none">
		<option value="jpg/png">Format:</option>
		<option value="psd">PSD</option>
		<option value="jpg/png" selected="selected">JPG/PNG</option>
		<option value="ai">AI</option>
	</section>	
</div><?php }} ?>