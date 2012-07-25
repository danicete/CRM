<?php /* Smarty version Smarty-3.1.8, created on 2012-07-06 18:41:58
         compiled from "../app/templates/_formPages/finishedPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20521086844ff5dbc39ea9b8-05841774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '109cec52b48c5907126e59085b890ed3599232f4' => 
    array (
      0 => '../app/templates/_formPages/finishedPage.tpl',
      1 => 1341600144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20521086844ff5dbc39ea9b8-05841774',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4ff5dbc39f0700_13739992',
  'variables' => 
  array (
    'path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff5dbc39f0700_13739992')) {function content_4ff5dbc39f0700_13739992($_smarty_tpl) {?><div id="form-finished-page" class="form-page" style="display: none;">
  <div class="finished-message-container">
    <h3>Your Request is being submitted...</h3>
    <div class="finished-load-wrap">
      <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/img/assets/ajax-loader.gif" />
    </div>  
  </div> 
</div><?php }} ?>