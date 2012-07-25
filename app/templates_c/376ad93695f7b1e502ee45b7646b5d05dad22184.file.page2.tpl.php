<?php /* Smarty version Smarty-3.1.8, created on 2012-05-18 19:12:49
         compiled from "../app/templates\_formPages\page2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119984fb68311636974-66982695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '376ad93695f7b1e502ee45b7646b5d05dad22184' => 
    array (
      0 => '../app/templates\\_formPages\\page2.tpl',
      1 => 1337360706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119984fb68311636974-66982695',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fb68311638511_76408279',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fb68311638511_76408279')) {function content_4fb68311638511_76408279($_smarty_tpl) {?><div id="form-page-2" class="form-page" style="display: none;">
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