<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 18:34:58
         compiled from "/home/jlwatson/public_html/crm/app/templates/_formPages/page3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13417429295047d392267024-86968078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d0f63118f243d186e6b942948ea64678684920e' => 
    array (
      0 => '/home/jlwatson/public_html/crm/app/templates/_formPages/page3.tpl',
      1 => 1346869498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13417429295047d392267024-86968078',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usersInfo' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5047d3922a4247_08764578',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5047d3922a4247_08764578')) {function content_5047d3922a4247_08764578($_smarty_tpl) {?><div id="form-page-3" class="form-page" style="display: none;">
  <h3 class="form-page-title">Select Followers</h3>
  <div class="select-followers-container">
    <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usersInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
      <div class="follower-container <?php if ($_smarty_tpl->tpl_vars['user']->value['isAdmin']==1){?>selected<?php }?>">
        <div class="follower-check">
          <input type="checkbox" class="follower-checkbox <?php if ($_smarty_tpl->tpl_vars['user']->value['isAdmin']==1){?>adminFollower<?php }?>" <?php if ($_smarty_tpl->tpl_vars['user']->value['isAdmin']==1){?>checked="checked"<?php }?> />
          <input type="hidden" class="hidden-user-id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" />
        </div>
        <div class="follower-name"><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</div>
        <div class="follower-email"><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</div>
        <div class="follower-status">
          <?php if ($_smarty_tpl->tpl_vars['user']->value['isAdmin']==1){?>
            <span style="color: #C06514">Admin</span>
          <?php }?>
        </div>
      </div>
    <?php } ?>
  </div> 
</div>  <!-- .page4 --><?php }} ?>