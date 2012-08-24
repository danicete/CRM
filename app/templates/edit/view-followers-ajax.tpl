<div id="viewFollowersDialog">
	<div class="viewFollowersContainer">
		<div class="viewFollowersContent">
			{foreach from=$usersInfo item=user name=usersInfoLoop}
			<div class="follower-container">
				<div class="follower-isadmin">{if $user.isAdmin}Admin{/if}</div>
				<div class="follower-name">{$user.name}</div>
				<div class="follower-email">{$user.email}</div>
				<div class="follower-controls">
					<input type="hidden" class="follower-hidden-id" value="{$user.id}" />
				</div>
			</div>	
			{/foreach}	
		</div>
		<div class="follower-actions">
			<div class="request-dialog-button" id="followerControls" data-url="{$path.siteRoot}/edit/followers/?rpin={$requestPIN}">Follower Controls</div>
			<div class="request-dialog-button" id="followerClose">Close</div>
<!-- 			<a href="{$path.siteRoot}/edit/followers/?rpin={$requestPIN}"><div class="follower-action" id="followerAdd">Add Follower</div></a>
			<div class="follower-action" id="followerClose">Close</div> -->
		</div>
	</div>	
</div>