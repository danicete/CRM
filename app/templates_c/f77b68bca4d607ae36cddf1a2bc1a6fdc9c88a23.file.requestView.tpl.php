<?php /* Smarty version Smarty-3.1.8, created on 2012-07-09 14:07:50
         compiled from "../app/templates/_components/requestView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2447232114ff600aad1a920-00539641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f77b68bca4d607ae36cddf1a2bc1a6fdc9c88a23' => 
    array (
      0 => '../app/templates/_components/requestView.tpl',
      1 => 1341857266,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2447232114ff600aad1a920-00539641',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4ff600aae17439_85438739',
  'variables' => 
  array (
    'requestPIN' => 0,
    'requestRow' => 0,
    'curseSalesRep' => 0,
    'unitDetails' => 0,
    'unit' => 0,
    'mock' => 0,
    'path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff600aae17439_85438739')) {function content_4ff600aae17439_85438739($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/jlwatson/public_html/creative/app/lib/smarty/plugins/modifier.date_format.php';
?><div class="view-page-content">
	<div style="text-align: center;">Request PIN: #<?php echo $_smarty_tpl->tpl_vars['requestPIN']->value;?>
</div>
	<div class="form-view-container">
		<h3>Campaign Info</h3>
		<div id="form-view-campaign" class="clearfix">
			<div class="form-view-label">Campaign Name</div>
			<div class="form-view-info"><?php echo $_smarty_tpl->tpl_vars['requestRow']->value['campaignName'];?>
</div>
			<div class="form-view-label">Advertiser</div>
			<div class="form-view-info"><?php echo $_smarty_tpl->tpl_vars['requestRow']->value['advertiser'];?>
</div>
			<div class="form-view-label">Agency</div>
			<div class="form-view-info"><?php echo $_smarty_tpl->tpl_vars['requestRow']->value['agency'];?>
</div>
			<div class="form-view-label">Curse Sales Rep</div>
			<div class="form-view-info"><?php echo $_smarty_tpl->tpl_vars['curseSalesRep']->value;?>
</div>
			<div class="form-view-label">Launch Date</div>
			<div class="form-view-info"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['requestRow']->value['launchDate'],"%D");?>
</div>
		</div>
		<div id="form-view-summary">
			<h4>Summary of Request</h4>
			<p><?php echo $_smarty_tpl->tpl_vars['requestRow']->value['summary'];?>
</p>
			<h4>FTP Info</h4>
			<p><?php echo $_smarty_tpl->tpl_vars['requestRow']->value['ftpinfo'];?>
</p>
		</div>
		<div id="form-view-timeline">
			<div class="form-view-label">1st Mockups</div>
			<div class="form-view-info"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['requestRow']->value['timeline1'],"%D");?>
</div>
			<div class="clearfix"></div>
			<div class="form-view-label">Curse Feedback</div>
			<div class="form-view-info"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['requestRow']->value['timeline2'],"%D");?>
</div>
			<div class="clearfix"></div>
			<div class="form-view-label">Final Mockups</div>
			<div class="form-view-info"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['requestRow']->value['timeline3'],"%D");?>
</div>
			<div class="clearfix"></div>
			<div class="form-view-label">Final Feedback</div>
			<div class="form-view-info"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['requestRow']->value['timeline4'],"%D");?>
</div>
			<div class="clearfix"></div>
			<div class="form-view-label">Initial Launch</div>
			<div class="form-view-info"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['requestRow']->value['timeline5'],"%D");?>
</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
		<div id="form-view-units">
			<?php  $_smarty_tpl->tpl_vars['unit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['unit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['unitDetails']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['unit']->key => $_smarty_tpl->tpl_vars['unit']->value){
$_smarty_tpl->tpl_vars['unit']->_loop = true;
?>
				<div class="form-view-unit clearfix">
					<h3><?php echo $_smarty_tpl->tpl_vars['unit']->value['name'];?>
</h3>
					<div class="form-view-unit-mocks">
						<h5>Unit Mocks</h5>
						<?php  $_smarty_tpl->tpl_vars['mock'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mock']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['unit']->value['mocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mock']->key => $_smarty_tpl->tpl_vars['mock']->value){
$_smarty_tpl->tpl_vars['mock']->_loop = true;
?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['mock']->value['imgPath'];?>
">
								<?php echo $_smarty_tpl->tpl_vars['mock']->value['pageName'];?>

							</a>
						<?php } ?>
						<?php if (count($_smarty_tpl->tpl_vars['unit']->value['mocks'])==0){?>
							<p class="no-mocks-small">No mocks have been added yet.</p>
						<?php }?>
					</div>
					<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['unit']->value['timeline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['optionsLoop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value){
$_smarty_tpl->tpl_vars['option']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['optionsLoop']['index']++;
?>
					<?php if ($_smarty_tpl->tpl_vars['unit']->value['options'][$_smarty_tpl->getVariable('smarty')->value['foreach']['optionsLoop']['index']]==1){?>
					<div class="form-view-unit-option <?php if ($_smarty_tpl->tpl_vars['unit']->value['options'][$_smarty_tpl->getVariable('smarty')->value['foreach']['optionsLoop']['index']]==1){?>selectedOption<?php }?>">
						<?php echo $_smarty_tpl->tpl_vars['unit']->value['timeline'][$_smarty_tpl->getVariable('smarty')->value['foreach']['optionsLoop']['index']];?>

					</div>
					<?php }?>
					<?php } ?>
					<h4 class="unit-subtitle">Unit Details</h4>
					<div class="form-view-unit-details">
						<?php echo $_smarty_tpl->tpl_vars['unit']->value['details'];?>

					</div>
				</div>
			<?php } ?>
		</div>
		<div id="form-view-user-actions">
			<h3>User Controls</h3>
			<ul class="user-actions-list">
				<li>
					<a id="actionEdit" class="user-action-button" href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/edit/?rpin=<?php echo $_smarty_tpl->tpl_vars['requestPIN']->value;?>
">Edit</a>
				</li>
				<li>
					<a id="actionFollowers" class="user-action-button" href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/edit/view-followers/?rpin=<?php echo $_smarty_tpl->tpl_vars['requestPIN']->value;?>
">Followers</a>
				</li>
				<li>
					<a id="actionSubmitMocks" class="user-action-button" href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/edit/submit-mocks/?rpin=<?php echo $_smarty_tpl->tpl_vars['requestPIN']->value;?>
">Submit Mocks</a>
				</li>
			</ul>
		</div>
	</div>
</div><?php }} ?>