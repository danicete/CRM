<?php /* Smarty version Smarty-3.1.8, created on 2012-07-06 18:41:58
         compiled from "../app/templates/_formPages/page1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2731622764ff5dbc3971519-68786083%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acb04c6261be1ce7a42c7c2bbd8793baabd1d0b1' => 
    array (
      0 => '../app/templates/_formPages/page1.tpl',
      1 => 1341600144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2731622764ff5dbc3971519-68786083',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4ff5dbc3979db6_42548449',
  'variables' => 
  array (
    'authName' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff5dbc3979db6_42548449')) {function content_4ff5dbc3979db6_42548449($_smarty_tpl) {?><div id="form-page-1" class="form-page">
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