<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 18:44:19
         compiled from "C:\xampp\htdocs\crm\app\templates\edit\followers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7317504780f6272da8-61073427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc2b6c03c5ad091d9c7a7528fd46047e37c395b0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\app\\templates\\edit\\followers.tpl',
      1 => 1346863458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7317504780f6272da8-61073427',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504780f63df569_48881575',
  'variables' => 
  array (
    'header' => 0,
    'reqRow' => 0,
    'usersInfo' => 0,
    'user' => 0,
    'removeFollower' => 0,
    'path' => 0,
    'rpin' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504780f63df569_48881575')) {function content_504780f63df569_48881575($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<h1 class="maintitle">Followers of Request #<?php echo sprintf("%05d",$_smarty_tpl->tpl_vars['reqRow']->value['id']);?>
</h1>
  <div class="full-page-container clearfix">
    <div class="view-followers-table-header">
      <div class="view-followers-isadmin-header">Admin?</div>
      <div class="view-followers-name-header">Name</div>
      <div class="view-followers-email-header">Email</div>
      <div class="view-followers-controls-header">Controls</div>
    </div> 
    <div class="viewFollowersContent">
      <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usersInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
      <div class="follower-container">
        <div class="follower-isadmin"><?php if ($_smarty_tpl->tpl_vars['user']->value['isAdmin']){?><span style="color: #C06514">Admin</span><?php }?></div>
        <div class="follower-name"><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</div>
        <div class="follower-email"><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</div>
        <div class="follower-controls">
          <?php if (!$_smarty_tpl->tpl_vars['user']->value['isAdmin']){?>
            <span class="follower-remove-control">Remove</span>
          <?php }?>
          <input type="hidden" class="follower-hidden-id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" />
        </div>
      </div>  
      <?php } ?>  
    </div>
    <div class="follower-actions">
      <div class="request-dialog-button" id="followerAdd">Add Follower</div>
    </div>
  </div>
  <div id="addFollowerDialog"></div>
  <div id="removeFollowerDialog" style="display:none;">
    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['removeFollower']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  </div>
  <input type="hidden" id="followersURL" value="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/edit/followers" />
  <input type="hidden" id="requestPIN" value="<?php echo $_smarty_tpl->tpl_vars['rpin']->value;?>
" />
  <div class="small-page-footer">
    <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/view/?rpin=<?php echo $_smarty_tpl->tpl_vars['rpin']->value;?>
">Back to Request</a>
  </div>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>