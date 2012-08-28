<?php /* Smarty version Smarty-3.1.8, created on 2012-08-28 01:17:20
         compiled from "C:\xampp\htdocs\creative\app\templates\_formPages\page3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:918503c00009c50d4-80136481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7712a5f6059c8d1dccd8f3a1d117e971c74c0ad4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\creative\\app\\templates\\_formPages\\page3.tpl',
      1 => 1345669222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '918503c00009c50d4-80136481',
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
  'unifunc' => 'content_503c00009fa3e0_51338734',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503c00009fa3e0_51338734')) {function content_503c00009fa3e0_51338734($_smarty_tpl) {?><div id="form-page-3" class="form-page" style="display: none;">
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