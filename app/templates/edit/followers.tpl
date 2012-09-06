{include file=$header}
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
      <div class="request-dialog-button" id="followerAdd">Add Follower</div>
    </div>
  </div>
  <div id="addFollowerDialog"></div>
  <div id="removeFollowerDialog" style="display:none;">
    {include file=$removeFollower}
  </div>
  <input type="hidden" id="followersURL" value="{$path.siteRoot}/edit/followers" />
  <input type="hidden" id="requestPIN" value="{$rpin}" />
  <div class="small-page-footer">
    <a href="{$path.siteRoot}/view/?rpin={$rpin}">Back to Request</a>
  </div>
{include file=$footer}