<?php /* Smarty version Smarty-3.1.8, created on 2012-06-01 02:13:06
         compiled from "C:\xampp\htdocs\creative\app\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51524fb3c7b289cdd9-12803817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e475e559b8d4c40f5cdf5a3405e8cc5a2f8e9e1f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\creative\\app\\templates\\login.tpl',
      1 => 1338509583,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51524fb3c7b289cdd9-12803817',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fb3c7b29da625_88673152',
  'variables' => 
  array (
    'path' => 0,
    'loginForwardString' => 0,
    'loginDestString' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fb3c7b29da625_88673152')) {function content_4fb3c7b29da625_88673152($_smarty_tpl) {?><!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/i/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title></title>
  <meta name="description" content="">

  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name="viewport" content="width=device-width">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/css/style.css">

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except this Modernizr build.
       Modernizr enables HTML5 elements & feature detects for optimal performance.
       Create your own custom Modernizr build: www.modernizr.com/download/ -->
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
        <?php echo $_smarty_tpl->getSubTemplate ("_components/authbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <h1 class="maintitle">Login</h1>
        <form class="login-form clearfix" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/login/?s=form&f=<?php echo $_smarty_tpl->tpl_vars['loginForwardString']->value;?>
">
          <div class="login-form-title">Curse Email</div>
          <input type="text" class="login-form-value" name="loginUser" />
          <div class="login-form-title">Password</div>
          <input type="password" class="login-form-value" name="loginPw"/>
          <div class="clearfix"></div>
          <input type="submit" value="Submit" class="login-submit" />
          <input type="hidden" id="loginForwardLink" value="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
<?php echo $_smarty_tpl->tpl_vars['loginForwardString']->value;?>
" />
          <input type="hidden" id="loginDestLink" value="<?php echo $_smarty_tpl->tpl_vars['loginDestString']->value;?>
" />
        </form>
       </div>
    </div> 
  </div>
  <footer>

  </footer>


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <!-- scripts concatenated and minified via build script -->
  <script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/js/plugins.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/js/script.js"></script>
  <!-- end scripts -->

  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->

</body>
</html><?php }} ?>