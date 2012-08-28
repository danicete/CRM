<?php /* Smarty version Smarty-3.1.8, created on 2012-08-28 01:11:39
         compiled from "C:\xampp\htdocs\creative\app\templates\_components\authbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20580503bfeabf07e64-00566639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41c4eb30b8c874a8f2a484e76fa792c6a362f9fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\creative\\app\\templates\\_components\\authbar.tpl',
      1 => 1345252118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20580503bfeabf07e64-00566639',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'path' => 0,
    'loggedIn' => 0,
    'request_uri' => 0,
    'queryParams' => 0,
    'authName' => 0,
    'authMessage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_503bfeabf2c607_04282217',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503bfeabf2c607_04282217')) {function content_503bfeabf2c607_04282217($_smarty_tpl) {?><div class="authbar">
	<a id="authHomeBtn" href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
">Home</a>
	<?php if ($_smarty_tpl->tpl_vars['loggedIn']->value==1){?>
		<a id="authLogoff" href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/logout/?currPage=<?php echo $_smarty_tpl->tpl_vars['path']->value['host'];?>
<?php echo $_smarty_tpl->tpl_vars['request_uri']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['queryParams']->value;?>
">Log out</a>
		<p>You are logged in as: <span class="username"><?php echo $_smarty_tpl->tpl_vars['authName']->value;?>
</span><span class="authpipe">|</span></p>
	<?php }else{ ?>
		<a id="authLogin" href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/login-form.ajax/">Log in</a>
		<p><?php echo $_smarty_tpl->tpl_vars['authMessage']->value;?>
<span class="authpipe">|</span></p>
	<?php }?>
	<div class="clearfix"></div>
</div><?php }} ?>