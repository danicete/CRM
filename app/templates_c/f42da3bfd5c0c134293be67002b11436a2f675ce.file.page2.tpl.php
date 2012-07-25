<?php /* Smarty version Smarty-3.1.8, created on 2012-07-06 18:41:58
         compiled from "../app/templates/_formPages/page2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:826885604ff5dbc397bd94-09061262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f42da3bfd5c0c134293be67002b11436a2f675ce' => 
    array (
      0 => '../app/templates/_formPages/page2.tpl',
      1 => 1341600145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '826885604ff5dbc397bd94-09061262',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4ff5dbc397d874_76350304',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff5dbc397d874_76350304')) {function content_4ff5dbc397d874_76350304($_smarty_tpl) {?><div id="form-page-2" class="form-page" style="display: none;">
    <h3 class="form-page-title">Basic Info</h3>
    <div class="form-content">
    <h4>Timeline</h4>
    <label for="timeline1">Curse Provides 1st Mockups</label>
    <input type="text" id="timeline1" class="formDatePicker" />
    <label for="timeline2">Client Provides Feedback</label>
    <input type="text" id="timeline2" class="formDatePicker" />
    <label for="timeline3">Curse Provides Final Mockups</label>
    <input type="text" id="timeline3" class="formDatePicker" />
    <label for="timeline4">Client Provides Final Feedback</label>
    <input type="text" id="timeline4" class="formDatePicker" />
    <label for="timeline5">Initial Campaign Launch</label>
    <input type="text" id="timeline5" class="formDatePicker" />
    <br />
    <h4>Creative Units:</h4>
    <p>Summary of Unit Request (campaign goals, general creative direction, irregularities, etc.)</p>
    <textarea id="creativeUnits" class="form-ta"></textarea>
    <br />
    <br />
    <p>FTP Information or YouSendIt Link:<span class="form-ast">*</span></p>
    <textarea id="ftpinfo" class="form-ta"></textarea>
    <p><span class="form-ast">*</span> Please note that all assets should be delivered via FTP or YouSendIt.
      If there is any other method of asset delivery, please write instructions on how to retieve the 
      assets in this section.</p>
    </div>
</div>  <!-- page2 --><?php }} ?>