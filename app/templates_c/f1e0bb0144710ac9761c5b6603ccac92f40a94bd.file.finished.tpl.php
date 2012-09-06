<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 18:39:47
         compiled from "/home/jlwatson/public_html/crm/app/templates/finished.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5079912315047d4b32e0763-79764976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1e0bb0144710ac9761c5b6603ccac92f40a94bd' => 
    array (
      0 => '/home/jlwatson/public_html/crm/app/templates/finished.tpl',
      1 => 1346869480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5079912315047d4b32e0763-79764976',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header' => 0,
    'requestPin' => 0,
    'path' => 0,
    'viewURL' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5047d4b3325101_13050646',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5047d4b3325101_13050646')) {function content_5047d4b3325101_13050646($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<h1 class="maintitle">Request Complete</h1>
<div id="form-complete-page" class="form-page">
  <h2>You've successfully submitted a Creative Request!</h2>
  <h5>So awesome!</h5>
  <div class="complete-info">
    <div class="submit-summary">Changing your creative request or double-checking for errors is something
      you're probably going to want to do. Here's the Request PIN that you'll use
      to access the request you created. You'll also have a copy of this code in the
        email that you will be receiving... now!</div>
    <div id="pin-container"><?php echo $_smarty_tpl->tpl_vars['requestPin']->value;?>
</div>
    <a class="form-complete-view" href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
<?php echo $_smarty_tpl->tpl_vars['viewURL']->value;?>
">Click here to view your request</a>
  </div>  
</div>
</div> 
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>