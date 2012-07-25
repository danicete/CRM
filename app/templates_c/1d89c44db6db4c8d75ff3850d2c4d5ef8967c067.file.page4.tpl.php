<?php /* Smarty version Smarty-3.1.8, created on 2012-07-03 19:48:40
         compiled from "../app/templates\_formPages\page4.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107054ff320614b5011-99729193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d89c44db6db4c8d75ff3850d2c4d5ef8967c067' => 
    array (
      0 => '../app/templates\\_formPages\\page4.tpl',
      1 => 1341337716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107054ff320614b5011-99729193',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4ff320614d44d6_11331863',
  'variables' => 
  array (
    'usersInfo' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff320614d44d6_11331863')) {function content_4ff320614d44d6_11331863($_smarty_tpl) {?><div id="form-page-4" class="form-page" style="display: none;">
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