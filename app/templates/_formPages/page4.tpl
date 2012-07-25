<div id="form-page-4" class="form-page" style="display: none;">
  <h3 class="form-page-title">Select Followers</h3>
  <div class="select-followers-container">
    {foreach from=$usersInfo item=user name=userLoop}
      <div class="follower-container {if $user.isAdmin == 1}selected{/if}">
        <div class="follower-check">
          <input type="checkbox" class="follower-checkbox {if $user.isAdmin == 1}adminFollower{/if}" {if $user.isAdmin == 1}checked="checked"{/if} />
          <input type="hidden" class="hidden-user-id" value="{$user.id}" />
        </div>
        <div class="follower-name">{$user.name}</div>
        <div class="follower-email">{$user.email}</div>
        <div class="follower-status">
          {if $user.isAdmin == 1}
            <span style="color: #C06514">Admin</span>
          {/if}
        </div>
      </div>
    {/foreach}
  </div> 
</div>  <!-- .page4 -->