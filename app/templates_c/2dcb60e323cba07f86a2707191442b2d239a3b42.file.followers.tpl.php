<?php /* Smarty version Smarty-3.1.8, created on 2012-07-07 16:11:54
         compiled from "/home/jlwatson/public_html/creative/app/templates/edit/followers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12020071574ff8980a70c236-43745561%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2dcb60e323cba07f86a2707191442b2d239a3b42' => 
    array (
      0 => '/home/jlwatson/public_html/creative/app/templates/edit/followers.tpl',
      1 => 1341600151,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12020071574ff8980a70c236-43745561',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'path' => 0,
    'reqRow' => 0,
    'usersInfo' => 0,
    'user' => 0,
    'rpin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4ff8980a7a3370_67670336',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff8980a7a3370_67670336')) {function content_4ff8980a7a3370_67670336($_smarty_tpl) {?><!doctype html>
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

        <h1 class="maintitle">Followers of Request #<?php echo sprintf("%05d",$_smarty_tpl->tpl_vars['reqRow']->value['id']);?>
</h1>
	        <div class="full-page-container clearfix">
            <div class="view-followers-table-header">
              <div class="view-followers-isadmin-header">Admin?</div>
              <div class="view-followers-name-header">Name</div>
              <div class="view-followers-email-header">Email</div>
              <div class="view-followers-controls-header">Controls</div>
            </div> 
            <div class="viewFollowersContent">
              <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usersInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
              <div class="follower-container">
                <div class="follower-isadmin"><?php if ($_smarty_tpl->tpl_vars['user']->value['isAdmin']){?><span style="color: #C06514">Admin</span><?php }?></div>
                <div class="follower-name"><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</div>
                <div class="follower-email"><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</div>
                <div class="follower-controls">
                  <?php if (!$_smarty_tpl->tpl_vars['user']->value['isAdmin']){?>
                    <span class="follower-remove-control">Remove</span>
                  <?php }?>
                  <input type="hidden" class="follower-hidden-id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" />
                </div>
              </div>  
              <?php } ?>  
            </div>
            <div class="follower-actions">
              <div class="follower-action" id="followerAdd">Add Follower</div>
            </div>
	        </div>
          <div id="addFollowerDialog"></div>
          <div id="removeFollowerDialog" style="display:none;">
            <?php echo $_smarty_tpl->getSubTemplate ("edit/followers/removeFollower.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

          </div>
          <input type="hidden" id="followersURL" value="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/edit/followers" />
          <input type="hidden" id="requestPIN" value="<?php echo $_smarty_tpl->tpl_vars['rpin']->value;?>
" />
          <div class="small-page-footer">
            <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/view/?rpin=<?php echo $_smarty_tpl->tpl_vars['rpin']->value;?>
">Back to Request</a>
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