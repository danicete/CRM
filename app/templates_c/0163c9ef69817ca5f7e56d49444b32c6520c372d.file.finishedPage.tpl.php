<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 18:34:58
         compiled from "/home/jlwatson/public_html/crm/app/templates/_formPages/finishedPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18619007785047d3922a7bb7-37784621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0163c9ef69817ca5f7e56d49444b32c6520c372d' => 
    array (
      0 => '/home/jlwatson/public_html/crm/app/templates/_formPages/finishedPage.tpl',
      1 => 1346869498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18619007785047d3922a7bb7-37784621',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5047d3922ad971_54091408',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5047d3922ad971_54091408')) {function content_5047d3922ad971_54091408($_smarty_tpl) {?><div id="form-finished-page" class="form-page" style="display: none;">
  <div class="finished-message-container">
    <h3>Your Request is being submitted...</h3>
    <div class="finished-load-wrap">
      <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/img/assets/ajax-loader.gif" />
    </div>  
  </div> 
</div><?php }} ?>