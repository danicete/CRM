<?php /* Smarty version Smarty-3.1.8, created on 2012-05-18 23:47:53
         compiled from "../app/templates\_formPages\completePage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212054fb683116cf1c7-05759109%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa58c87fc3b3020c86976efd35ca81adcdce99c7' => 
    array (
      0 => '../app/templates\\_formPages\\completePage.tpl',
      1 => 1337377672,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212054fb683116cf1c7-05759109',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fb683116d0607_78331678',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fb683116d0607_78331678')) {function content_4fb683116d0607_78331678($_smarty_tpl) {?><div id="form-complete-page" class="form-page" style="display: none;">
	<h2>You've successfully submitted a Creative Request!</h2>
	<h5>So awesome!</h5>
	<div class="complete-info">
		<div class="submit-summary">Changing your creative request or double-checking for errors is something
			you're probably going to want to do. Here's the Request PIN that you'll use
			to access the request you created. You'll also have a copy of this code in the
		    email that you will be receiving... now!</div>
		<div id="pin-container"></div>
	</div>	
</div><?php }} ?>