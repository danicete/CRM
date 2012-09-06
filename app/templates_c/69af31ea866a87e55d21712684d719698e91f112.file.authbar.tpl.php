<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 17:03:19
         compiled from "/home/jlwatson/public_html/crm/app/templates/_components/authbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16681486275047be17cb96c3-59479955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69af31ea866a87e55d21712684d719698e91f112' => 
    array (
      0 => '/home/jlwatson/public_html/crm/app/templates/_components/authbar.tpl',
      1 => 1346869497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16681486275047be17cb96c3-59479955',
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
  'unifunc' => 'content_5047be17ce87b3_26894425',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5047be17ce87b3_26894425')) {function content_5047be17ce87b3_26894425($_smarty_tpl) {?><div class="authbar">
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