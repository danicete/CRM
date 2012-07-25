<?php /* Smarty version Smarty-3.1.8, created on 2012-07-06 18:41:58
         compiled from "../app/templates/_formPages/completePage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15067621704ff5dbc39f2814-71380817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e26e356d94ca2696886e1784f358925074e12f5' => 
    array (
      0 => '../app/templates/_formPages/completePage.tpl',
      1 => 1341600143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15067621704ff5dbc39f2814-71380817',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4ff5dbc39f3cd7_92313294',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff5dbc39f3cd7_92313294')) {function content_4ff5dbc39f3cd7_92313294($_smarty_tpl) {?><div id="form-complete-page" class="form-page" style="display: none;">
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