<?php /* Smarty version Smarty-3.1.8, created on 2012-08-28 01:40:59
         compiled from "C:\xampp\htdocs\creative\app\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5256503c058bf18160-07081498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e475e559b8d4c40f5cdf5a3405e8cc5a2f8e9e1f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\creative\\app\\templates\\login.tpl',
      1 => 1345683776,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5256503c058bf18160-07081498',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header' => 0,
    'path' => 0,
    'loginForwardString' => 0,
    'loginDestString' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_503c058c014761_57821004',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503c058c014761_57821004')) {function content_503c058c014761_57821004($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<h1 class="maintitle">Login</h1>
<form class="login-form clearfix" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/login/?s=form&f=<?php echo $_smarty_tpl->tpl_vars['loginForwardString']->value;?>
">
  <div class="login-form-title">Curse Email</div>
  <input type="text" class="login-form-value" name="loginUser" />
  <div class="login-form-title">Password</div>
  <input type="password" class="login-form-value" name="loginPw"/>
  <div class="clearfix"></div>
  <input type="submit" value="Submit" class="login-submit" />
  <input type="hidden" id="loginForwardLink" value="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
<?php echo $_smarty_tpl->tpl_vars['loginForwardString']->value;?>
" />
  <input type="hidden" id="loginDestLink" value="<?php echo $_smarty_tpl->tpl_vars['loginDestString']->value;?>
" />
</form>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>