<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 01:10:03
         compiled from "C:\xampp\htdocs\crm\app\templates\_components\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2449350468a4b5ebe08-51325626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b9615bffd3e28e74f2340fffabea0afdea97b81' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\app\\templates\\_components\\header.tpl',
      1 => 1345571037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2449350468a4b5ebe08-51325626',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'path' => 0,
    'authBar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50468a4b60e237_93730413',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50468a4b60e237_93730413')) {function content_50468a4b60e237_93730413($_smarty_tpl) {?><!doctype html>
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
/css/fonts/fonts.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/css/style.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/css/jquery-ui-1.8.21.custom.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/css/jquery.fileupload-ui.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/css/colorbox.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/css/jquery.cleditor.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/css/tinyscrollbar.css">

  <script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/js/libs/modernizr-2.5.3.min.js"></script>
</head>
<body>
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  <header>

  </header>
  <div role="main">
    <div id="site">
      <div id="content">
        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['authBar']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>