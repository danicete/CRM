<?php /* Smarty version Smarty-3.1.8, created on 2012-05-10 18:22:10
         compiled from "C:\xampp\htdocs\creative\app\templates\login-form.ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162564faaa31ba7bb89-72702919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15d4446e741b07768a1e00ed12e4b286f2f2593e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\creative\\app\\templates\\login-form.ajax.tpl',
      1 => 1336583083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162564faaa31ba7bb89-72702919',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4faaa31bab5bd6_77943370',
  'variables' => 
  array (
    'submitURL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4faaa31bab5bd6_77943370')) {function content_4faaa31bab5bd6_77943370($_smarty_tpl) {?><div class="loginForm j-loginFormFlag">
	<label for="userLogin" class="j-loginFormFlag">Email</label>
	<input type="text" id="userLogin" class="j-loginFormFlag" />
	<label for="passLogin" class="j-loginFormFlag">Password</label>
	<input type="password" id="passLogin" class="j-loginFormFlag" />
	<button id="submitBtn" class="j-loginFormFlag" formaction="<?php echo $_smarty_tpl->tpl_vars['submitURL']->value;?>
">Submit</button>
</div><?php }} ?>