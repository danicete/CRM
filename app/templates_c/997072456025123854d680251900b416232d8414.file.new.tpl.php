<?php /* Smarty version Smarty-3.1.8, created on 2012-08-28 01:17:20
         compiled from "C:\xampp\htdocs\creative\app\templates\new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22765503c0000a34f42-71970899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '997072456025123854d680251900b416232d8414' => 
    array (
      0 => 'C:\\xampp\\htdocs\\creative\\app\\templates\\new.tpl',
      1 => 1345757689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22765503c0000a34f42-71970899',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header' => 0,
    'formPage1' => 0,
    'formPage2' => 0,
    'formPage3' => 0,
    'formFinishedPage' => 0,
    'formCompletePage' => 0,
    'formSubmitURL' => 0,
    'authUserID' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_503c0000a589f0_63058887',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503c0000a589f0_63058887')) {function content_503c0000a589f0_63058887($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<h2 class="maintitle newtitle">New Creative Request</h2>
<div class="formContainer">
  <div class="form-content-container">
    <?php echo $_smarty_tpl->tpl_vars['formPage1']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['formPage2']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['formPage3']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['formFinishedPage']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['formCompletePage']->value;?>

  </div>  <!-- .form-content-container -->
  <div class="form-bottom-container">
    <ul class="form-bottom-list">
      <li><a class="formBack form-button hidden-button">Back<div class="form-button-icon back"></div></a></li>
      <li id="list-page-1" class="form-page-count active-form-page">1</li>
      <li id="list-page-2" class="form-page-count">2</li>
      <li id="list-page-3" class="form-page-count">3</li>
      <li><a class="formNext form-button">Next<div class="form-button-icon next"></div></a></li>
    </ul> 
  </div>  <!-- .form-bottom-container -->
</div>  <!-- .formContainer -->
<div id="form-submit-URL" data-formsubmiturl="<?php echo $_smarty_tpl->tpl_vars['formSubmitURL']->value;?>
"></div>
<div id="curseSalesRep" data-authuserid="<?php echo $_smarty_tpl->tpl_vars['authUserID']->value;?>
"></div>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>