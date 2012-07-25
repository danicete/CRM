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
  <link rel="stylesheet" href="{$path.siteRoot}/css/jquery.cleditor.css">
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
        <h1 class="maintitle">New Creative Request</h1>
        <div class="formContainer">
          <div class="form-content-container">
            {$formPage1}
            {$formPage2}
            {$formPage3}
            {$formPage4}
            {$formFinishedPage}
            {$formCompletePage}
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
        <div id="form-submit-URL" data-formsubmiturl="{$formSubmitURL}"></div>
        <div id="curseSalesRep" data-authuserid="{$authUserID}"></div>
       </div> 
    </div> 
  </div>
  <footer>

  </footer>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="{$path.siteRoot}/js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <!-- scripts concatenated and minified via build script -->
  <script src="{$path.siteRoot}/js/plugins.js"></script>
  <script src="{$path.siteRoot}/js/script.js"></script>
  <script src="{$path.siteRoot}/js/form.js"></script>
  <!-- end scripts -->

  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->

</body>
</html>