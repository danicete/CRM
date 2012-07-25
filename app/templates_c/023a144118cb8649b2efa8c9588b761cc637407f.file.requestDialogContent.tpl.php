<?php /* Smarty version Smarty-3.1.8, created on 2012-06-22 00:02:13
         compiled from "C:\xampp\htdocs\creative\app\templates\_editPages\requestDialogContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84184fd7ca0bb5b0b7-49766885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '023a144118cb8649b2efa8c9588b761cc637407f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\creative\\app\\templates\\_editPages\\requestDialogContent.tpl',
      1 => 1340316124,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84184fd7ca0bb5b0b7-49766885',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fd7ca0bbce174_08437134',
  'variables' => 
  array (
    'typeInfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fd7ca0bbce174_08437134')) {function content_4fd7ca0bbce174_08437134($_smarty_tpl) {?><div class="addRequestDialogContent">
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
	<select class="dialog-select">
		<option value="jpg/png">Format:</option>
		<option value="psd">PSD</option>
		<option value="jpg/png">JPG/PNG</option>
		<option value="ai">AI</option>
	</section>	
</div><?php }} ?>