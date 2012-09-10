{include file=$header}
<h1 class="maintitle viewtitle">Manage Mocks #{"%05d"|sprintf:$requestID}</h1>
<div class="full-page-container">
  <div class="mocks-controls">
<!--     <div id="fileUploadContainer" class="clearfix">
      
    <select class="mock-type-select">
      <option value="0">Choose a Unit</option>
        {foreach from=$unitsInfo item=unit name=unitsLoop}
          <option value="{$unit.id}">{$unit.name}</option>
        {/foreach}
    </select>
    </div>  -->
  </div>
  <div class="current-mocks-container clearfix">
    {if $mocksInfo|@count > 0}
      {foreach from=$mocksInfo item=unitType name=unitTypeLoop}
        <div class="mock-type-container clearfix">
          <h3>{$unitType.name}</h3>
          <div class="mock-upload-form">
            <form class="fileupload-hook" action="{$path.siteRoot}/edit/submit-mocks.upload/?rid={$requestID}" method="POST" enctype="multipart/form-data">

              <div class="row fileupload-buttonbar">
                  <div class="span7">
                      <input class="display-upload-input" />
                      <span class="btn btn-success fileinput-button">
                          <span id="addFilesButton" class="">Add File</span>
                          <input id="addFilesInput" type="file" name="files[]" multiple>
                      </span>
                  </div>
                  <div class="file-start-upload-button">Submit</div>
                  <div class="file-upload-icon" style="display: none;"></div>
              </div>
              <input type="hidden" name="hidden-unit-value" class="hidden-unit-value" value="{$unitType.id}" />
              <input type="hidden" name="hidden-add-index" value="{$smarty.foreach.unitTypeLoop.index}" />
          </form>
          </div>  
          {foreach from=$unitType.mocks item=mock name=mockLoop}
            <div class="mock mock-overlay" id="media-id-{$mock.media_id}">
              <div class="delete-overlay" title="Remove this mock"></div>
              <a class="view-mock-thumbnail" href="{$mock.imgPath}">
                <span class="u-clip">
                  <span class="u-clip-wrapper">
                    <span class="u-clip-inner">
                      <img src="{$mock.thumbPath}" />
                      <span class="u-clip-buddy"></span>
                    </span>
                  </span>
                </span>                
              </a>
              <div class="mock-name">{$mock.title}</div>
              <div class="mock-actions">
                <div class="actions-container">
                  <div class="mock-action mock-action-approve" data-title="Mock appoved"></div>
                  <div class="mock-action mock-action-revision" data-title="Needs Revision"></div>
                  <div class="mock-action mock-action-notes" data-title="View notes"></div>
                </div>
                <div class="mock-action-hint"></div>
              </div>
              <input type="hidden" value="{$mock.link_id}" />
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
{include file=$footer}