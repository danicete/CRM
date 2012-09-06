<?php /* Smarty version Smarty-3.1.8, created on 2012-09-04 18:58:17
         compiled from "C:\xampp\htdocs\creative\app\templates\saved.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30364504633293e1b73-13543901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '354c66c0dc945b5fee2c0956f6508b2e22317b1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\creative\\app\\templates\\saved.tpl',
      1 => 1344451860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30364504633293e1b73-13543901',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'path' => 0,
    'authBar' => 0,
    'PIN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50463329496b48_62246038',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50463329496b48_62246038')) {function content_50463329496b48_62246038($_smarty_tpl) {?><!doctype html>
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
        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['authBar']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <h1 class="maintitle">Congratulations</h1>
	        <div class="saved-page-container clearfix">
	        	Your requested changes have been saved.
            <a class="saved-view-request" href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/view/?rpin=<?php echo $_smarty_tpl->tpl_vars['PIN']->value;?>
">View updated request</a>
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

</body>
</html><?php }} ?>