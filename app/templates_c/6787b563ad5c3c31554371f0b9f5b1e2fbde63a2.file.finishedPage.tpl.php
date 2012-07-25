<?php /* Smarty version Smarty-3.1.8, created on 2012-05-18 19:12:49
         compiled from "../app/templates\_formPages\finishedPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:234364fb683116ba7c4-49000802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6787b563ad5c3c31554371f0b9f5b1e2fbde63a2' => 
    array (
      0 => '../app/templates\\_formPages\\finishedPage.tpl',
      1 => 1337360819,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '234364fb683116ba7c4-49000802',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fb683116bf9a0_00768448',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fb683116bf9a0_00768448')) {function content_4fb683116bf9a0_00768448($_smarty_tpl) {?><div id="form-finished-page" class="form-page" style="display: none;">
  <div class="finished-message-container">
    <h3>Your Request is being submitted...</h3>
    <div class="finished-load-wrap">
      <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/img/assets/ajax-loader.gif" />
    </div>  
  </div> 
</div><?php }} ?>