{include file=$header}
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
  {if $showList == 1}
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
          <div class="req-list-page {if $smarty.foreach.listingLoop.index == 0}currPage{/if}">
          {/if}
            <div class="req-list-item">
              <div class="req-list-id">
                <a href="{$path.siteRoot}/view/?rpin={$request.pin}" class="req-list-id-link">#&nbsp;{"%05d"|sprintf:$request.id}</a>
              </div>
              <div class="req-list-campaign">{$request.campaignName|truncate:24:"..."}</div>
              <div class="req-list-salesRep">{$request.curseSalesRep|truncate:24:"..."}</div>
              <div class="req-status-wrapper"><div class="req-list-status status-{$request.status}">{$request.pageStatus}</div></div>
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
  {include file=$unfollowDialog}
</div>
{include file=$footer}