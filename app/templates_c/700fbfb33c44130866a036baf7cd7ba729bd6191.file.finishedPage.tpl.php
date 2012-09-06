<?php /* Smarty version Smarty-3.1.8, created on 2012-08-28 01:17:20
         compiled from "C:\xampp\htdocs\creative\app\templates\_formPages\finishedPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27415503c0000a11904-95167200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '700fbfb33c44130866a036baf7cd7ba729bd6191' => 
    array (
      0 => 'C:\\xampp\\htdocs\\creative\\app\\templates\\_formPages\\finishedPage.tpl',
      1 => 1341852428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27415503c0000a11904-95167200',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_503c0000a16e61_39146640',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503c0000a16e61_39146640')) {function content_503c0000a16e61_39146640($_smarty_tpl) {?><div id="form-finished-page" class="form-page" style="display: none;">
  <div class="finished-message-container">
    <h3>Your Request is being submitted...</h3>
    <div class="finished-load-wrap">
      <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/img/assets/ajax-loader.gif" />
    </div>  
  </div> 
</div><?php }} ?>