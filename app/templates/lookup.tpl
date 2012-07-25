<!doctype html>
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

  <link rel="stylesheet" href="{$path.siteRoot}/css/style.css">
  <link rel="stylesheet" href="{$path.siteRoot}/css/jquery-ui-1.8.21.custom.css">

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except this Modernizr build.
       Modernizr enables HTML5 elements & feature detects for optimal performance.
       Create your own custom Modernizr build: www.modernizr.com/download/ -->
  <script src="{$path.siteRoot}/js/libs/modernizr-2.5.3.min.js"></script>
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
        {include file="_components/authbar.tpl"}
        <h1 class="maintitle">Find a Request</h1>
        <div class="page-lookup">
          <div class="lookup-options-container">
            <div class="lookup-pin">
              <form method="GET" action="{$path.siteRoot}/view/">
                <h3>Request Pin</h3>
                <span>If you have the PIN of the Request you're looking for, enter it here.</span>
                <input type="text" class="lookup-pin-input" maxlength="5" name="rpin" />
                <input type="submit" id="lookup-pin-submit" value="Go!" />
               </form> 
            </div>
            <span>OR</span>
            {$recentRequestsBlock}  
          </div>
          {if $showList}
          <div class="request-listing-container">
            <h2>All Requests</h2>
            <div class="req-list-wrapper">
              <div class="req-list-header">
                <span>Campaign Name</span>
                <span>Rep.</span>
                <span>Status</span>
                <span>Controls</span>
              </div>
              <div class="req-list-view">
                <div class="req-list">
                  {foreach from=$listingInfo item=request name=listingLoop}
                  {if $smarty.foreach.listingLoop.index%10 == 0}
                  <div class="req-list-page">
                  {/if}
                    <div class="req-list-item">
                      <div class="req-list-id">
                        <a href="{$path.siteRoot}/view/?rpin={$request.pin}" class="req-list-id-link">#&nbsp;{"%05d"|sprintf:$request.id}</a>
                      </div>
                      <div class="req-list-campaign">{$request.campaignName|truncate:24:"..."}</div>
                      <div class="req-list-salesRep">{$request.curseSalesRep|truncate:24:"..."}</div>
                      <div class="req-status-wrapper"><div class="req-list-status {$request.status}">{$request.pageStatus}</div></div>
                      <div class="req-list-options">
                        <a href="{$path.siteRoot}/edit/?rpin={$request.pin}">Edit</a>
                      </div>
                    </div>
                  {if $smarty.foreach.listingLoop.index%10 == 9 || $smarty.foreach.listingLoop.index == ($listingInfo|@count - 1)}
                  </div>
                  {/if}
                  {/foreach}
                </div> 
              </div>
              <div class="req-list-nav">
                <a class="req-list-button first">&laquo;&nbsp;First</a>
                <a class="req-list-button prev">&lsaquo;&nbsp;Prev</a>
                <a class="req-list-button next">Next&nbsp;&rsaquo;</a>
                <a class="req-list-button end">Last&nbsp;&raquo;</a>
              </div>
            </div>
          </div>
          {/if}
        </div>
        <div id="unfollowDialog" style="display:none;">
          {include file="edit/followers/unfollowDialog.tpl"}
        </div>
       </div> 
    </div> 
  </div>
  <footer>

  </footer>


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="{$path.siteRoot}/js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <!-- scripts concatenated and minified via build script -->
  <script src="{$path.siteRoot}/js/plugins.js"></script>
  <script src="{$path.siteRoot}/js/script.js"></script>
  <!-- end scripts -->

  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->

</body>
</html>