<?php /* Smarty version Smarty-3.1.8, created on 2012-05-09 18:40:10
         compiled from "C:\xampp\htdocs\creative\app\templates\login.ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145394fa98bc08483f1-61423592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a3f36691a8c7027448cfbdb863717c71775b726' => 
    array (
      0 => 'C:\\xampp\\htdocs\\creative\\app\\templates\\login.ajax.tpl',
      1 => 1336581607,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145394fa98bc08483f1-61423592',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fa98bc088f351_85593303',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa98bc088f351_85593303')) {function content_4fa98bc088f351_85593303($_smarty_tpl) {?><div class="loginForm j-loginFormFlag">
	<label for="userLogin" class="j-loginFormFlag">Email</label>
	<input type="text" id="userLogin" class="j-loginFormFlag" />
	<label for="passLogin" class="j-loginFormFlag">Password</label>
	<input type="password" id="passLogin" class="j-loginFormFlag" />
	<button id="submitBtn" class="j-loginFormFlag">Submit</button>
</div><?php }} ?>