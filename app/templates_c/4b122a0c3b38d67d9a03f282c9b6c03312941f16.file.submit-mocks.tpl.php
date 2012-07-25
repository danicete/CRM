<?php /* Smarty version Smarty-3.1.8, created on 2012-07-06 21:17:50
         compiled from "/home/jlwatson/public_html/creative/app/templates/edit/submit-mocks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19730509254ff60897dd13a4-80313425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b122a0c3b38d67d9a03f282c9b6c03312941f16' => 
    array (
      0 => '/home/jlwatson/public_html/creative/app/templates/edit/submit-mocks.tpl',
      1 => 1341623863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19730509254ff60897dd13a4-80313425',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4ff60897eee742_65113795',
  'variables' => 
  array (
    'path' => 0,
    'requestID' => 0,
    'unitsInfo' => 0,
    'unit' => 0,
    'mocksInfo' => 0,
    'unitType' => 0,
    'mock' => 0,
    'requestPin' => 0,
    'highlightID' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff60897eee742_65113795')) {function content_4ff60897eee742_65113795($_smarty_tpl) {?><!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title></title>
  <meta name="description" content="">

  <meta name="viewport" content="width=device-width">

  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/css/style.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/css/jquery-ui-1.8.21.custom.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/css/jquery.fileupload-ui.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/css/colorbox.css">
  <script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/js/libs/modernizr-2.5.3.min.js"></script>
</head>
<body>
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  <header>

  </header>
  <div role="main">
    <div id="site">
      <div id="content">
        <?php echo $_smarty_tpl->getSubTemplate ("_components/authbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <h1 class="maintitle">Mocks of Request #<?php echo sprintf("%05d",$_smarty_tpl->tpl_vars['requestID']->value);?>
</h1>
        <div class="full-page-container">
          <div class="mocks-controls">
            <div id="fileUploadContainer" class="clearfix">
              <form id="fileupload" action="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/edit/submit-mocks.upload/?rid=<?php echo $_smarty_tpl->tpl_vars['requestID']->value;?>
" method="POST" enctype="multipart/form-data">

                <div class="row fileupload-buttonbar">
                    <div class="span7">
                        <span class="btn btn-success fileinput-button">
                            <i class="icon-plus icon-white"></i>
                            <span id="addFilesButton" class="disabled">Add files...</span>
                            <input id="addFilesInput" type="file" name="files[]" multiple>
                        </span>
                    </div>
                     
                </div>
                <input type="hidden" name="hidden-unit-value" class="hidden-unit-value" value="0" />
                <input type="hidden" name="hidden-add-index" id="hidden-add-index" value="0" />
            </form>
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
            </div> 
          </div>
          <div class="current-mocks-container clearfix">
            <?php if (count($_smarty_tpl->tpl_vars['mocksInfo']->value)>0){?>
              <?php  $_smarty_tpl->tpl_vars['unitType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['unitType']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mocksInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['unitType']->key => $_smarty_tpl->tpl_vars['unitType']->value){
$_smarty_tpl->tpl_vars['unitType']->_loop = true;
?>
                <div class="mock-type-container clearfix">
                  <h3><?php echo $_smarty_tpl->tpl_vars['unitType']->value['name'];?>
</h3>
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
"><img src="<?php echo $_smarty_tpl->tpl_vars['mock']->value['imgPath'];?>
" /></a>
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
          <?php echo $_smarty_tpl->getSubTemplate ("edit/removeMockDialog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>
      </div>
    </div>
  </div>
  <footer>

  </footer>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/js/libs/jquery-1.7.1.min.js"><\/script>')</script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/js/plugins.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/js/script.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/js/edit.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/js/libs/jqueryFileUpload/vendor/jquery.ui.widget.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/js/libs/jqueryFileUpload/jquery.iframe-transport.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/js/libs/jqueryFileUpload/jquery.fileupload.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/js/libs/jqueryFileUpload/jquery.fileupload-ui.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/js/libs/jqueryFileUpload/jquery.fileupload-fp.js"></script>
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

</body>
</html><?php }} ?>