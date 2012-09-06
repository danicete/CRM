<?php /* Smarty version Smarty-3.1.8, created on 2012-08-30 20:28:27
         compiled from "C:\xampp\htdocs\creative\app\templates\login-form.ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3005503fb0cbc76825-75366160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15d4446e741b07768a1e00ed12e4b286f2f2593e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\creative\\app\\templates\\login-form.ajax.tpl',
      1 => 1341852450,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3005503fb0cbc76825-75366160',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'submitURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_503fb0cbe05771_16500941',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503fb0cbe05771_16500941')) {function content_503fb0cbe05771_16500941($_smarty_tpl) {?><div class="loginForm j-loginFormFlag">
	<label for="userLogin" class="j-loginFormFlag">Email</label>
	<input type="text" id="userLogin" class="j-loginFormFlag" />
	<label for="passLogin" class="j-loginFormFlag">Password</label>
	<input type="password" id="passLogin" class="j-loginFormFlag" />
	<button id="submitBtn" class="j-loginFormFlag" formaction="<?php echo $_smarty_tpl->tpl_vars['submitURL']->value;?>
">Submit</button>
</div><?php }} ?>