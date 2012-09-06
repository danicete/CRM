<?php /* Smarty version Smarty-3.1.8, created on 2012-08-31 01:19:06
         compiled from "C:\xampp\htdocs\creative\app\templates\lookup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29174503bfeabe35785-88006289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40b3fb0a6f61b5b399137e689e8d25f0e61d8947' => 
    array (
      0 => 'C:\\xampp\\htdocs\\creative\\app\\templates\\lookup.tpl',
      1 => 1346368745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29174503bfeabe35785-88006289',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_503bfeabeacb46_87800059',
  'variables' => 
  array (
    'header' => 0,
    'path' => 0,
    'recentRequestsBlock' => 0,
    'showList' => 0,
    'listingInfo' => 0,
    'request' => 0,
    'unfollowDialog' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503bfeabeacb46_87800059')) {function content_503bfeabeacb46_87800059($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\creative\\app\\lib\\smarty\\plugins\\modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<h1 class="maintitle">Find a Request</h1>
<div class="page-lookup">
  <div class="lookup-options-container">
    <div class="lookup-pin">
      <form method="GET" action="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/view/">
        <h3>Request Pin</h3>
        <span>If you have the PIN of the Request you're looking for, enter it here.</span>
        <input type="text" class="lookup-pin-input" maxlength="5" name="rpin" />
        <input type="submit" id="lookup-pin-submit" value="Go!" />
       </form> 
    </div>
    <span>OR</span>
    <?php echo $_smarty_tpl->tpl_vars['recentRequestsBlock']->value;?>
  
  </div>
  <?php if ($_smarty_tpl->tpl_vars['showList']->value==1){?>
  <div class="request-listing-container">
    <h2>All Requests</h2>
    <div class="req-list-wrapper">
      <div class="req-list-header">
        <span>Campaign Name</span>
        <span>Rep.</span>
        <span>Status</span>
        <span>Controls</span>
      </div>
      <div class="req-list-view">
        <div class="req-list">
          <?php  $_smarty_tpl->tpl_vars['request'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['request']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listingInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['listingLoop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['request']->key => $_smarty_tpl->tpl_vars['request']->value){
$_smarty_tpl->tpl_vars['request']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['listingLoop']['index']++;
?>
          <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['listingLoop']['index']%10==0){?>
          <div class="req-list-page <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['listingLoop']['index']==0){?>currPage<?php }?>">
          <?php }?>
            <div class="req-list-item">
              <div class="req-list-id">
                <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/view/?rpin=<?php echo $_smarty_tpl->tpl_vars['request']->value['pin'];?>
" class="req-list-id-link">#&nbsp;<?php echo sprintf("%05d",$_smarty_tpl->tpl_vars['request']->value['id']);?>
</a>
              </div>
              <div class="req-list-campaign"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['request']->value['campaignName'],24,"...");?>
</div>
              <div class="req-list-salesRep"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['request']->value['curseSalesRep'],24,"...");?>
</div>
              <div class="req-status-wrapper"><div class="req-list-status status-<?php echo $_smarty_tpl->tpl_vars['request']->value['status'];?>
"><?php echo $_smarty_tpl->tpl_vars['request']->value['pageStatus'];?>
</div></div>
              <div class="req-list-options">
                <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/edit/?rpin=<?php echo $_smarty_tpl->tpl_vars['request']->value['pin'];?>
">Edit</a>
              </div>
            </div>
          <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['listingLoop']['index']%10==9||$_smarty_tpl->getVariable('smarty')->value['foreach']['listingLoop']['index']==(count($_smarty_tpl->tpl_vars['listingInfo']->value)-1)){?>
          </div>
          <?php }?>
          <?php } ?>
        </div> 
      </div>
      <div class="req-list-nav">
        <a class="req-list-button first">&laquo;&nbsp;First</a>
        <a class="req-list-button prev">&lsaquo;&nbsp;Prev</a>
        <a class="req-list-button next">Next&nbsp;&rsaquo;</a>
        <a class="req-list-button end">Last&nbsp;&raquo;</a>
      </div>
    </div>
  </div>
  <?php }?>
</div>
<div id="unfollowDialog" style="display:none;">
  <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['unfollowDialog']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>