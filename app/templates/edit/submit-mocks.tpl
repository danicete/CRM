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
  <link rel="stylesheet" href="{$path.siteRoot}/css/jquery.fileupload-ui.css">
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
        <h1 class="maintitle">Mocks of Request #{"%05d"|sprintf:$requestID}</h1>
        <div class="full-page-container">
          <div class="mocks-controls">
            <div id="fileUploadContainer" class="clearfix">
              <form id="fileupload" action="{$path.siteRoot}/edit/submit-mocks.upload/?rid={$requestID}" method="POST" enctype="multipart/form-data">

                <div class="row fileupload-buttonbar">
                    <div class="span7">
                        <span class="btn btn-success fileinput-button">
                            <i class="icon-plus icon-white"></i>
                            <span id="addFilesButton" class="disabled">Add files...</span>
                            <input id="addFilesInput" type="file" name="files[]" multiple>
                        </span>
                    </div>
                     
                </div>
                <input type="hidden" name="hidden-unit-value" class="hidden-unit-value" value="0" />
                <input type="hidden" name="hidden-add-index" id="hidden-add-index" value="0" />
            </form>
            <select class="mock-type-select">
              <option value="0">Choose a Unit</option>
                {foreach from=$unitsInfo item=unit name=unitsLoop}
                  <option value="{$unit.id}">{$unit.name}</option>
                {/foreach}
            </select>
            </div> 
          </div>
          <div class="current-mocks-container clearfix">
            {if $mocksInfo|@count > 0}
              {foreach from=$mocksInfo item=unitType name=unitTypeLoop}
                <div class="mock-type-container clearfix">
                  <h3>{$unitType.name}</h3>
                  {foreach from=$unitType.mocks item=mock name=mockLoop}
                    <div class="mock mock-overlay" id="media-id-{$mock.media_id}">
                      <div class="delete-overlay" title="Remove this mock">
                        <input type="hidden" value="{$mock.link_id}" />
                      </div>
                      <a class="view-mock-thumbnail" href="{$mock.imgPath}" title="{$mock.title}"><img src="{$mock.imgPath}" /></a>
                    </div>
                  {/foreach}
                  {if $unitType.mocks|@count == 0}
                    <p class="no-mocks">No mocks have been added for this unit.</p>
                  {/if}
                </div>  
              {/foreach}
            {else}
              <p class="no-mocks">No Mocks have been added to this request yet.</p>
            {/if}
          </div>
          
          <div class="small-page-footer">
            <a href="{$path.siteRoot}/view/?rpin={$requestPin}">Back to Request</a>
          </div>    
        </div>
        <div id="removeMockDialog" style="display:none;">
          {include file=$removeMockDialog}
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
  <script src="{$path.siteRoot}/js/edit.js"></script>
  <script src="{$path.siteRoot}/js/libs/jqueryFileUpload/vendor/jquery.ui.widget.js"></script>
  <script src="{$path.siteRoot}/js/libs/jqueryFileUpload/jquery.iframe-transport.js"></script>
  <script src="{$path.siteRoot}/js/libs/jqueryFileUpload/jquery.fileupload.js"></script>
  <script src="{$path.siteRoot}/js/libs/jqueryFileUpload/jquery.fileupload-ui.js"></script>
  <script src="{$path.siteRoot}/js/libs/jqueryFileUpload/jquery.fileupload-fp.js"></script>
  <script>
  {if $highlightID > 0}
    {literal}
      $(document).ready(function() {

        $("#media-id-{/literal}{$highlightID}{literal}").css('background-color', '#C06514');
        setTimeout(function() {
          $("#media-id-{/literal}{$highlightID}{literal}").animate({
            backgroundColor: "#f0f0f0"
          }, 1500, function() {
            $(this).css('background-color',"");
          });
        }, 1000);
      });
    {/literal}
  {/if}
  </script>

</body>
</html>