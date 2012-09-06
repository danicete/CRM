<?php /* Smarty version Smarty-3.1.8, created on 2012-09-06 18:32:52
         compiled from "C:\xampp\htdocs\crm\app\templates\_components\authbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:893050468a4b628c04-16973766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96115b73a046a90f27b703b06751c13e4779ea12' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\app\\templates\\_components\\authbar.tpl',
      1 => 1346894369,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '893050468a4b628c04-16973766',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50468a4b64d048_99070682',
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50468a4b64d048_99070682')) {function content_50468a4b64d048_99070682($_smarty_tpl) {?><div class="authbar">
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