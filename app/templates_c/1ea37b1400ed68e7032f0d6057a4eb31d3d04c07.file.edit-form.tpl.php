<?php /* Smarty version Smarty-3.1.8, created on 2012-09-06 19:15:43
         compiled from "C:\xampp\htdocs\crm\app\templates\edit-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1493050468a5507a926-90840041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ea37b1400ed68e7032f0d6057a4eb31d3d04c07' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\app\\templates\\edit-form.tpl',
      1 => 1346894367,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1493050468a5507a926-90840041',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50468a5516a2c6_36347537',
  'variables' => 
  array (
    'requestData' => 0,
    'campaignInfo' => 0,
    'c' => 0,
    'timelineInfo' => 0,
    'unitsInfo' => 0,
    'unitDOMblock' => 0,
    'path' => 0,
    'requestPin' => 0,
    'addRequestDialog' => 0,
    'removeUnitDialog' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50468a5516a2c6_36347537')) {function content_50468a5516a2c6_36347537($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\crm\\app\\lib\\smarty\\plugins\\modifier.date_format.php';
?><div class="edit-form-wrapper">

	<h1 class="maintitle edittitle">Editing Request #<?php echo sprintf("%05d",$_smarty_tpl->tpl_vars['requestData']->value['id']);?>
</h1>
	<div class="edit-form-container clearfix">
		<section id="edit-form-campaign" class="edit-form-section clearfix">
			<div class="section-button campaign"></div>
			<div id="edit-form-campaign-info">
				<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['campaignInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['campaignLoop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['campaignLoop']['index']++;
?>
				<div class="edit-row clearfix">
					<div class="edit-form-field edit-<?php echo $_smarty_tpl->tpl_vars['c']->value['type'];?>
">
						<div id="edit-field-value-<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['campaignLoop']['index']+1;?>
" class="edit-form-field-value">
							<div class="edit-value-display" id="<?php echo $_smarty_tpl->tpl_vars['c']->value['fieldDOMId'];?>
" <?php if ($_smarty_tpl->tpl_vars['c']->value['userID']){?>data-authuserid="<?php echo $_smarty_tpl->tpl_vars['c']->value['userID'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['c']->value['value'];?>
</div>
							<input type="text" class="edit-form-field-input" style="display: none;" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['value'];?>
" />
							<input type="hidden" class="edit-original-value" value="<?php if ($_smarty_tpl->tpl_vars['c']->value['userID']){?><?php echo $_smarty_tpl->tpl_vars['c']->value['userID'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['c']->value['value'];?>
<?php }?>" />
						</div>
					</div>
					<div class="edit-form-label"><?php echo $_smarty_tpl->tpl_vars['c']->value['title'];?>
:</div>
					
				</div>
				<?php } ?>
			</div>
			<div id="edit-form-timeline-info">
				<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['timelineInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['timelineLoop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['timelineLoop']['index']++;
?>
				<div class="edit-row clearfix">
					<div class="edit-form-field edit-<?php echo $_smarty_tpl->tpl_vars['c']->value['type'];?>
">
						<div id="edit-field-value-<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['campaignLoop']['index']+$_smarty_tpl->getVariable('smarty')->value['foreach']['timelineLoop']['index']+2;?>
" class="edit-form-field-value">
							<div class="edit-value-display" id="<?php echo $_smarty_tpl->tpl_vars['c']->value['fieldDOMId'];?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['c']->value['value'],"%m/%d/%Y");?>
</div>
							<input type="text" class="edit-form-field-input" style="display: none;" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['c']->value['value'],"%m/%d/%Y");?>
" />
							<input type="hidden" class="edit-original-value" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['c']->value['value'],"%m/%d/%Y");?>
" />
						</div>
					</div>
					<div class="edit-form-label timeline-label"><?php echo $_smarty_tpl->tpl_vars['c']->value['title'];?>
:</div>
					
				</div>
				<?php } ?>
			</div>
		</section><!-- #edit-form-campaign -->
		<section id="edit-form-summary" class="edit-form-section">
			<div class="section-button summary"></div>
			<div class="edit-form-summary-container edit-form-field-value">
				<div class="edit-value-display" id="summary"><?php echo $_smarty_tpl->tpl_vars['requestData']->value['summary'];?>
</div>
				<textarea id="test" class="edit-form-textarea" style="display: none;"><?php echo $_smarty_tpl->tpl_vars['requestData']->value['summary'];?>
</textarea>
				<input type="hidden" class="edit-original-value" value="<?php echo $_smarty_tpl->tpl_vars['requestData']->value['summary'];?>
" />
			</div>
		</section><!-- #edit-form-summary -->
		<section id="edit-form-ftp" class="edit-form-section">
			<div class="section-button ftp"></div>
			<div class="edit-form-summary-container edit-form-field-value">
				<div class="edit-value-display" id="ftpinfo"><?php echo $_smarty_tpl->tpl_vars['requestData']->value['ftpinfo'];?>
</div>
				<textarea class="edit-form-textarea" style="display: none;"><?php echo $_smarty_tpl->tpl_vars['requestData']->value['ftpinfo'];?>
</textarea>
				<input type="hidden" class="edit-original-value" value="<?php echo $_smarty_tpl->tpl_vars['requestData']->value['ftpinfo'];?>
" />
			</div>	
		</section><!-- #edit-form-ftp -->
		<div class="addRequestContent">Request Another Unit</div>
		<div class="clearfix"></div>
		<section id="edit-form-units" class="edit-form-section">
			<?php  $_smarty_tpl->tpl_vars['unit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['unit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['unitsInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['unit']->key => $_smarty_tpl->tpl_vars['unit']->value){
$_smarty_tpl->tpl_vars['unit']->_loop = true;
?>
				<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['unitDOMblock']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<?php } ?>
				
		</section><!-- #edit-form-units -->
	</div><!-- .edit-form-container -->
	<div class="edit-form-user-buttons-container clearfix">
		<a class="edit-form-user-button" href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/view/?rpin=<?php echo $_smarty_tpl->tpl_vars['requestPin']->value;?>
">
			Back to View
		</a>
		<div class="edit-form-user-button" id="saveform">
			Save Changes
		</div>
	</div>
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['addRequestDialog']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['removeUnitDialog']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<input type="hidden" id="formSavePostURL" value="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/edit/" />
	<input type="hidden" id="editAjaxURL" value="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/edit.ajax/" />
	<input type="hidden" id="formID" value="<?php echo $_smarty_tpl->tpl_vars['requestData']->value['id'];?>
" />
	<input type="hidden" id="formPin" value="<?php echo $_smarty_tpl->tpl_vars['requestData']->value['pin'];?>
" />
</div><!-- .edit-form-wrapper --><?php }} ?>