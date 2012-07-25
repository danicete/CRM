<?php /* Smarty version Smarty-3.1.8, created on 2012-07-02 23:12:20
         compiled from "C:\xampp\htdocs\creative\app\templates\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197244fba77a03035e6-65924204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89630257c7cb1a8c5dddcd7cbfc632fa3bc686cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\creative\\app\\templates\\view.tpl',
      1 => 1341263538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197244fba77a03035e6-65924204',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fba77a0369df5_54718968',
  'variables' => 
  array (
    'path' => 0,
    'requestRow' => 0,
    'requestFound' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fba77a0369df5_54718968')) {function content_4fba77a0369df5_54718968($_smarty_tpl) {?><!doctype html>
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

        <h1 class="maintitle">Viewing Request #<?php echo sprintf("%05d",$_smarty_tpl->tpl_vars['requestRow']->value['id']);?>
</h1>
	        <div class="view-page-container clearfix">
	        	<?php if ($_smarty_tpl->tpl_vars['requestFound']->value==1){?>
		        	<?php echo $_smarty_tpl->getSubTemplate ("_components/requestView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		        <?php }else{ ?>
		        	<h3>Oops!</h3>
		        	<div>We couldn't find a request with the PIN you entered. Are you sure you entered
		        		 it right? Remember, it's case-sensitive. You can also try looking at your <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/lookup/">Recent
		        		 Requests</a> to find what you're looking for.</div>
		        <?php }?>	
	        </div>
          <div id="followersDialog" style="display: none"></div>
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