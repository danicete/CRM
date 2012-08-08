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
  <link rel="stylesheet" href="{$path.siteRoot}/css/colorbox.css">
  <script src="{$path.siteRoot}/js/libs/modernizr-2.5.3.min.js"></script>
</head>
<body>
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  <header>

  </header>
  <div role="main">
    <div id="site">
      <div id="content">
        {include file=$authBar}
        <h1 class="maintitle">Viewing Request #{"%05d"|sprintf:$requestRow.id}</h1>
	        <div class="full-page-container clearfix">
	        	{if $requestFound == 1}
		        	{include file="_components/requestView.tpl"}
		        {else}
		        	<h3>Oops!</h3>
		        	<div>We couldn't find a request with the PIN you entered. Are you sure you entered
		        		 it right? Remember, it's case-sensitive. You can also try looking at your <a href="{$path.siteRoot}/lookup/">Recent
		        		 Requests</a> to find what you're looking for.</div>
		        {/if}	
	        </div>
          <div id="followersDialog" style="display: none"></div>
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