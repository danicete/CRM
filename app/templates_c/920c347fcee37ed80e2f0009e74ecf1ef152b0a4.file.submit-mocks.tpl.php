<?php /* Smarty version Smarty-3.1.8, created on 2012-09-06 18:34:19
         compiled from "C:\xampp\htdocs\crm\app\templates\edit\submit-mocks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170215048d08baf4212-81392708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '920c347fcee37ed80e2f0009e74ecf1ef152b0a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\app\\templates\\edit\\submit-mocks.tpl',
      1 => 1346894370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170215048d08baf4212-81392708',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header' => 0,
    'requestID' => 0,
    'unitsInfo' => 0,
    'unit' => 0,
    'mocksInfo' => 0,
    'unitType' => 0,
    'path' => 0,
    'mock' => 0,
    'requestPin' => 0,
    'removeMockDialog' => 0,
    'highlightID' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5048d08bba28e3_04051840',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5048d08bba28e3_04051840')) {function content_5048d08bba28e3_04051840($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<h1 class="maintitle viewtitle">Manage Mocks #<?php echo sprintf("%05d",$_smarty_tpl->tpl_vars['requestID']->value);?>
</h1>
<div class="full-page-container">
  <div class="mocks-controls">
<!--     <div id="fileUploadContainer" class="clearfix">
      
    <select class="mock-type-select">
      <option value="0">Choose a Unit</option>
        <?php  $_smarty_tpl->tpl_vars['unit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['unit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['unitsInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['unit']->key => $_smarty_tpl->tpl_vars['unit']->value){
$_smarty_tpl->tpl_vars['unit']->_loop = true;
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['unit']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['unit']->value['name'];?>
</option>
        <?php } ?>
    </select>
    </div>  -->
  </div>
  <div class="current-mocks-container clearfix">
    <?php if (count($_smarty_tpl->tpl_vars['mocksInfo']->value)>0){?>
      <?php  $_smarty_tpl->tpl_vars['unitType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['unitType']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mocksInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['unitTypeLoop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['unitType']->key => $_smarty_tpl->tpl_vars['unitType']->value){
$_smarty_tpl->tpl_vars['unitType']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['unitTypeLoop']['index']++;
?>
        <div class="mock-type-container clearfix">
          <h3><?php echo $_smarty_tpl->tpl_vars['unitType']->value['name'];?>
</h3>
          <div class="mock-upload-form">
            <form class="fileupload-hook" action="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/edit/submit-mocks.upload/?rid=<?php echo $_smarty_tpl->tpl_vars['requestID']->value;?>
" method="POST" enctype="multipart/form-data">

              <div class="row fileupload-buttonbar">
                  <div class="span7">
                      <input class="display-upload-input" />
                      <span class="btn btn-success fileinput-button">
                          <span id="addFilesButton" class="">Add File</span>
                          <input id="addFilesInput" type="file" name="files[]" multiple>
                      </span>
                  </div>
                  <div class="file-start-upload-button">Submit</div>
                  <div class="file-upload-icon" style="display: none;"></div>
              </div>
              <input type="hidden" name="hidden-unit-value" class="hidden-unit-value" value="<?php echo $_smarty_tpl->tpl_vars['unitType']->value['id'];?>
" />
              <input type="hidden" name="hidden-add-index" value="<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['unitTypeLoop']['index'];?>
" />
          </form>
          </div>  
          <?php  $_smarty_tpl->tpl_vars['mock'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mock']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['unitType']->value['mocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mock']->key => $_smarty_tpl->tpl_vars['mock']->value){
$_smarty_tpl->tpl_vars['mock']->_loop = true;
?>
            <div class="mock mock-overlay" id="media-id-<?php echo $_smarty_tpl->tpl_vars['mock']->value['media_id'];?>
">
              <div class="delete-overlay" title="Remove this mock">
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['mock']->value['link_id'];?>
" />
              </div>
              <a class="view-mock-thumbnail" href="<?php echo $_smarty_tpl->tpl_vars['mock']->value['imgPath'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['mock']->value['title'];?>
">
                <span class="u-clip">
                  <span class="u-clip-wrapper">
                    <span class="u-clip-inner">
                      <img src="<?php echo $_smarty_tpl->tpl_vars['mock']->value['thumbPath'];?>
" />
                      <span class="u-clip-buddy"></span>
                    </span>
                  </span>
                </span>                
              </a>
              <div class="mock-name"><?php echo $_smarty_tpl->tpl_vars['mock']->value['title'];?>
</div>
            </div>
          <?php } ?>
          <?php if (count($_smarty_tpl->tpl_vars['unitType']->value['mocks'])==0){?>
            <p class="no-mocks">No mocks have been added for this unit.</p>
          <?php }?>
        </div>  
      <?php } ?>
    <?php }else{ ?>
      <p class="no-mocks">No Mocks have been added to this request yet.</p>
    <?php }?>
  </div>
  
  <div class="small-page-footer">
    <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/view/?rpin=<?php echo $_smarty_tpl->tpl_vars['requestPin']->value;?>
">Back to Request</a>
  </div>    
</div>
<div id="removeMockDialog" style="display:none;">
  <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['removeMockDialog']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<script>
<?php if ($_smarty_tpl->tpl_vars['highlightID']->value>0){?>
  
    $(document).ready(function() {

      $("#media-id-<?php echo $_smarty_tpl->tpl_vars['highlightID']->value;?>
").css('background-color', '#C06514');
      setTimeout(function() {
        $("#media-id-<?php echo $_smarty_tpl->tpl_vars['highlightID']->value;?>
").animate({
          backgroundColor: "#f0f0f0"
        }, 1500, function() {
          $(this).css('background-color',"");
        });
      }, 1000);
    });
  
<?php }?>
</script>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>