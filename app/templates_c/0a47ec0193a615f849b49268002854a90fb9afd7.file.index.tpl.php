<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 17:03:19
         compiled from "/home/jlwatson/public_html/crm/app/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9234442455047be17b364a0-77759128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a47ec0193a615f849b49268002854a90fb9afd7' => 
    array (
      0 => '/home/jlwatson/public_html/crm/app/templates/index.tpl',
      1 => 1346869481,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9234442455047be17b364a0-77759128',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header' => 0,
    'path' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5047be17c6b556_70424679',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5047be17c6b556_70424679')) {function content_5047be17c6b556_70424679($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<h1 class="maintitle">Creative Request Manager</h1>
<div class="optionButton-container">
	<a class="optionButton new" href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/new/">
	  <div class="optionButtonContent">
	  	<div class="optionButton-wrapper">
		    <h4>New Request</h4>
		    <p>Want to submit a new creative request? Click here!</p>
		</div>
	  </div> 
	</a>
	<div class="optionButton-separator"></div>
	<a class="optionButton edit" href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/lookup/">
	  <div class="optionButtonContent">
	  	<div class="optionButton-wrapper">
		    <h4>View/Edit Existing Request</h4>
		    <p>If you want to view or make changes to a request that you made, click here.</p>
		</div>
	  </div>  
	</a>
</div>	

<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>