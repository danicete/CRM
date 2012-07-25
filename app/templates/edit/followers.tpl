<!doctype html>
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

  <link rel="stylesheet" href="{$path.siteRoot}/css/style.css">
  <link rel="stylesheet" href="{$path.siteRoot}/css/jquery-ui-1.8.21.custom.css">
  <script src="{$path.siteRoot}/js/libs/modernizr-2.5.3.min.js"></script>
</head>
<body>
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  <header>

  </header>
  <div role="main">
    <div id="site">
      <div id="content">
        {include file="_components/authbar.tpl"}
        <h1 class="maintitle">Followers of Request #{"%05d"|sprintf:$reqRow.id}</h1>
	        <div class="full-page-container clearfix">
            <div class="view-followers-table-header">
              <div class="view-followers-isadmin-header">Admin?</div>
              <div class="view-followers-name-header">Name</div>
              <div class="view-followers-email-header">Email</div>
              <div class="view-followers-controls-header">Controls</div>
            </div> 
            <div class="viewFollowersContent">
              {foreach from=$usersInfo item=user name=usersInfoLoop}
              <div class="follower-container">
                <div class="follower-isadmin">{if $user.isAdmin}<span style="color: #C06514">Admin</span>{/if}</div>
                <div class="follower-name">{$user.name}</div>
                <div class="follower-email">{$user.email}</div>
                <div class="follower-controls">
                  {if !$user.isAdmin}
                    <span class="follower-remove-control">Remove</span>
                  {/if}
                  <input type="hidden" class="follower-hidden-id" value="{$user.id}" />
                </div>
              </div>  
              {/foreach}  
            </div>
            <div class="follower-actions">
              <div class="follower-action" id="followerAdd">Add Follower</div>
            </div>
	        </div>
          <div id="addFollowerDialog"></div>
          <div id="removeFollowerDialog" style="display:none;">
            {include file="edit/followers/removeFollower.tpl"}
          </div>
          <input type="hidden" id="followersURL" value="{$path.siteRoot}/edit/followers" />
          <input type="hidden" id="requestPIN" value="{$rpin}" />
          <div class="small-page-footer">
            <a href="{$path.siteRoot}/view/?rpin={$rpin}">Back to Request</a>
          </div>
       </div>
    </div>
  </div>
  <footer>

  </footer>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="{$path.siteRoot}/js/libs/jquery-1.7.1.min.js"><\/script>')</script>
  <script src="{$path.siteRoot}/js/plugins.js"></script>
  <script src="{$path.siteRoot}/js/script.js"></script>

</body>
</html>