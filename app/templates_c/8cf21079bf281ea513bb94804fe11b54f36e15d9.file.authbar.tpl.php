<?php /* Smarty version Smarty-3.1.8, created on 2012-05-15 08:26:22
         compiled from "../app/templates\_components\authbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87574fa85e4cd07e67-78045139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cf21079bf281ea513bb94804fe11b54f36e15d9' => 
    array (
      0 => '../app/templates\\_components\\authbar.tpl',
      1 => 1337063163,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87574fa85e4cd07e67-78045139',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fa85e4cd305e7_56319687',
  'variables' => 
  array (
    'path' => 0,
    'loggedIn' => 0,
    'authName' => 0,
    'request_uri' => 0,
    'authMessage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa85e4cd305e7_56319687')) {function content_4fa85e4cd305e7_56319687($_smarty_tpl) {?><div class="authbar">
	<a id="authHomeBtn" href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
">Home</a>
	<?php if ($_smarty_tpl->tpl_vars['loggedIn']->value==1){?>
		<p>You are logged in as: <span><?php echo $_smarty_tpl->tpl_vars['authName']->value;?>
</span></p>
		<a id="authLogoff" href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/logout/?currPage=<?php echo $_smarty_tpl->tpl_vars['path']->value['host'];?>
<?php echo $_smarty_tpl->tpl_vars['request_uri']->value;?>
">Log out</a>
	<?php }else{ ?>
		<a id="authLogin" href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/login-form.ajax/">Log in</a>
		<p><?php echo $_smarty_tpl->tpl_vars['authMessage']->value;?>
</p>
	<?php }?>
</div><?php }} ?>