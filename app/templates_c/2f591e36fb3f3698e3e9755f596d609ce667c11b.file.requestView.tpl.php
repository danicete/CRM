<?php /* Smarty version Smarty-3.1.8, created on 2012-08-28 01:18:14
         compiled from "C:\xampp\htdocs\creative\app\templates\_components\requestView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3431503c003660cfb0-95336156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f591e36fb3f3698e3e9755f596d609ce667c11b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\creative\\app\\templates\\_components\\requestView.tpl',
      1 => 1345652993,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3431503c003660cfb0-95336156',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'requestPIN' => 0,
    'requestRow' => 0,
    'curseSalesRep' => 0,
    'loggedIn' => 0,
    'showControls' => 0,
    'path' => 0,
    'unitDetails' => 0,
    'unit' => 0,
    'mock' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_503c003670c122_22076225',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503c003670c122_22076225')) {function content_503c003670c122_22076225($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\creative\\app\\lib\\smarty\\plugins\\modifier.date_format.php';
?><div class="view-page-content">
	<div class="view-pin-container">Request PIN: #<?php echo $_smarty_tpl->tpl_vars['requestPIN']->value;?>
</div>
	<div class="form-view-container">
		<section id="form-view-campaign">
			<div id="campaign-info">
				<div class="section-button campaign"></div>
				<div>Campaign Name:<span><?php echo $_smarty_tpl->tpl_vars['requestRow']->value['campaignName'];?>
</span></div>
				<div>Advertiser:<span><?php echo $_smarty_tpl->tpl_vars['requestRow']->value['advertiser'];?>
</span></div>
				<div>Agency:<span><?php echo $_smarty_tpl->tpl_vars['requestRow']->value['agency'];?>
</span></div>
				<div>Curse Sales Rep:<span><?php echo $_smarty_tpl->tpl_vars['curseSalesRep']->value;?>
</span></div>
				<div>Launch Date:<span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['requestRow']->value['launchDate'],"%D");?>
</span></div>
			</div>
			<div id="timeline-info">
				<div>Curse Provides 1st Mockups:<span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['requestRow']->value['timeline1'],"%D");?>
</span></div>
				<div>Client Provides Feedback:<span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['requestRow']->value['timeline2'],"%D");?>
</span></div>
				<div>Curse Provides Final Mockups:<span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['requestRow']->value['timeline3'],"%D");?>
</span></div>
				<div>Curse Provides Final Feedback:<span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['requestRow']->value['timeline4'],"%D");?>
</span></div>
				<div>Initial Campaign Launch:<span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['requestRow']->value['timeline5'],"%D");?>
</span></div>
			</div>
			<div class="clearfix"></div>
		</section>
		<div id="form-view-status" style="display:none;">
			<p>This request's current status: </p>
			 <div class="form-view-status status-<?php echo $_smarty_tpl->tpl_vars['requestRow']->value['status'];?>
"><?php echo $_smarty_tpl->tpl_vars['requestRow']->value['status'];?>
</div>
		</div>
		<section id="form-view-summary">
			<div class="section-button summary"></div>
			<p><?php echo $_smarty_tpl->tpl_vars['requestRow']->value['summary'];?>
</p>
		</section>
		<section id="form-view-ftp">
			<div class="section-button ftp"></div>
			<p><?php echo $_smarty_tpl->tpl_vars['requestRow']->value['ftpinfo'];?>
</p>
		</section>
		<div id="form-view-user-actions">
			<h3>User Controls</h3>
			<?php if ($_smarty_tpl->tpl_vars['loggedIn']->value){?>
			<ul class="user-actions-list">
				<?php if ($_smarty_tpl->tpl_vars['showControls']->value){?>
				<li>
					<a id="actionEdit" class="user-action-button user-control-button" href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/edit/?rpin=<?php echo $_smarty_tpl->tpl_vars['requestPIN']->value;?>
">
						<div class="action-icon edit"></div>
						Edit
					</a>
				</li>
				<?php }?>
				<li>
					<a id="actionFollowers" class="user-action-button user-control-button" href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/edit/view-followers/?rpin=<?php echo $_smarty_tpl->tpl_vars['requestPIN']->value;?>
">
						<div class="action-icon followers"></div>
						Followers
					</a>
				</li>
				<?php if ($_smarty_tpl->tpl_vars['showControls']->value){?>
				<li>
					<a id="actionSubmitMocks" class="user-action-button user-control-button" href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/edit/submit-mocks/?rpin=<?php echo $_smarty_tpl->tpl_vars['requestPIN']->value;?>
">
						<div class="action-icon mocks"></div>
						Manage Mocks
					</a>
				</li>
				<?php }?>
			</ul>
			<?php }else{ ?>
			<p style="width: 160px">Please log in to view user controls.</p>
			<?php }?>
		</div>
		<div id="form-view-units">
			<?php  $_smarty_tpl->tpl_vars['unit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['unit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['unitDetails']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['unit']->key => $_smarty_tpl->tpl_vars['unit']->value){
$_smarty_tpl->tpl_vars['unit']->_loop = true;
?>
				<div class="form-view-unit">
					<div class="form-view-unit-mocks">
						<h5>Unit Mocks</h5>
						<?php  $_smarty_tpl->tpl_vars['mock'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mock']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['unit']->value['mocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mock']->key => $_smarty_tpl->tpl_vars['mock']->value){
$_smarty_tpl->tpl_vars['mock']->_loop = true;
?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['mock']->value['imgPath'];?>
">
								<img class="mock-view-thumb" src="<?php echo $_smarty_tpl->tpl_vars['mock']->value['thumbPath'];?>
" />

							</a>
						<?php } ?>
						<?php if (count($_smarty_tpl->tpl_vars['unit']->value['mocks'])==0){?>
							<p class="no-mocks-small">No mocks have been added yet.</p>
						<?php }?>
					</div>
					<h3><?php echo $_smarty_tpl->tpl_vars['unit']->value['name'];?>
</h3>
					<?php if (count($_smarty_tpl->tpl_vars['unit']->value['timeline'])>0){?>
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
					<?php }?>
					<h4 class="unit-subtitle">Unit Details</h4>
					<div class="form-view-unit-details">
						<?php if ($_smarty_tpl->tpl_vars['unit']->value['details']){?>
						<?php echo $_smarty_tpl->tpl_vars['unit']->value['details'];?>

						<?php }else{ ?>
						<span style="font-size:12px;">No details were specified for this unit.</span>
						<?php }?>
					</div>
					<div class="clearfix"></div>
				</div>
			<?php } ?>
			<div class="clearfix"></div>
		</div>
		
	</div>
</div><?php }} ?>