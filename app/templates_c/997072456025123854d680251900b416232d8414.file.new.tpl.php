<?php /* Smarty version Smarty-3.1.8, created on 2012-07-03 01:45:44
         compiled from "C:\xampp\htdocs\creative\app\templates\new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:289594fa856854c98d5-06259470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '997072456025123854d680251900b416232d8414' => 
    array (
      0 => 'C:\\xampp\\htdocs\\creative\\app\\templates\\new.tpl',
      1 => 1341270772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '289594fa856854c98d5-06259470',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fa8568550a030_03643509',
  'variables' => 
  array (
    'path' => 0,
    'formPage1' => 0,
    'formPage2' => 0,
    'formPage3' => 0,
    'formPage4' => 0,
    'formFinishedPage' => 0,
    'formCompletePage' => 0,
    'formSubmitURL' => 0,
    'authUserID' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa8568550a030_03643509')) {function content_4fa8568550a030_03643509($_smarty_tpl) {?><!doctype html>
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
/css/jquery.cleditor.css">
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

        <h1 class="maintitle">New Creative Request</h1>
        <div class="formContainer">
          <div class="form-content-container">
            <?php echo $_smarty_tpl->tpl_vars['formPage1']->value;?>

            <?php echo $_smarty_tpl->tpl_vars['formPage2']->value;?>

            <?php echo $_smarty_tpl->tpl_vars['formPage3']->value;?>

            <?php echo $_smarty_tpl->tpl_vars['formPage4']->value;?>

            <?php echo $_smarty_tpl->tpl_vars['formFinishedPage']->value;?>

            <?php echo $_smarty_tpl->tpl_vars['formCompletePage']->value;?>

          </div>  <!-- .form-content-container -->
          <div class="form-bottom-container">
            <ul class="form-bottom-list">
              <li><a class="formBack form-button">Back</a></li>
              <li id="list-page-1" class="form-page-count active-form-page">1</li>
              <li id="list-page-2" class="form-page-count">2</li>
              <li id="list-page-3" class="form-page-count">3</li>
              <li id="list-page-4" class="form-page-count">4</li>
              <li><a class="formNext form-button">Next</a></li>
            </ul> 
          </div>  <!-- .form-bottom-container -->
        </div>  <!-- .formContainer -->
        <div id="form-submit-URL" data-formsubmiturl="<?php echo $_smarty_tpl->tpl_vars['formSubmitURL']->value;?>
"></div>
        <div id="curseSalesRep" data-authuserid="<?php echo $_smarty_tpl->tpl_vars['authUserID']->value;?>
"></div>
       </div> 
    </div> 
  </div>
  <footer>

  </footer>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <!-- scripts concatenated and minified via build script -->
  <script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/js/plugins.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/js/script.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/js/form.js"></script>
  <!-- end scripts -->

  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->

</body>
</html><?php }} ?>