<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 18:34:58
         compiled from "/home/jlwatson/public_html/crm/app/templates/_formPages/completePage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21191085955047d3922afa17-11716941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d867ec8ade45eef483ed763489f7cb03f7c7997' => 
    array (
      0 => '/home/jlwatson/public_html/crm/app/templates/_formPages/completePage.tpl',
      1 => 1346869498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21191085955047d3922afa17-11716941',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5047d3922b13f0_90109220',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5047d3922b13f0_90109220')) {function content_5047d3922b13f0_90109220($_smarty_tpl) {?><div id="form-complete-page" class="form-page" style="display: none;">
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