<?php /* Smarty version Smarty-3.1.8, created on 2012-09-07 20:30:05
         compiled from "C:\xampp\htdocs\crm\app\templates\login-form.ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19162504a3d2d35cf76-34701222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c771c3938ffbd1068f62df0de0bbefeb819458c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\app\\templates\\login-form.ajax.tpl',
      1 => 1346894367,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19162504a3d2d35cf76-34701222',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'submitURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504a3d2d3857e6_53171244',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504a3d2d3857e6_53171244')) {function content_504a3d2d3857e6_53171244($_smarty_tpl) {?><div class="loginForm j-loginFormFlag">
	<label for="userLogin" class="j-loginFormFlag">Email</label>
	<input type="text" id="userLogin" class="j-loginFormFlag" />
	<label for="passLogin" class="j-loginFormFlag">Password</label>
	<input type="password" id="passLogin" class="j-loginFormFlag" />
	<button id="submitBtn" class="j-loginFormFlag" formaction="<?php echo $_smarty_tpl->tpl_vars['submitURL']->value;?>
">Submit</button>
</div><?php }} ?>