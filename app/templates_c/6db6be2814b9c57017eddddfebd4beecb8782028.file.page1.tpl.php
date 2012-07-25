<?php /* Smarty version Smarty-3.1.8, created on 2012-05-31 02:58:57
         compiled from "../app/templates\_formPages\page1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:281854fb683114fc3d5-39804585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6db6be2814b9c57017eddddfebd4beecb8782028' => 
    array (
      0 => '../app/templates\\_formPages\\page1.tpl',
      1 => 1338425935,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '281854fb683114fc3d5-39804585',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fb68311621d31_56594217',
  'variables' => 
  array (
    'authName' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fb68311621d31_56594217')) {function content_4fb68311621d31_56594217($_smarty_tpl) {?><div id="form-page-1" class="form-page">
  <h3 class="form-page-title">Campaign Info</h3>
  <div class="form-content">
    <label for="campaignName">Campaign Name</label>
    <input type="text" id="campaignName" />
    <label for="advertiser">Advertiser</label>
    <input type="text" id="advertiser" />
    <label for="agency">Agency</label>
    <input type="text" id="agency" />
    <label for="curseSalesRep">Curse Sales Rep</label>
    <div id="form-auth-name-container"><?php echo $_smarty_tpl->tpl_vars['authName']->value;?>
</div>
    <label for="launchDate">Launch Date</label>
    <input type="text" id="launchDate" class="formDatePicker" />
  </div> 
</div><?php }} ?>